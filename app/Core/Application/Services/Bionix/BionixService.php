<?php

namespace App\Core\Application\Services\Bionix;

use App\Core\Application\FileUpload\FileUpload;
use App\Core\Application\Mail\BnxStatusMail;
use App\Core\Application\Services\Payment\CreatePaymentRequest;
use App\Core\Application\Services\Payment\PaymentService;
use App\Core\Application\Services\Event\EventService;
use App\Core\Domain\Models\Eloquents\Bionix\Bionix;
use App\Core\Domain\Models\Eloquents\User\User;
use App\Core\Domain\Models\Eloquents\UserHasEvent\UserHasEvent;
use App\Exceptions\IseException;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Mail;
use Ramsey\Uuid\Uuid;
use Throwable;

class BionixService
{
    private EventService $eventService;
    private PaymentService $paymentService;
    private $event_id = "c5ae4f6e-22e8-11ee-be56-0242ac120002";

    public function __construct(EventService $eventService, PaymentService $paymentService)
    {
        $this->eventService = $eventService;
        $this->paymentService = $paymentService;
    }
    public function getPeserta($user_id)
    {
        $peserta = Bionix::where('ketua_id', $user_id)->firstOrFail();

        return $peserta;
    }

    public function getAllPeserta($search, $entries, $orderby, $order)
    {
        $columns = ['users.full_name', 'team_name'];

        $paginate = Bionix::join('users', 'bionix.ketua_id', '=', 'users.id')
            ->join('status_types', 'bionix.status_type_id', '=', 'status_types.id')
            ->where(function ($q) use ($search, $columns) {
                foreach ($columns as $column) {
                    $q->orWhere($column, 'like', '%' . $search . '%');
                }
            })
            ->orderBy($this->sanitizeOrderBy($orderby), $this->sanitizeOrder($order))
            ->paginate($entries);

        return $paginate;
    }

     protected function sanitizeOrderBy($orderby)
    {
        $allowedColumns = ['bionix.created_at', 'full_name', 'status_type_id'];
        return in_array($orderby, $allowedColumns) ? $orderby : 'bionix.created_at';
    }

    protected function sanitizeOrder($order)
    {
        return in_array(strtolower($order), ['asc', 'desc']) ? strtolower($order) : 'asc';
    }

    public function accept($ketua_id)
    {
        $bionixpeserta = Bionix::where('ketua_id', $ketua_id)->firstOrFail();

        $bionixpeserta->status_type_id = 3;

        $bionixpeserta->save();

        try {
            Mail::to($bionixpeserta->user->email)->send(new BnxStatusMail(
                "",
                $bionixpeserta->user->full_name,
                true
            ));
        } catch (Throwable $e) {
            IseException::throw("Gagal mengirim email", 1601);
        }

        return $bionixpeserta;
    }

    public function reject($ketua_id, $reason)
    {
        $bionixpeserta = Bionix::where('ketua_id', $ketua_id)->firstOrFail();

        try {
            Mail::to($bionixpeserta->user->email)->send(new BnxStatusMail(
                $reason,
                $bionixpeserta->user->full_name,
                false
            ));
        } catch (Throwable $e) {
            IseException::throw("Gagal mengirim email", 1601);
        }

        $bionixpeserta->delete();

        $userHasEvent = UserHasEvent::where('ketua_id', $ketua_id)->where('event_id', 'c5ae4f6e-22e8-11ee-be56-0242ac120002');


        $userHasEvent->delete();
    }

    public function register(BionixRequest $request)
    {
        // check if user already registered Ini sudah pakai yang BIONIX
        $registered = Bionix::where('ketua_id', auth()->user()->id)->first();
        $user_has_event = $this->eventService->isUserOnEvent($this->event_id,  auth()->user()->id);

        if ($registered || $user_has_event) {
            IseException::throw('Anda sudah terdaftar', 3100);
        }

        $user = User::find(auth()->user()->id);

        $filektstdcard = FileUpload::create($request->getKetuaStdCard(), "bnx", auth()->user()->id . Carbon::now(), "Student_Card_Ketua");
        $filektstdcard->upload();

        $filektposter = FileUpload::create($request->getKetuaPoster(), "bnx", auth()->user()->id . Carbon::now(), "Poster_Ketua");
        $filektposter->upload();

        $filektfollow = FileUpload::create($request->getKetuaBuktiInsta(), "bnx", auth()->user()->id . Carbon::now(), "Bukti_Follow");
        $filektfollow->upload();

        $filestdcard = FileUpload::create($request->getAnggotaStdCard(), "bnx", auth()->user()->id . Carbon::now(), "Student_Card_Anggota");
        $filestdcard->upload();

        $filestdposter = FileUpload::create($request->getAnggotaPoster(), "bnx", auth()->user()->id . Carbon::now(), "Poster_Anggota");
        $filestdposter->upload();

        $fileanggotafollow = FileUpload::create($request->getAnggotaBuktiInsta(), "bnx", auth()->user()->id . Carbon::now(), "Bukti_Follow");
        $fileanggotafollow->upload();

        $payment_proof = FileUpload::create($request->getPaymentFile(), "bnx", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "Payment_" );
        $payment_proof->upload();

        $payment_request = new CreatePaymentRequest(
            auth()->user()->id,
            $this->event_id,
            30000,
            $payment_proof->getUrl(),
            Carbon::now()->timezone('Asia/Jakarta')->addDays(1),
            1,
            1
        );

        $payment = $this->paymentService->create_payment($payment_request);

        $bionixpeserta = Bionix::create([
            'id' => Uuid::uuid4()->toString(),
            'team_name' => $request->getTeamName(),
            'status_type_id' => '30',
            'asal_sekolah' => $request->getAsalSekolah(),
            'ketua_id' => $user->id,
            'ketua_student_card' => $filektstdcard->getUrl(),
            'ketua_poster' => $filektposter->getUrl(),
            'ketua_twibbon' => $request->getKetuaTwibbon(),
            'ketua_bukti_insta' => $filektfollow->getUrl(),
            'anggota_name' => $request->getAnggotaName(),
            'anggota_email' => $request->getAnggotaEmail(),
            'anggota_hp' => $request->getAnggotaHp(),
            'anggota_twibbon' => $request->getAnggotaTwibbon(),
            'anggota_bukti_insta' => $fileanggotafollow->getUrl(),
            'anggota_student_card' => $filestdcard->getUrl(),
            'anggota_poster' => $filestdposter->getUrl(),
            'payment_id' => $payment,


        ]);

        $this->eventService->registerUserToEvent($this->event_id, auth()->user()->id);
        return $bionixpeserta;
    }
    public function updateStatus($user_id, $status_type_id)
    {
        $bionix_peserta = Bionix::where('ketua_id', $user_id)->first();

        $bionix_peserta->status_type_id = $status_type_id;
        $bionix_peserta->save();

        return $bionix_peserta;
    }

    public function countRegistered()
    {
        $count = Bionix::count();

        return $count;
    }

    public function countVerified()
    {
        $count = Bionix::where('status_type_id', 31)->count();

        return $count;
    }
    public function acceptRegistration($user_id)
    {
        $this->updateStatus($user_id, 31);
    }

    public function rejectRegistration($user_id)
    {
        $bionixPeserta = Bionix::where('ketua_id', $user_id);
        $userHasEvent = UserHasEvent::where('user_id', $user_id )->where('event_id',$this->event_id);
        $bionixPeserta->delete();
        $userHasEvent->delete();
    }

}

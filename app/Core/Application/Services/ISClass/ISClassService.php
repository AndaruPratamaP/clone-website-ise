<?php

namespace App\Core\Application\Services\ISClass;

use App\Core\Application\FileUpload\FileUpload;
use App\Core\Application\Services\Event\EventService;
use App\Core\Domain\Models\Eloquents\UserHasEvent\UserHasEvent;
use App\Core\Application\Services\ISClass\ISClassRegistrationRequest;
use App\Core\Application\Services\Payment\CreatePaymentRequest;
use App\Core\Application\Services\Payment\PaymentService;
use App\Core\Domain\Models\Eloquents\ISClass\ISClass;
use App\Core\Domain\Models\Eloquents\User\User;
use App\Exceptions\IseException;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\UploadedFile;

class ISClassService
{
    private EventService $eventService;
    private PaymentService $paymentService;
    private $event_id = "7e3352a8-5b8b-426f-be00-6f7b1ad50345";

    public function __construct(EventService $eventService, PaymentService $paymentService)
    {
        $this->eventService = $eventService;
        $this->paymentService = $paymentService;
    }

    public function getPeserta($user_id)
    {
        $peserta = ISClass::where('user_id', $user_id)->firstOrFail();

        return $peserta;
    }

    public function getAllPeserta($search, $entries, $orderby, $order)
    {
        $columns = ['full_name', 'email'];

        $paginate = ISClass::join('users', 'is_class.user_id', '=', 'users.id')
            ->join('status_types', 'is_class.status_type_id', '=', 'status_types.id')
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
        $allowedColumns = ['is_class.created_at', 'full_name', 'status_type_id'];
        return in_array($orderby, $allowedColumns) ? $orderby : 'is_class.created_at';
    }

    protected function sanitizeOrder($order)
    {
        return in_array(strtolower($order), ['asc', 'desc']) ? strtolower($order) : 'asc';
    }

    public function register(ISClassRegistrationRequest $request)
    {
        // check if user already registered
        $registered = ISClass::where('user_id', auth()->user()->id)->first();
        $user_has_event = $this->eventService->isUserOnEvent($this->event_id, auth()->user()->id);

        if ($registered || $user_has_event) {
            IseException::throw('Anda sudah terdaftar', 3100);
        }

        $user = User::find(auth()->user()->id);

        $friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $user->full_name);

        $student_card = FileUpload::create($request->getStudentCardFile(), "ISClass", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "Student_Card" . $friendly_name);
        $student_card->upload();

        $upload_poster = FileUpload::create($request->getUploadPosterFile(), "ISClass", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "Upload_Poster" . $friendly_name);
        $upload_poster->upload();

        $follow_proof = FileUpload::create($request->getFollowProofFile(), "ISClass", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "Follow_Proof" . $friendly_name);
        $follow_proof->upload();

        $payment_proof = FileUpload::create($request->getPaymentProofFile(), "ISClass", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "Payment_Proof" . $friendly_name);
        $payment_proof->upload();

        $payment_request = new CreatePaymentRequest(
            auth()->user()->id,
            $this->event_id,
            15000,
            $payment_proof->getUrl(),
            Carbon::now()->timezone('Asia/Jakarta')->addDays(1),
            $request->getBankId(),
            1
        );

        $payment = $this->paymentService->create_payment($payment_request);

        $ISClass_peserta = ISClass::create([
            'id' => Uuid::uuid4()->toString(),
            'user_id' => auth()->user()->id,
            'student_card_file' => $student_card->getUrl(),
            'upload_poster_file' => $upload_poster->getUrl(),
            'follow_proof_file' => $follow_proof->getUrl(),
            'twibbon_link' => $request->getTwibbonLink(),
            'payment_proof_file' => $payment_proof->getUrl(),
            'payment_id' => $payment,
            'status_type_id' => 18,
            'referral' => "-",
        ]);

        $this->eventService->registerUserToEvent($this->event_id, auth()->user()->id);

        return $ISClass_peserta;
    }

    public function updateStatus($user_id, $status_type_id)
    {
        $ISClass_peserta = ISClass::where('user_id', $user_id)->first();

        $ISClass_peserta->status_type_id = $status_type_id;
        $ISClass_peserta->save();

        return $ISClass_peserta;
    }

    public function accept($user_id)
    {
        $this->updateStatus($user_id, 19);
    }

    public function reject($user_id)
    {
        $isPeserta = ISClass::where('user_id', $user_id);
        $userHasEvent = UserHasEvent::where('user_id', $user_id )->where('event_id',$this->event_id);
        $isPeserta->delete();
        $userHasEvent->delete();
    }
}

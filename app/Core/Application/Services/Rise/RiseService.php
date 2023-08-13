<?php

namespace App\Core\Application\Services\Rise;

use App\Core\Application\FileUpload\FileUpload;
use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\Payment\CreatePaymentRequest;
use App\Core\Domain\Models\Eloquents\UserHasEvent\UserHasEvent;
use App\Core\Application\Services\Payment\PaymentService;
use App\Core\Application\Services\Rise\RiseRegistrationRequest;
use App\Core\Application\Services\Rise\RisePenyisihanRequest;
use App\Core\Application\Services\Rise\RisePembayaranRequest;
use App\Core\Application\Services\Rise\RiseSemifinalRequest;
use App\Core\Application\Services\Rise\RiseFinalRequest;
use App\Core\Domain\Models\Eloquents\User\User;
use App\Core\Domain\Models\Eloquents\Rise\Rise;
use App\Exceptions\IseException;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class RiseService
{
    private EventService $eventService;
    private PaymentService $paymentService;
    private $event_id = "78ec95d2-92c8-4ad2-9bc4-b32bcf049668";

    public function __construct(EventService $eventService, PaymentService $paymentService)
    {
        $this->eventService = $eventService;
        $this->paymentService = $paymentService;
    }

    public function getPeserta($user_id)
    {
        $peserta = Rise::where('leader_id', $user_id)->firstOrFail();

        return $peserta;
    }

    public function getAllPeserta($search, $entries, $orderby, $order)
    {
        $columns = ['full_name', 'email', 'team_name'];

        $paginate = Rise::join('users', 'rise.leader_id', '=', 'users.id')
            ->join('status_types', 'rise.status_type_id', '=', 'status_types.id')
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
        $allowedColumns = ['rise.created_at', 'rise.team_name', 'full_name', 'status_type_id'];
        return in_array($orderby, $allowedColumns) ? $orderby : 'rise.created_at';
    }

    protected function sanitizeOrder($order)
    {
        return in_array(strtolower($order), ['asc', 'desc']) ? strtolower($order) : 'asc';
    }

    public function countRegistered()
    {
        $count = Rise::count();

        return $count;
    }

    public function countVerified()
    {
        $count = Rise::whereBetween('status_type_id', [34, 47])->count();

        return $count;
    }


    public function register(RiseRegistrationRequest $request)
    {
        // check if user already registered
        $registered = Rise::where('leader_id', auth()->user()->id)->first();
        $user_has_event = $this->eventService->isUserOnEvent($this->event_id, auth()->user()->id);

        if ($registered || $user_has_event) {
            IseException::throw('Anda sudah terdaftar', 3100);
        }

        $user = User::find(auth()->user()->id);

        $leader_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $user->full_name);
        $member1_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $request->getMember1Name());


        $leader_student_card = FileUpload::create($request->getLeaderStudentCard(), "rise", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "StudentCard_" . $leader_friendly_name);
        $leader_student_card->upload();

        $leader_poster = FileUpload::create($request->getLeaderPoster(), "rise", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "Poster_" . $leader_friendly_name);
        $leader_poster->upload();

        $leader_ig_follow = FileUpload::create($request->getLeaderIgFollow(), "rise", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "IG_Follow_" . $leader_friendly_name);
        $leader_ig_follow->upload();

        $member1_student_card = FileUpload::create($request->getMember1StudentCard(), "rise", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "StudentCard_" . $member1_friendly_name);
        $member1_student_card->upload();

        $member1_poster = FileUpload::create($request->getMember1Poster(), "rise", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "Poster_" . $member1_friendly_name);
        $member1_poster->upload();

        $member1_ig_follow = FileUpload::create($request->getMember1IgFollow(), "rise", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "IG_Follow_" . $member1_friendly_name);
        $member1_ig_follow->upload();


        function hasMember2Name($request)
        {
            $member2_name = $request->getMember2Name();
            return !empty($member2_name) && $member2_name !== null;
        }
        if (hasMember2Name($request)) {
            $member2_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $request->getMember2Name());

            $member2_student_card = FileUpload::create($request->getMember2StudentCard(), "rise", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "StudentCard_" . $member2_friendly_name);
            $member2_student_card->upload();

            $member2_poster = FileUpload::create($request->getMember2Poster(), "rise", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "Poster_" . $member2_friendly_name);
            $member2_poster->upload();

            $member2_ig_follow = FileUpload::create($request->getMember2IgFollow(), "rise", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "IG_Follow_" . $member2_friendly_name);
            $member2_ig_follow->upload();
        }

        // $payment_request = new CreatePaymentRequest(
        //     auth()->user()->id,
        //     $this->event_id,
        //     30000,
        //     $payment_proof->getUrl(),
        //     Carbon::now()->timezone('Asia/Jakarta')->addDays(1),
        //     1,
        //     1
        // );

        // $payment = $this->paymentService->create_payment($payment_request);

        $rise_peserta = Rise::create([
            'id' => Uuid::uuid4()->toString(),
            'user_id' => $user->id,
            'status_type_id' => '33', // Registered
            'team_name' => $request->getTeamName(),
            'leader_id' => $user->id,
            // 'leader_agency' => $request->getLeaderAgency(),
            // 'leader_name' => $request->getLeaderName(),
            // 'leader_phone' => $request->getLeaderPhone(),
            // 'leader_email' => $request->getLeaderEmail(),
            'leader_twibbon' => $request->getLeaderTwibbon(),
            'referral_code' => $request->getReferralCode() ?? null,
            'leader_student_card' => $leader_student_card->getUrl(),
            'leader_poster' => $leader_poster->getUrl(),
            'leader_ig_follow' => $leader_ig_follow->getUrl(),
            'member1_name' => $request->getMember1Name(),
            'member1_agency' => $request->getMember1Agency(),
            'member1_phone' => $request->geMember1Phone(),
            'member1_email' => $request->getMember1Email(),
            'member1_twibbon' => $request->getMember1Twibbon(),
            'member1_student_card' => $member1_student_card->getUrl(),
            'member1_poster' => $member1_poster->getUrl(),
            'member1_ig_follow' => $member1_ig_follow->getUrl(),
            'member2_name' => $request->getMember2Name() ?? null,
            'member2_agency' => $request->getMember2Agency() ?? null,
            'member2_phone' => $request->getMember2Phone() ?? null,
            'member2_email' => $request->getMember2Email() ?? null,
            'member2_twibbon' => $request->getMember2Twibbon() ?? null,
            'member2_student_card' => hasMember2Name($request) ? $member2_student_card->getUrl() : null, // Set to null if Member 2 doesn't have a student card
            'member2_poster' => hasMember2Name($request) ? $member2_poster->getUrl() : null, // Set to null if Member 2 doesn't have a poster
            'member2_ig_follow' => hasMember2Name($request) ? $member2_ig_follow->getUrl() : null, // Set to null if Member 2 doesn't have an IG follow


        ]);

        $this->eventService->registerUserToEvent($this->event_id, auth()->user()->id);

        return $rise_peserta;
    }

    public function registerPenyisihan(RisePenyisihanRequest $request)
    {
        // check if user already registered
        $user = User::find(auth()->user()->id);
        $tim_rise = Rise::where('leader_id', $user->id)->first();
        $status_type = (int) $tim_rise->status_type_id;

        if ($status_type > 38 || $status_type == 37 || $status_type == 36) {
          IseException::throw('Anda sudah Mengisi Form Penyisihan', 3100);
        } elseif ($status_type == 33) {
          IseException::throw('Harap tunggu admin untuk mengkonfirmasi form sebelumnya', 3200);
        } elseif ($status_type != 34 && $status_type != 38) {
          IseException::throw('Mohon lakukan pendaftaran RISE dahulu', 3300);
        }

        $user = User::find(auth()->user()->id);
        $team_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $tim_rise->team_name);

        $answer_file_penyisihan = FileUpload::create($request->getAnswerFilePenyisihan(), "rise", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "AnswerPenyisihan_" . $team_friendly_name);
        $answer_file_penyisihan->upload();

        $poster_file_penyisihan = FileUpload::create($request->getPosterFilePenyisihan(), "rise", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "PosterPenyisihan_" . $team_friendly_name);
        $poster_file_penyisihan->upload();

        $rise_peserta = Rise::where('leader_id', $user->id)->update([
            'status_type_id' => '36', // Registered Penyisihan
            'answer_file_penyisihan' => $answer_file_penyisihan->getUrl(),
            'poster_file_penyisihan' => $poster_file_penyisihan->getUrl(),
        ]);

        return $rise_peserta;
    }

    public function registerPembayaran(RisePembayaranRequest $request)
    {
        // check if user already registered
        $user = User::find(auth()->user()->id);
        $tim_rise = Rise::where('leader_id', $user->id)->first();
        $status_type = (int) $tim_rise->status_type_id;

        if ($status_type > 41 || $status_type == 40 || $status_type == 39) {
          IseException::throw('Anda sudah Mengisi Form Pembayaran', 3100);
        } elseif ($status_type == 36) {
          IseException::throw('Harap tunggu admin untuk mengkonfirmasi form Penyisihan', 3200);
        } elseif ($status_type != 37 && $status_type != 41) {
          IseException::throw('Mohon lakukan pendaftaran Penyisihan dahulu', 3300);
        }

        $user = User::find(auth()->user()->id);
        $team_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $tim_rise->team_name);

        $payment_file = FileUpload::create($request->getPaymentFile(), "rise", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "PaymentFile_" . $team_friendly_name);
        $payment_file->upload();

        $payment_request = new CreatePaymentRequest(
            auth()->user()->id,
            $this->event_id,
            89000,
            $payment_file->getUrl(),
            Carbon::now()->timezone('Asia/Jakarta')->addDays(1),
            1,
            1
        );

        $payment = $this->paymentService->create_payment($payment_request);
        $rise_peserta = Rise::where('leader_id', $user->id)->update([
            'status_type_id' => '39', // Registered Pembayaran
            'payment_id' => $payment,
            'account_owner' => $request->getAccountOwner(),
            'bank_name' => $request->getBankName(),
            'payment_file' => $payment_file->getUrl(),
        ]);

        return $rise_peserta;
    }

    public function registerSemifinal(RiseSemifinalRequest $request)
    {
        // check if user already registered
        $user = User::find(auth()->user()->id);
        $tim_rise = Rise::where('leader_id', $user->id)->first();
        $status_type = (int) $tim_rise->status_type_id;

        if ($status_type > 44 || $status_type == 43 || $status_type == 42) {
          IseException::throw('Anda sudah Mengisi Form Semifinal', 3100);
        } elseif ($status_type == 39) {
          IseException::throw('Harap tunggu admin untuk mengkonfirmasi form Pembayaran', 3200);
        } elseif ($status_type != 40 && $status_type != 44) {
          IseException::throw('Mohon isi Form Pembayaran dahulu', 3300);
        }

        $user = User::find(auth()->user()->id);
        $team_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $tim_rise->team_name);

        $answer_file_semifinal = FileUpload::create($request->getAnswerFileSemifinal(), "rise", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "AnswerSemifinal_" . $team_friendly_name);
        $answer_file_semifinal->upload();

        $rise_peserta = Rise::where('leader_id', $user->id)->update([
            'status_type_id' => '42', // Registered Semifinal
            'youtube_link' => $request->getYoutubeLink(),
            'answer_file_semifinal' => $answer_file_semifinal->getUrl(),
        ]);

        return $rise_peserta;
    }

    public function registerFinal(RiseFinalRequest $request)
    {
        // check if user already registered
        $user = User::find(auth()->user()->id);
        $tim_rise = Rise::where('leader_id', $user->id)->first();
        $status_type = (int) $tim_rise->status_type_id;

        if ($status_type > 47 || $status_type == 46 || $status_type == 45) {
          IseException::throw('Anda sudah Mengisi Form Final', 3100);
        } elseif ($status_type == 42) {
          IseException::throw('Harap tunggu admin untuk mengkonfirmasi form Semifinal', 3200);
        } elseif ($status_type != 43 && $status_type != 47) {
          IseException::throw('Mohon isi Form Semifinal dahulu', 3300);
        }

        $user = User::find(auth()->user()->id);
        $team_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $tim_rise->team_name);

        $answer_file_final = FileUpload::create($request->getAnswerFileFinal(), "rise", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "AnswerFinal_" . $team_friendly_name);
        $answer_file_final->upload();

        $rise_peserta = Rise::where('leader_id', $user->id)->update([
            'status_type_id' => '45', // Registered Semifinal
            'answer_file_final' => $answer_file_final->getUrl(),
        ]);

        return $rise_peserta;
    }

    public function updateStatus($user_id, $status_type_id)
    {
        $rise_peserta = Rise::where('leader_id', $user_id)->first();

        $rise_peserta->status_type_id = $status_type_id;
        $rise_peserta->save();

        return $rise_peserta;
    }

    public function acceptRegistration($user_id)
    {
        $this->updateStatus($user_id, 34);
    }

    public function rejectRegistration($user_id)
    {
        $risePeserta = Rise::where('leader_id', $user_id);
        $userHasEvent = UserHasEvent::where('user_id', $user_id )->where('event_id',$this->event_id);
        $risePeserta->delete();
        $userHasEvent->delete();
    }

    public function acceptPenyisihan($user_id)
    {
        $this->updateStatus($user_id, 37);
    }

    public function rejectPenyisihan($user_id)
    {
        $this->updateStatus($user_id, 38);
    }

    public function acceptPembayaran($user_id)
    {
        $this->updateStatus($user_id, 40);
    }

    public function rejectPembayaran($user_id)
    {
        $this->updateStatus($user_id, 41);
    }
    public function acceptSemifinal($user_id)
    {
        $this->updateStatus($user_id, 43);
    }

    public function rejectSemifinal($user_id)
    {
        $this->updateStatus($user_id, 44);
    }
    public function acceptFinal($user_id)
    {
        $this->updateStatus($user_id, 46);
    }

    public function rejectFinal($user_id)
    {
        $this->updateStatus($user_id, 47);
    }
}

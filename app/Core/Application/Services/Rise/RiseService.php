<?php

namespace App\Core\Application\Services\Rise;

use App\Core\Application\FileUpload\FileUpload;
use App\Core\Application\Services\Event\EventService;
// use App\Core\Application\Services\Payment\CreatePaymentRequest;
// use App\Core\Application\Services\Payment\PaymentService;
use App\Core\Application\Services\Rise\RiseRegistrationRequest;
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
    // private PaymentService $paymentService;
    private $event_id = "78ec95d2-92c8-4ad2-9bc4-b32bcf049668";

    // public function __construct(EventService $eventService, PaymentService $paymentService)
    // {
    //     $this->eventService = $eventService;
    //     $this->paymentService = $paymentService;
    // }

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
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
            'referral_code' => $request->getReferralCode(),
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

    // public function turnInAnswer(UploadedFile $answer_file)
    // {
    //     $user = User::find(auth()->user()->id);

    //     $friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $user->full_name);

    //     $answer = FileUpload::create($answer_file, "uxacademy", auth()->user()->id . Carbon::now(), "Answer_" . $friendly_name);
    //     $answer->upload();

    //     $dsacademy_peserta = DSAcademy::where('ketua_id', auth()->user()->id)->first();

    //     $dsacademy_peserta->answer_file = $answer->getUrl();
    //     $dsacademy_peserta->save();

    //     return $dsacademy_peserta;
    // }

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

    // public function reviseRegistration($user_id)
    // {
    //     $this->updateStatus($user_id, 13);
    // }

    public function rejectRegistration($user_id)
    {
        $this->updateStatus($user_id, 35);
    }

    // public function acceptAnswer($user_id)
    // {
    //     $this->updateStatus($user_id, 15);
    // }

    // public function reviseAnswer($user_id)
    // {
    //     $this->updateStatus($user_id, 16);
    // }

    // public function rejectAnswer($user_id)
    // {
    //     $this->updateStatus($user_id, 17);
    // }
}

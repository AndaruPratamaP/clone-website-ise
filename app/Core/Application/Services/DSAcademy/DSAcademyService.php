<?php

namespace App\Core\Application\Services\DSAcademy;

use App\Core\Application\FileUpload\FileUpload;
use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\Payment\CreatePaymentRequest;
use App\Core\Application\Services\Payment\PaymentService;
use App\Core\Application\Services\DSAcademy\DSAcademyRegistrationRequest;
use App\Core\Domain\Models\Eloquents\User\User;
use App\Core\Domain\Models\Eloquents\DSAcademy\DSAcademy;
use App\Exceptions\IseException;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\UploadedFile;

class DSAcademyService
{
    private EventService $eventService;
    private PaymentService $paymentService;
    private $event_id = "3f99d663-7d8c-4afd-99eb-2f97e1eed585";

    public function __construct(EventService $eventService, PaymentService $paymentService)
    {
        $this->eventService = $eventService;
        $this->paymentService = $paymentService;
    }

    public function getPeserta($user_id)
    {
        $peserta = DSAcademy::where('ketua_id', $user_id)->firstOrFail();

        return $peserta;
    }

    public function getAllPeserta($search, $entries, $orderby, $order)
    {
        $columns = ['full_name', 'email', 'team_name'];

        $paginate = DSAcademy::join('users', 'ds_academy.ketua_id', '=', 'users.id')
            ->join('status_types', 'ds_academy.status_type_id', '=', 'status_types.id')
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
        $allowedColumns = ['ds_academy.created_at', 'ds_academy.team_name', 'full_name', 'status_type_id'];
        return in_array($orderby, $allowedColumns) ? $orderby : 'ds_academy.created_at';
    }

    protected function sanitizeOrder($order)
    {
        return in_array(strtolower($order), ['asc', 'desc']) ? strtolower($order) : 'asc';
    }

    public function register(DSAcademyRegistrationRequest $request)
    {
        // check if user already registered
        $registered = DSAcademy::where('ketua_id', auth()->user()->id)->first();
        $user_has_event = $this->eventService->isUserOnEvent($this->event_id, auth()->user()->id);

        if ($registered || $user_has_event) {
            IseException::throw('Anda sudah terdaftar', 3100);
        }

        $user = User::find(auth()->user()->id);

        $ketua_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $user->full_name);
        $first_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $request->getFirstFullName());
        $second_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $request->getSecondFullName());
        $team_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $request->getTeamName());

        $ketua_cv = FileUpload::create($request->getKetuaCvFile(), "dsacademy", auth()->user()->id . Carbon::now(), "CV_" . $ketua_friendly_name);
        $ketua_cv->upload();

        $ketua_student_card = FileUpload::create($request->getKetuaStudentCard(), "dsacademy", auth()->user()->id . Carbon::now(), "StudentCard_" . $ketua_friendly_name);
        $ketua_student_card->upload();

        $first_cv = FileUpload::create($request->getFirstCvFile(), "dsacademy", auth()->user()->id . Carbon::now(), "CV_" . $first_friendly_name);
        $first_cv->upload();

        $first_student_card = FileUpload::create($request->getFirstStudentCard(), "dsacademy", auth()->user()->id . Carbon::now(), "StudentCard_" . $first_friendly_name);
        $first_student_card->upload();

        $second_cv = FileUpload::create($request->getSecondCvFile(), "dsacademy", auth()->user()->id . Carbon::now(), "CV_" . $second_friendly_name);
        $second_cv->upload();

        $second_student_card = FileUpload::create($request->getSecondStudentCard(), "dsacademy", auth()->user()->id . Carbon::now(), "StudentCard_" . $second_friendly_name);
        $second_student_card->upload();

        $payment_proof = FileUpload::create($request->getPaymentFile(), "dsacademy", auth()->user()->id . Carbon::now(), "Payment_" . $team_friendly_name);
        $payment_proof->upload();

        $payment_request = new CreatePaymentRequest(
            auth()->user()->id,
            $this->event_id,
            30000,
            $payment_proof->getUrl(),
            Carbon::now()->addDays(1),
            1,
            1
        );

        $payment = $this->paymentService->create_payment($payment_request);

        $dsacademy_peserta = DSAcademy::create([
            'id' => Uuid::uuid4()->toString(),
            'user_id' => $user->id,
            'payment_id' => $payment,
            'status_type_id' => '11', // Registered
            'team_name' => $request->getTeamName(),
            'ketua_id' => $user->id,
            'ketua_major' => $request->getKetuaMajor(),
            'ketua_instagram_link' => $request->getKetuaInstagramLink(),
            'ketua_twibbon_link' => $request->getKetuaTwibbonLink(),
            'ketua_cv_file' => $ketua_cv->getUrl(),
            'ketua_student_card' => $ketua_student_card->getUrl(),
            'first_full_name' => $request->getFirstFullName(),
            'first_institution' => $request->getFirstInstitution(),
            'first_major' => $request->getFirstMajor(),
            'first_email' => $request->getFirstEmail(),
            'first_wa' => $request->getFirstWa(),
            'first_instagram_link' => $request->getFirstInstagramLink(),
            'first_twibbon_link' => $request->getFirstTwibbonLink(),
            'first_cv_file' => $first_cv->getUrl(),
            'first_student_card' => $first_student_card->getUrl(),
            'second_full_name' => $request->getSecondFullName(),
            'second_institution' => $request->getSecondInstitution(),
            'second_major' => $request->getSecondMajor(),
            'second_email' => $request->getSecondEmail(),
            'second_wa' => $request->getSecondWa(),
            'second_instagram_link' => $request->getSecondInstagramLink(),
            'second_twibbon_link' => $request->getSecondTwibbonLink(),
            'second_cv_file' => $second_cv->getUrl(),
            'second_student_card' => $second_student_card->getUrl(),
            'motive_1' => $request->getMotive1(),
            'motive_2' => $request->getMotive2(),
            'motive_3' => $request->getMotive3(),
            'motive_4' => $request->getMotive4(),
        ]);

        $this->eventService->registerUserToEvent($this->event_id, auth()->user()->id);

        return $dsacademy_peserta;
    }

    public function turnInAnswer(UploadedFile $answer_file)
    {
        $user = User::find(auth()->user()->id);

        $friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $user->full_name);

        $answer = FileUpload::create($answer_file, "uxacademy", auth()->user()->id . Carbon::now(), "Answer_" . $friendly_name);
        $answer->upload();

        $dsacademy_peserta = DSAcademy::where('ketua_id', auth()->user()->id)->first();

        $dsacademy_peserta->answer_file = $answer->getUrl();
        $dsacademy_peserta->save();

        return $dsacademy_peserta;
    }

    public function updateStatus($user_id, $status_type_id)
    {
        $dsacademy_peserta = DSAcademy::where('ketua_id', $user_id)->first();

        $dsacademy_peserta->status_type_id = $status_type_id;
        $dsacademy_peserta->save();

        return $dsacademy_peserta;
    }

    public function acceptRegistration($user_id)
    {
        $this->updateStatus($user_id, 12);
    }

    public function reviseRegistration($user_id)
    {
        $this->updateStatus($user_id, 13);
    }

    public function rejectRegistration($user_id)
    {
        $this->updateStatus($user_id, 14);
    }

    public function acceptAnswer($user_id)
    {
        $this->updateStatus($user_id, 15);
    }

    public function reviseAnswer($user_id)
    {
        $this->updateStatus($user_id, 16);
    }

    public function rejectAnswer($user_id)
    {
        $this->updateStatus($user_id, 17);
    }
}

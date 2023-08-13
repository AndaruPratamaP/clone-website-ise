<?php

namespace App\Core\Application\Services\UXAcademy;

use App\Core\Application\FileUpload\FileUpload;
use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\Payment\CreatePaymentRequest;
use App\Core\Application\Services\Payment\PaymentService;
use App\Core\Application\Services\UXAcademy\UXAcademyRegistrationRequest;
use App\Core\Domain\Models\Eloquents\UserHasEvent\UserHasEvent;
use App\Core\Domain\Models\Eloquents\User\User;
use App\Core\Domain\Models\Eloquents\UXAcademy\UXAcademy;
use App\Exceptions\IseException;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\UploadedFile;

class UXAcademyService
{
    private EventService $eventService;
    private PaymentService $paymentService;
    private $event_id = "89b3f9c0-b63b-4497-85d6-c7812c7bb0da";

    public function __construct(EventService $eventService, PaymentService $paymentService)
    {
        $this->eventService = $eventService;
        $this->paymentService = $paymentService;
    }

    public function getPeserta($user_id)
    {
        $peserta = UXAcademy::where('user_id', $user_id)->firstOrFail();

        return $peserta;
    }

    public function getAllPeserta($search, $entries, $orderby, $order)
    {
        $columns = ['full_name', 'email'];

        $paginate = UXAcademy::join('users', 'ux_academy.user_id', '=', 'users.id')
            ->join('status_types', 'ux_academy.status_type_id', '=', 'status_types.id')
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
        $allowedColumns = ['ux_academy.created_at', 'full_name', 'status_type_id'];
        return in_array($orderby, $allowedColumns) ? $orderby : 'ux_academy.created_at';
    }

    protected function sanitizeOrder($order)
    {
        return in_array(strtolower($order), ['asc', 'desc']) ? strtolower($order) : 'asc';
    }

    public function register(UXAcademyRegistrationRequest $request)
    {
        // check if user already registered
        $registered = UXAcademy::where('user_id', auth()->user()->id)->first();
        $user_has_event = $this->eventService->isUserOnEvent($this->event_id, auth()->user()->id);

        if ($registered || $user_has_event) {
            IseException::throw('Anda sudah terdaftar', 3100);
        }

        $user = User::find(auth()->user()->id);

        $friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $user->full_name);

        $cv = FileUpload::create($request->getCvFile(), "uxacademy", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "CV_" . $friendly_name);
        $cv->upload();

        $student_card = FileUpload::create($request->getStudentCard(), "uxacademy", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "Student_Card" . $friendly_name);
        $student_card->upload();

        $payment_proof = FileUpload::create($request->getPaymentProofFile(), "uxacademy", auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'), "Payment_Proof" . $friendly_name);
        $payment_proof->upload();

        $payment_request = new CreatePaymentRequest(
            auth()->user()->id,
            $this->event_id,
            15000,
            $payment_proof->getUrl(),
            Carbon::now()->timezone('Asia/Jakarta')->addDays(1),
            1,
            1
        );

        $payment = $this->paymentService->create_payment($payment_request);

        $uxacademy_peserta = UXAcademy::create([
            'id' => Uuid::uuid4()->toString(),
            'user_id' => $user->id,
            'payment_id' => $payment,
            'status_type_id' => '4', // Registered
            'instagram_link' => $request->getInstagramLink(),
            'twibbon_link' => $request->getTwibbonLink(),
            'cv_file' => $cv->getUrl(),
            'student_card' => $student_card->getUrl(),
            'major' => $request->getMajor(),
            'motive_1' => $request->getMotive1(),
            'motive_2' => $request->getMotive2(),
            'motive_3' => $request->getMotive3(),
            'motive_4' => $request->getMotive4(),
            'motive_5' => $request->getMotive5(),
        ]);

        $this->eventService->registerUserToEvent($this->event_id, auth()->user()->id);

        return $uxacademy_peserta;
    }

    public function turnInAnswer(UploadedFile $answer_file)
    {
        $user = User::find(auth()->user()->id);

        $friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $user->full_name);

        $answer = FileUpload::create($answer_file, "uxacademy", auth()->user()->id . Carbon::now(), "Answer_" . $friendly_name);
        $answer->upload();

        $uxacademy_peserta = UXAcademy::where('user_id', auth()->user()->id)->first();

        $uxacademy_peserta->answer_file = $answer->getUrl();
        $uxacademy_peserta->save();

        return $uxacademy_peserta;
    }

    public function updateStatus($user_id, $status_type_id)
    {
        $uxacademy_peserta = UXAcademy::where('user_id', $user_id)->first();

        $uxacademy_peserta->status_type_id = $status_type_id;
        $uxacademy_peserta->save();

        return $uxacademy_peserta;
    }

    public function acceptRegistration($user_id)
    {
        $this->updateStatus($user_id, 5);
    }

    public function reviseRegistration($user_id)
    {
        $this->updateStatus($user_id, 6);
    }

    public function rejectRegistration($user_id)
    {
        $uxPeserta = UXAcademy::where('user_id', $user_id);
        $userHasEvent = UserHasEvent::where('user_id', $user_id )->where('event_id',$this->event_id);
        $uxPeserta->delete();
        $userHasEvent->delete();
    }

    public function acceptAnswer($user_id)
    {
        $this->updateStatus($user_id, 8);
    }

    public function reviseAnswer($user_id)
    {
        $this->updateStatus($user_id, 9);
    }

    public function rejectAnswer($user_id)
    {
        $this->updateStatus($user_id, 10);
    }
}

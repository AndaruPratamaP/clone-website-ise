<?php

namespace App\Http\Controllers\Presentation\Dashboard\UX;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\UXAcademy\UXAcademyRegistrationRequest;
use App\Core\Application\Services\UXAcademy\UXAcademyService;
use App\Http\Controllers\Pages\BaseController;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Throwable;

class UXAcademyRegistrationController extends Component
{
    use BaseController;

    private EventService $event_service;
    private UXAcademyService $service;
    private UXAcademyRegistrationRequest $request;

    public bool $isOpen = false;
    public bool $isRegistered = false;
    public $date;

    public array $user_data = [
        "full_name" => "",
        "email" => "",
        "institution" => "",
    ];

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(EventService $event_service, UXAcademyService $service)
    {
        $this->event_service = $event_service;
        $this->service = $service;

        $this->isRegistered = $this->event_service->isUserOnEvent('89b3f9c0-b63b-4497-85d6-c7812c7bb0da', auth()->user()->id);

        $this->isOpen = $this->event_service->isEventOpen('89b3f9c0-b63b-4497-85d6-c7812c7bb0da');

        $this->user_data = [
            "full_name" => auth()->user()->full_name,
            "email" => auth()->user()->email,
            "institution" => auth()->user()->institution,
        ];
    }

    public function register()
    {
        $this->request = new UXAcademyRegistrationRequest(
            $this->instagram,
            $this->link_upload_twibbon,
            $this->cv,
            $this->share_proof_file,
            $this->payment_proof,
            $this->department,
            $this->reason,
            $this->hope,
            $this->after_ise,
            $this->referral,
            "-",
        );

        DB::beginTransaction();
        try {
            $this->dispatchToast('info', 'Menguplod form...', 'Mohon tunggu sebentar');
            $this->service->register($this->request);
            $this->dispatchToast('success', 'Berhasil Terdaftar', 'Anda telah terdaftar pada UX Academy');

            // redirect
        } catch (Throwable $e) {
            DB::rollBack();
            $this->msg['error'] = $e->getMessage();

            $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
            return;
        }
        DB::commit();

        return redirect()->route('my.ux')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Berhasil mendaftar',
            'text' => 'Anda telah terdaftar pada UX Academy',
        ]);
    }
}

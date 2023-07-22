<?php

namespace App\Http\Controllers\Presentation\Dashboard\ISClass;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\ISClass\ISClassRegistrationRequest;
use App\Core\Application\Services\ISClass\ISClassService;
use App\Http\Controllers\Pages\BaseController;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Throwable;

class ISClassRegistrationController extends Component
{
    use BaseController;

    private EventService $event_service;
    private ISClassService $service;
    private ISClassRegistrationRequest $request;

    public bool $isOpen = false;
    public bool $isFull = false;
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

    public function boot(EventService $event_service, ISClassService $service)
    {
        $this->event_service = $event_service;
        $this->service = $service;

        $this->isRegistered = $this->event_service->isUserOnEvent('89b3f9c0-b63b-4497-85d6-c7812c7bb0da', auth()->user()->id);
        $this->isFull = $this->event_service->isISClassFull();
        $this->isOpen = $this->event_service->isEventOpen('89b3f9c0-b63b-4497-85d6-c7812c7bb0da');

        $this->user_data = [
            "full_name" => auth()->user()->full_name,
            "email" => auth()->user()->email,
            "institution" => auth()->user()->institution,
        ];
    }

    public function register()
    {
        $this->request = new ISClassRegistrationRequest(
            $this->kartu_pelajar,
            $this->poster,
            $this->follow_proof_file,
            $this->twibbon,
            $this->bukti_bayar,
            $this->payment_method
        );

        DB::beginTransaction();
        try {
            $this->dispatchToast('info', 'Menguplod form...', 'Mohon tunggu sebentar');
            $this->service->register($this->request);
            $this->dispatchToast('success', 'Berhasil Terdaftar', 'Anda telah terdaftar pada IS Class');

            // redirect
        } catch (Throwable $e) {
            DB::rollBack();
            $this->msg['error'] = $e->getMessage();

            $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
            return;
        }
        DB::commit();

        return redirect()->route('my.isclass')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Berhasil mendaftar',
            'text' => 'Anda telah terdaftar pada IS Class',
        ]);
    }
}

<?php

namespace App\Http\Controllers\Presentation\Dashboard;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\GrandTalkshow\GrandTalkshowRequest;
use App\Core\Application\Services\GrandTalkshow\GrandTalkshowService;
use App\Http\Controllers\Pages\BaseController;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Throwable;

class GrandTalkshowRegistrationController extends Component
{
    use BaseController;

    private EventService $event_service;
    private GrandTalkshowService $service;
    private GrandTalkshowRequest $request;

    public bool $isOpen = false;
    public bool $isRegistered = false;
    public $date;

    public array $user_data = [
        "full_name" => "",
        "email" => ""
    ];

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(EventService $event_service, GrandTalkshowService $service)
    {
        $this->event_service = $event_service;
        $this->service = $service;

        $this->isRegistered = $this->event_service->isUserOnEvent('a4a6c7cf-0208-11ee-a848-346f24386225', auth()->user()->id);

        $this->isOpen = $this->event_service->isEventOpen('a4a6c7cf-0208-11ee-a848-346f24386225');

        $this->user_data = [
            "full_name" => auth()->user()->full_name,
            "email" => auth()->user()->email,
        ];
    }

    public function register()
    {
        $this->request = new GrandTalkshowRequest(
            $this->referral,
            $this->share_proof_file
        );

        DB::beginTransaction();
        try {
            $this->dispatchToast('info', 'Menguplod form...', 'Mohon tunggu sebentar');
            $this->service->register($this->request, 'a4a6c7cf-0208-11ee-a848-346f24386225');
            $this->dispatchToast('success', 'Berhasil Terdaftar', 'Anda telah terdaftar pada Grand Talkshow');

            // redirect
        } catch (Throwable $e) {
            DB::rollBack();
            $this->msg['error'] = $e->getMessage();

            $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
            return;
        }
        DB::commit();

        return redirect()->route('my.gts')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Berhasil mendaftar',
            'text' => 'Anda telah terdaftar pada Grand Talkshow',
        ]);
    }
}

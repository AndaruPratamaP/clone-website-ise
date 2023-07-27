<?php

namespace App\Http\Controllers\Presentation\Dashboard\Bionix;

use App\Core\Application\Services\Bionix\BionixRequest;
use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\Bionix\BionixService;
use App\Core\Domain\Models\Eloquents\Bionix\Bionix;
use App\Http\Controllers\Pages\BaseController;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Throwable;

class BionixRegistrationController extends Component
{
    use BaseController;

    private EventService $event_service;
    private BionixService $service;
    private BionixRequest $request;

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

    public function boot(EventService $event_service, BionixService $service)
    {
        $this->event_service = $event_service;
        $this->service = $service;

        $this->isRegistered = $this->event_service->isUserOnEvent('c5ae4f6e-22e8-11ee-be56-0242ac120002', auth()->user()->id);

        $this->isOpen = $this->event_service->isEventOpen('c5ae4f6e-22e8-11ee-be56-0242ac120002');

        $this->user_data = [
            "full_name" => auth()->user()->full_name,
            "email" => auth()->user()->email,
        ];
    }

    public function register()
    {
        $this->request = new BionixRequest(
            $this->team_name ,
            $this->school ,
            $this->member_name,
            $this->member_email,
            $this->member_phone_number ,
            $this->leader_student_card ,
            $this->leader_poster_file ,
            $this->leader_twibbon_link ,
            $this->leader_ig_follow ,
            $this->member_student_card ,
            $this->member_poster_file,
            $this->member_twibbon_link,
            $this->member_ig_follow,
            $this->payment_proof,

        );

        DB::beginTransaction();
        try {
            $this->dispatchToast('info', 'Menguplod form...', 'Mohon tunggu sebentar');
            $this->service->register($this->request);
            $this->dispatchToast('success', 'Berhasil Terdaftar', 'Anda telah terdaftar pada Bionix');

            // redirect
        } catch (Throwable $e) {
            DB::rollBack();
            $this->msg['error'] = $e->getMessage();

            $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
            return;
        }
        DB::commit();

        return redirect()->route('my.bionix')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Berhasil mendaftar',
            'text' => 'Anda telah terdaftar pada Bionix!',
        ]);
    }
}

<?php

namespace App\Http\Controllers\Presentation\Dashboard;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\GrandTalkshow\GrandTalkshowService;
use Livewire\Component;

class GrandTalkshowDashboardController extends Component
{
    private EventService $event_service;
    private GrandTalkshowService $gts_service;

    public bool $isOpen = false;
    public bool $isRegistered = false;
    public $date;

    public array $user_data = [
        "full_name" => "",
        "handphone" => "",
        "institution" => "",
        "referral" => "",
        "share_proof_file" => "",
        "status" => "",
    ];

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(EventService $event_service, GrandTalkshowService $gts_service)
    {
        $this->event_service = $event_service;

        $this->isRegistered = $this->event_service->isUserOnEvent('a4a6c7cf-0208-11ee-a848-346f24386225', auth()->user()->id);
        $this->isOpen = $this->event_service->isEventOpen('a4a6c7cf-0208-11ee-a848-346f24386225');
        $this->date = $this->event_service->getEventDate('a4a6c7cf-0208-11ee-a848-346f24386225');

        $this->gts_service = $gts_service;

        if ($this->isRegistered) {
            $this->getUserData();
        }
    }

    public function getUserData()
    {
        $gts_user = $this->gts_service->getPeserta(auth()->user()->id);

        $this->user_data = [
            "full_name" => $gts_user->user->full_name,
            "handphone" => $gts_user->user->handphone,
            "email" => $gts_user->user->email,
            "institution" => $gts_user->user->institution,
            "share_proof_file" => $gts_user->share_proof_file,
            "referral" => $gts_user->referral,
            "status" => $gts_user->status_type->name,
        ];
    }
}

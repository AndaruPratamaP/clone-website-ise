<?php

namespace App\Http\Controllers\Presentation\Dashboard;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\GrandTalkshow\GrandTalkshowService;
use Livewire\Component;

class AdminHomeDashboardController extends Component
{
    private EventService $event_service;
    private GrandTalkshowService $gts_service;

    public $registered = 0;
    public $verified = 0;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(EventService $event_service, GrandTalkshowService $gts_service)
    {
        $this->event_service = $event_service;

        $this->gts_service = $gts_service;
    }

    public function getUserData()
    {
        $this->registered = $this->gts_service->countRegistered();
        $this->verified = $this->gts_service->countVerified();
    }
}

<?php

namespace App\Http\Controllers\Presentation\Dashboard\BionixRoadshow;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\BionixRoadshow\BionixRdService;
use App\Core\Application\Services\Moodle\BionixMoodleService;
use Livewire\Component;

class BionixRdDashboardController extends Component
{
    private EventService $event_service;
    private BionixRdService $service;
    private BionixMoodleService $moodle_service;

    public bool $isOpen = false;
    public bool $isRegistered = false;
    public $date;

    public $peserta;

    public $username = Null;
    public $password = Null;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(EventService $event_service, BionixRdService $service, BionixMoodleService $moodle_service)
    {
        $this->event_service = $event_service;

        $this->isRegistered = $this->event_service->isUserOnEvent('3e003d84-884c-4762-aa7a-66f8a7458e88', auth()->user()->id);
        $this->isOpen = $this->event_service->isEventOpen('3e003d84-884c-4762-aa7a-66f8a7458e88');
        $this->date = $this->event_service->getEventDate('3e003d84-884c-4762-aa7a-66f8a7458e88');

        $this->service = $service;

        $this->moodle_service = $moodle_service;

        if ($this->isRegistered) {
            $this->getUserData();
        }
    }

    public function getUserData()
    {
        $ds_peserta = $this->service->getPeserta(auth()->user()->id);

        $this->peserta = $ds_peserta;

        $credential = $this->moodle_service->getMyCredential(auth()->user()->id);
        
        if($credential != Null)
        {
            $this->username = $credential->username;
            $this->password = $credential->password;
        }
    }
}

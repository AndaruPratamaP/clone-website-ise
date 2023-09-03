<?php

namespace App\Http\Controllers\Presentation\Dashboard\Bionix;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\Bionix\BionixService;
use App\Core\Application\Services\Moodle\BionixMoodleService;
use Livewire\Component;

class BionixDashboardController extends Component
{
    private EventService $event_service;
    private BionixService $service;
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

    public function boot(EventService $event_service, BionixService $service, BionixMoodleService $moodle_service)
    {
        $this->event_service = $event_service;

        $this->isRegistered = $this->event_service->isUserOnEvent('c5ae4f6e-22e8-11ee-be56-0242ac120002', auth()->user()->id);
        $this->isOpen = $this->event_service->isEventOpen('c5ae4f6e-22e8-11ee-be56-0242ac120002');
        $this->date = $this->event_service->getEventDate('c5ae4f6e-22e8-11ee-be56-0242ac120002');

        $this->service = $service;

        $this->moodle_service = $moodle_service;

        if ($this->isRegistered) {
            $this->getUserData();
        }
    }

    public function getUserData()
    {
        $bionix_peserta = $this->service->getPeserta(auth()->user()->id);

        $this->peserta = $bionix_peserta;

        $credential = $this->moodle_service->getMyCredential(auth()->user()->id);
        
        if($credential != Null)
        {
            $this->username = $credential->username;
            $this->password = $credential->password;
        }
    }
}

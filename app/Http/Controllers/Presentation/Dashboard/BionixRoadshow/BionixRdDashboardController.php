<?php

namespace App\Http\Controllers\Presentation\Dashboard\BionixRoadshow;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\BionixRoadshow\BionixRdService;
use Livewire\Component;

class BionixRdDashboardController extends Component
{
    private EventService $event_service;
    private BionixRdService $service;

    public bool $isOpen = false;
    public bool $isRegistered = false;
    public $date;

    public $peserta;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(EventService $event_service, BionixRdService $service)
    {
        $this->event_service = $event_service;

        $this->isRegistered = $this->event_service->isUserOnEvent('3e003d84-884c-4762-aa7a-66f8a7458e88', auth()->user()->id);
        $this->isOpen = $this->event_service->isEventOpen('3e003d84-884c-4762-aa7a-66f8a7458e88');
        $this->date = $this->event_service->getEventDate('3e003d84-884c-4762-aa7a-66f8a7458e88');

        $this->service = $service;

        if ($this->isRegistered) {
            $this->getUserData();
        }
    }

    public function getUserData()
    {
        $ds_peserta = $this->service->getPeserta(auth()->user()->id);

        $this->peserta = $ds_peserta;
    }
}

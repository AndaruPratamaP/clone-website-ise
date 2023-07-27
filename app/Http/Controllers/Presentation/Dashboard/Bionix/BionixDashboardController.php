<?php

namespace App\Http\Controllers\Presentation\Dashboard\Bionix;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\Bionix\BionixService;
use Livewire\Component;

class BionixDashboardController extends Component
{
    private EventService $event_service;
    private BionixService $service;

    public bool $isOpen = false;
    public bool $isRegistered = false;
    public $date;

    public $peserta;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(EventService $event_service, BionixService $service)
    {
        $this->event_service = $event_service;

        $this->isRegistered = $this->event_service->isUserOnEvent('c5ae4f6e-22e8-11ee-be56-0242ac120002', auth()->user()->id);
        $this->isOpen = $this->event_service->isEventOpen('c5ae4f6e-22e8-11ee-be56-0242ac120002');
        $this->date = $this->event_service->getEventDate('c5ae4f6e-22e8-11ee-be56-0242ac120002');

        $this->service = $service;

        if ($this->isRegistered) {
            $this->getUserData();
        }
    }

    public function getUserData()
    {
        $bionix_peserta = $this->service->getPeserta(auth()->user()->id);

        $this->peserta = $bionix_peserta;
    }
}

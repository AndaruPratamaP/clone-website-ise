<?php

namespace App\Http\Controllers\Presentation\Dashboard\Rise;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\Rise\RiseService;
use Livewire\Component;

class RiseDashboardController extends Component
{
    private EventService $event_service;
    private RiseService $service;

    public bool $isOpen = false;
    public bool $isRegistered = false;
    public $date;

    public $peserta;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(EventService $event_service, RiseService $service)
    {
        $this->event_service = $event_service;

        $this->isRegistered = $this->event_service->isUserOnEvent('78ec95d2-92c8-4ad2-9bc4-b32bcf049668', auth()->user()->id);
        $this->isOpen = $this->event_service->isEventOpen('78ec95d2-92c8-4ad2-9bc4-b32bcf049668');
        $this->date = $this->event_service->getEventDate('78ec95d2-92c8-4ad2-9bc4-b32bcf049668');

        $this->service = $service;

        if ($this->isRegistered) {
            $this->getUserData();
        }
    }

    public function getUserData()
    {
        $rise_peserta = $this->service->getPeserta(auth()->user()->id);

        $this->peserta = $rise_peserta;
    }
}

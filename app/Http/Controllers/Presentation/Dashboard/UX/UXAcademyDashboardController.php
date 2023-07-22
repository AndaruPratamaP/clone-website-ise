<?php

namespace App\Http\Controllers\Presentation\Dashboard\UX;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\UXAcademy\UXAcademyService;
use Livewire\Component;

class UXAcademyDashboardController extends Component
{
    private EventService $event_service;
    private UXAcademyService $service;

    public bool $isOpen = false;
    public bool $isRegistered = false;
    public $date;

    public $peserta;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(EventService $event_service, UXAcademyService $service)
    {
        $this->event_service = $event_service;

        $this->isRegistered = $this->event_service->isUserOnEvent('89b3f9c0-b63b-4497-85d6-c7812c7bb0da', auth()->user()->id);
        $this->isOpen = $this->event_service->isEventOpen('89b3f9c0-b63b-4497-85d6-c7812c7bb0da');
        $this->date = $this->event_service->getEventDate('89b3f9c0-b63b-4497-85d6-c7812c7bb0da');

        $this->service = $service;

        if ($this->isRegistered) {
            $this->getUserData();
        }
    }

    public function getUserData()
    {
        $ux_peserta = $this->service->getPeserta(auth()->user()->id);

        $this->peserta = $ux_peserta;
    }
}

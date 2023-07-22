<?php

namespace App\Http\Controllers\Presentation\Dashboard\DS;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\DSAcademy\DSAcademyService;
use Livewire\Component;

class DSAcademyDashboardController extends Component
{
    private EventService $event_service;
    private DSAcademyService $service;

    public bool $isOpen = false;
    public bool $isRegistered = false;
    public $date;

    public $peserta;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(EventService $event_service, DSAcademyService $service)
    {
        $this->event_service = $event_service;

        $this->isRegistered = $this->event_service->isUserOnEvent('3f99d663-7d8c-4afd-99eb-2f97e1eed585', auth()->user()->id);
        $this->isOpen = $this->event_service->isEventOpen('3f99d663-7d8c-4afd-99eb-2f97e1eed585');
        $this->date = $this->event_service->getEventDate('3f99d663-7d8c-4afd-99eb-2f97e1eed585');

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

<?php

namespace App\Http\Controllers\Presentation\Dashboard\ISClass;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\ISClass\ISClassService;
use Livewire\Component;

class ISClassDashboardController extends Component
{
    private EventService $event_service;
    private ISClassService $service;

    public bool $isOpen = false;
    public bool $isFull = false;
    public bool $isRegistered = false;
    public $date;

    public $peserta;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(EventService $event_service, ISClassService $service)
    {
        $this->event_service = $event_service;

        $this->isRegistered = $this->event_service->isUserOnEvent('7e3352a8-5b8b-426f-be00-6f7b1ad50345', auth()->user()->id);
        $this->isOpen = $this->event_service->isEventOpen('7e3352a8-5b8b-426f-be00-6f7b1ad50345');
        $this->isFull = $this->event_service->isISClassFull();
        $this->date = $this->event_service->getEventDate('7e3352a8-5b8b-426f-be00-6f7b1ad50345');

        $this->service = $service;

        if ($this->isRegistered) {
            $this->getUserData();
        }
    }

    public function getUserData()
    {
        $ISClass_peserta = $this->service->getPeserta(auth()->user()->id);

        $this->peserta = $ISClass_peserta;
    }
}

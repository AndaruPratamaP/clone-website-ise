<?php

namespace App\Http\Controllers\Presentation\Dashboard;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\GrandTalkshow\GrandTalkshowService;
use App\Core\Application\Services\Bionix\BionixService;
use App\Core\Application\Services\BionixRoadshow\BionixRdService;
use App\Core\Application\Services\ISClass\ISClassService;
use App\Core\Application\Services\DSAcademy\DSAcademyService;
use App\Core\Application\Services\UXAcademy\UXAcademyService;
use App\Core\Application\Services\Rise\RiseService;
use Livewire\Component;

class AdminHomeDashboardController extends Component
{
    private EventService $event_service;
    private GrandTalkshowService $gts_service;
    private BionixService $bionix_service;
    private BionixRdService $bionixrd_service;
    private ISClassService $isclass_service;
    private DSAcademyService $dsa_service;
    private UXAcademyService $uxa_service;
    private RiseService $rise_service;

    public $gts_registered = 0;
    public $gts_verified = 0;

    public $bionix_registered = 0;
    public $bionix_verified = 0;

    public $bionixrd_registered = 0;
    public $bionixrd_verified = 0;

    public $isclass_registered = 0;
    public $isclass_verified = 0;

    public $dsa_registered = 0;
    public $dsa_verified = 0;

    public $uxa_registered = 0;
    public $uxa_verified = 0;

    public $rise_registered = 0;
    public $rise_verified = 0;

    public $total_registered = 0;
    public $tatal_verified = 0;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(
        EventService $event_service,
        GrandTalkshowService $gts_service,
        BionixService $bionix_service,
        BionixRdService $bionixrd_service,
        ISClassService $isclass_service,
        DSAcademyService $dsa_service,
        UXAcademyService $uxa_service,
        RiseService $rise_service
        )
    {
        $this->event_service = $event_service;

        $this->gts_service = $gts_service;
        $this->bionix_service = $bionix_service;
        $this->bionixrd_service = $bionixrd_service;
        $this->isclass_service = $isclass_service;
        $this->dsa_service = $dsa_service;
        $this->uxa_service = $uxa_service;
        $this->rise_service = $rise_service;

        $this->gts_registered = $this->gts_service->countRegistered();
        $this->gts_verified = $this->gts_service->countVerified();

        $this->bionix_registered = $this->bionix_service->countRegistered();
        $this->bionix_verified = $this->bionix_service->countVerified();

        $this->bionixrd_registered = $this->bionixrd_service->countRegistered();
        $this->bionixrd_verified = $this->bionixrd_service->countVerified();

        $this->isclass_registered = $this->isclass_service->countRegistered();
        $this->isclass_verified = $this->isclass_service->countVerified();

        $this->dsa_registered = $this->dsa_service->countRegistered();
        $this->dsa_verified = $this->dsa_service->countVerified();

        $this->uxa_registered = $this->uxa_service->countRegistered();
        $this->uxa_verified = $this->uxa_service->countVerified();

        $this->rise_registered = $this->rise_service->countRegistered();
        $this->rise_verified = $this->rise_service->countVerified();

          // Calculate the total registered and verified
    $this->total_registered =
    $this->gts_registered + $this->bionix_registered + $this->bionixrd_registered +
    $this->isclass_registered + $this->dsa_registered + $this->uxa_registered +
    $this->rise_registered;

    $this->total_verified =
    $this->gts_verified + $this->bionix_verified + $this->bionixrd_verified +
    $this->isclass_verified + $this->dsa_verified + $this->uxa_verified +
    $this->rise_verified;
    }
}

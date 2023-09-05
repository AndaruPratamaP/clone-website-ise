<?php

namespace App\Http\Controllers\Presentation\Dashboard\Bionix;

use App\Core\Application\Services\Bionix\BionixService;
use App\Core\Domain\Models\Eloquents\Bionix\Bionix;
use Livewire\Component;

class BionixDetailPesertaController extends Component
{
    private BionixService $service;

    public $peserta;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(BionixService $service)
    {
        $this->service = $service;

        $this->getUserData();
    }

    public function getUserData()
    {
        $bionix_peserta = $this->service->getPeserta(request()->route('user_id'));

        $this->peserta = $bionix_peserta;
    }

    public function acceptRegistration()
    {
        $this->service->acceptRegistration(request()->route('user_id'));
    }

    public function rejectRegistration()
    {
        $this->service->rejectRegistration(request()->route('user_id'));
    }
    public function acceptPenyisihan()
    {
        $this->service->acceptPenyisihan(request()->route('user_id'));
    }

    public function rejectPenyisihan()
    {
        $this->service->rejectPenyisihan(request()->route('user_id'));
    }
    public function acceptSemifinal()
    {
        $this->service->acceptSemifinal(request()->route('user_id'));
    }

    public function rejectSemifinal()
    {
        $this->service->rejectSemifinal(request()->route('user_id'));
    }
    public function acceptFinal()
    {
        $this->service->acceptFinal(request()->route('user_id'));
    }

    public function rejectFinal()
    {
        $this->service->rejectFinal(request()->route('user_id'));
    }

}

<?php

namespace App\Http\Controllers\Presentation\Dashboard\BionixRoadshow;

use App\Core\Application\Services\BionixRoadshow\BionixRdService;
use Livewire\Component;

class BionixRdDetailPesertaController extends Component
{
    private BionixRdService $service;

    public $peserta;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(BionixRdService $service)
    {
        $this->service = $service;

        $this->getUserData();
    }

    public function getUserData()
    {
        $ds_peserta = $this->service->getPeserta(request()->route('user_id'));

        $this->peserta = $ds_peserta;
    }
    public function acceptLunas()
    {
        $this->service->acceptLunas(request()->route('user_id'));
    }
    public function acceptDp()
    {
        $this->service->acceptDp(request()->route('user_id'));
    }

    public function rejectDp()
    {
        $this->service->rejectDp(request()->route('user_id'));
    }

    public function acceptPelunasan()
    {
        $this->service->acceptPelunasan(request()->route('user_id'));
    }

    public function rejectPelunasan()
    {
        $this->service->rejectPelunasan(request()->route('user_id'));
    }
    public function acceptBerkas()
    {
        $this->service->acceptBerkas(request()->route('user_id'));
    }

    public function rejectBerkas()
    {
        $this->service->rejectBerkas(request()->route('user_id'));
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

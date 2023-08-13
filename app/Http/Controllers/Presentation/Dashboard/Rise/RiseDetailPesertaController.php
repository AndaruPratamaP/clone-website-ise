<?php

namespace App\Http\Controllers\Presentation\Dashboard\Rise;

use App\Core\Application\Services\Rise\RiseService;
use Livewire\Component;

class RiseDetailPesertaController extends Component
{
    private RiseService $service;

    public $peserta;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(RiseService $service)
    {
        $this->service = $service;

        $this->getUserData();
    }

    public function getUserData()
    {
        $rise_peserta = $this->service->getPeserta(request()->route('user_id'));

        $this->peserta = $rise_peserta;
    }
    //registrasi
    public function acceptRegistration()
    {
        $this->service->acceptRegistration(request()->route('user_id'));
    }

    public function rejectRegistration()
    {
        $this->service->rejectRegistration(request()->route('user_id'));
    }
    //penyisihan
    public function acceptPenyisihan()
    {
        $this->service->acceptPenyisihan(request()->route('user_id'));
    }

    public function rejectPenyisihan()
    {
        $this->service->rejectPenyisihan(request()->route('user_id'));
    }
    //pembayaran
    public function acceptPembayaran()
    {
        $this->service->acceptPembayaran(request()->route('user_id'));
    }

    public function rejectPembayaran()
    {
        $this->service->rejectPembayaran(request()->route('user_id'));
    }
    //semifinal
    public function acceptSemifinal()
    {
        $this->service->acceptSemifinal(request()->route('user_id'));
    }

    public function rejectSemifinal()
    {
        $this->service->rejectSemifinal(request()->route('user_id'));
    }
    //final
    public function acceptFinal()
    {
        $this->service->acceptFinal(request()->route('user_id'));
    }

    public function rejectFinal()
    {
        $this->service->rejectFinal(request()->route('user_id'));
    }
}

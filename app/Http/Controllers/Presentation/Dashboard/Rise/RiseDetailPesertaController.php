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

    public function acceptRegistration()
    {
        $this->service->acceptRegistration(request()->route('user_id'));
    }

    public function rejectRegistration()
    {
        $this->service->rejectRegistration(request()->route('user_id'));
    }

    // public function acceptAnswer()
    // {
    //     $this->service->acceptAnswer(request()->route('leader_id'));
    // }

    // public function reviseAnswer()
    // {
    //     $this->service->reviseAnswer(request()->route('leader_id'));
    // }

    // public function rejectAnswer()
    // {
    //     $this->service->rejectAnswer(request()->route('leader_id'));
    // }
}

<?php

namespace App\Http\Controllers\Presentation\Dashboard\DS;

use App\Core\Application\Services\DSAcademy\DSAcademyService;
use Livewire\Component;

class DSAcademyDetailPesertaController extends Component
{
    private DSAcademyService $service;

    public $peserta;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(DSAcademyService $service)
    {
        $this->service = $service;

        $this->getUserData();
    }

    public function getUserData()
    {
        $ds_peserta = $this->service->getPeserta(request()->route('user_id'));

        $this->peserta = $ds_peserta;
    }

    public function acceptRegistration()
    {
        $this->service->acceptRegistration(request()->route('user_id'));
    }

    public function reviseRegistration()
    {
        $this->service->reviseRegistration(request()->route('user_id'));
    }

    public function rejectRegistration()
    {
        $this->service->rejectRegistration(request()->route('user_id'));
    }

    public function acceptAnswer()
    {
        $this->service->acceptAnswer(request()->route('user_id'));
    }

    public function reviseAnswer()
    {
        $this->service->reviseAnswer(request()->route('user_id'));
    }

    public function rejectAnswer()
    {
        $this->service->rejectAnswer(request()->route('user_id'));
    }
}

<?php

namespace App\Http\Controllers\Presentation\Dashboard\ISClass;

use App\Core\Application\Services\ISClass\ISClassService;
use Livewire\Component;

class ISClassDetailPesertaController extends Component
{
    private ISClassService $service;

    public $peserta;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(ISClassService $service)
    {
        $this->service = $service;

        $this->getUserData();
    }

    public function getUserData()
    {
        $isclass_peserta = $this->service->getPeserta(request()->route('user_id'));

        $this->peserta = $isclass_peserta;
    }

    public function accept()
    {
        $this->service->accept(request()->route('user_id'));
    }

    public function reject()
    {
        $this->service->reject(request()->route('user_id'));
    }
}

<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Http\Controllers\Presentation\Dashboard\BionixRoadshow\BionixRdDetailPesertaController;
use Livewire\Component;


class BionixRdDetailPeserta extends BionixRdDetailPesertaController
{
    public function render()
    {
        return view('livewire.dashboard.admin.bionix.bionix-rd-detail-peserta')->layout('layouts.dashboard.admin.base');
    }
}

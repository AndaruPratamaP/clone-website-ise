<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Http\Controllers\Presentation\Dashboard\Bionix\BionixDetailPesertaController;

class BionixDetailPeserta extends BionixDetailPesertaController
{
    public function render()
    {
        return view('livewire.dashboard.admin.bionix.bionix-detail-peserta')->layout('layouts.dashboard.admin.base');
    }
}

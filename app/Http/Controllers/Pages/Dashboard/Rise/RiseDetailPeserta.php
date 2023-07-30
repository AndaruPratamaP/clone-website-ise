<?php

namespace App\Http\Controllers\Pages\Dashboard\Rise;

use App\Http\Controllers\Presentation\Dashboard\Rise\RiseDetailPesertaController;

class RiseDetailPeserta extends RiseDetailPesertaController
{
    public function render()
    {
        return view('livewire.dashboard.admin.rise.rise-detail-peserta')->layout('layouts.dashboard.admin.base');
    }
}

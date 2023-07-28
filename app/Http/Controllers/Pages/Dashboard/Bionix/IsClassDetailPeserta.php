<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Http\Controllers\Presentation\Dashboard\ISClass\ISClassDetailPesertaController;
use Livewire\Component;

class IsClassDetailPeserta extends ISClassDetailPesertaController
{
    public function render()
    {
        return view('livewire.dashboard.admin.bionix.is-class-detail-peserta')->layout('layouts.dashboard.admin.base');
    }
}

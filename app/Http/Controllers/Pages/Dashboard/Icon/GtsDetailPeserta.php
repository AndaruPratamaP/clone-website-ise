<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Http\Controllers\Presentation\Dashboard\GrandTalkshowDetailPesertaController;
use Livewire\Component;

class GtsDetailPeserta extends GrandTalkshowDetailPesertaController
{
    public function render()
    {
        return view('livewire.dashboard.admin.icon.gts-detail-peserta')->layout('layouts.dashboard.admin.base');
    }
}

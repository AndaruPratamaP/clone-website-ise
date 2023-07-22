<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Http\Controllers\Presentation\Dashboard\DS\DSAcademyDetailPesertaController;

class DsDetailPeserta extends DSAcademyDetailPesertaController
{
    public function render()
    {
        return view('livewire.dashboard.admin.icon.ds-detail-peserta')->layout('layouts.dashboard.admin.base');
    }
}

<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Http\Controllers\Presentation\Dashboard\UX\UXAcademyDetailPesertaController;

class UxDetailPeserta extends UXAcademyDetailPesertaController
{
    public function render()
    {
        return view('livewire.dashboard.admin.icon.ux-detail-peserta')->layout('layouts.dashboard.admin.base');
    }
}

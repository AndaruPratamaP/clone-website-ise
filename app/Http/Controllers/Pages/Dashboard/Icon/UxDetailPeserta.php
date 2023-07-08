<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use Livewire\Component;

class UxDetailPeserta extends Component
{
    public function render()
    {
        return view('livewire.dashboard.admin.icon.ux-detail-peserta')->layout('layouts.dashboard.admin.base');
    }
}

<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use Livewire\Component;

class DsDetailPeserta extends Component
{
    public function render()
    {
        return view('livewire.dashboard.admin.icon.ds-detail-peserta')->layout('layouts.dashboard.admin.base');
    }
}

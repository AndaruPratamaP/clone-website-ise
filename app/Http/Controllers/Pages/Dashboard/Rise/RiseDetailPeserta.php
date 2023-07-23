<?php

namespace App\Http\Controllers\Pages\Dashboard\Rise;

use Livewire\Component;

class RiseDetailPeserta extends Component
{
    public function render()
    {
        return view('livewire.dashboard.admin.rise.rise-detail-peserta')->layout('layouts.dashboard.admin.base');
    }
}

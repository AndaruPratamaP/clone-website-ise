<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use Livewire\Component;

class BionixDetailPeserta extends Component
{
    public function render()
    {
        return view('livewire.dashboard.admin.bionix.bionix-detail-peserta')->layout('layouts.dashboard.admin.base');
    }
}

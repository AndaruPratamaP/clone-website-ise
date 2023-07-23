<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use Livewire\Component;

class BionixAdminAction extends Component
{
    public function render()
    {
        return view('livewire.dashboard.admin.bionix.bionix-detail-peserta')->layout('layouts.dashboard.admin.base');
    }
}

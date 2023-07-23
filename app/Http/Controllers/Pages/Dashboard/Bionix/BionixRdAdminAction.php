<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use Livewire\Component;

class BionixRdAdminAction extends Component
{
    public function render()
    {
        return view('livewire.dashboard.admin.bionix.bionix-rd-detail-peserta')->layout('layouts.dashboard.admin.base');
    }
}

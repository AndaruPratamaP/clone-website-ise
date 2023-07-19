<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;
use Livewire\Component;

class IsClassAdminAction extends Component
{
    public function render()
    {
        return view('livewire.dashboard.admin.bionix.is-class-detail-peserta')->layout('layouts.dashboard.admin.base');
    }
}

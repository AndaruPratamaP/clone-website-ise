<?php

namespace App\Http\Controllers\Pages\Dashboard\Rise;

use Livewire\Component;

class RiseDashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard.my.rise.rise-dashboard')->layout('layouts.dashboard.base');
    }
}

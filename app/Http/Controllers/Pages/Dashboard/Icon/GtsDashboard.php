<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use Livewire\Component;

class GtsDashboard extends Component
{
    public function render()
    {
        return view('livewire.gts-dashboard')->layout('layouts.dashboard.base');
    }
}

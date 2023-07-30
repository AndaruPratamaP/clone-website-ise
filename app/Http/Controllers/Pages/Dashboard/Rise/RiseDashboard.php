<?php

namespace App\Http\Controllers\Pages\Dashboard\Rise;

use App\Http\Controllers\Presentation\Dashboard\Rise\RiseDashboardController;
use Livewire\Component;

class RiseDashboard extends RiseDashboardController
{
    public function render()
    {
        return view('livewire.dashboard.my.rise.rise-dashboard')->layout('layouts.dashboard.base');
    }
}

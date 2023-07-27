<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Http\Controllers\Presentation\Dashboard\Bionix\BionixDashboardController;

class BionixDashboard extends BionixDashboardController
{
    public function render()
    {
        return view('livewire.dashboard.my.bionix.bionix')->layout('layouts.dashboard.base');;
    }
}

<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Http\Controllers\Presentation\Dashboard\GrandTalkshowDashboardController;

class BionixDashboard extends GrandTalkshowDashboardController
{
    public function render()
    {
        return view('livewire.dashboard.my.bionix.bionix')->layout('layouts.dashboard.base');;
    }
}

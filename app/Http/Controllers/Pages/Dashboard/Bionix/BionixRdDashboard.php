<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Http\Controllers\Presentation\Dashboard\GrandTalkshowDashboardController;

class BionixRdDashboard extends GrandTalkshowDashboardController
{
    public function render()
    {
        return view('livewire.dashboard.my.bionix.bionix-rd')->layout('layouts.dashboard.base');;
    }
}

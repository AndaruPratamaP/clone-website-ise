<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Http\Controllers\Presentation\Dashboard\GrandTalkshowDashboardController;

class IsClassDashboard extends GrandTalkshowDashboardController
{
    public function render()
    {
        return view('livewire.dashboard.my.bionix.isclass')->layout('layouts.dashboard.base');
    }
}

<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Http\Controllers\Presentation\Dashboard\GrandTalkshowDashboardController;

class GtsDashboard extends GrandTalkshowDashboardController
{
    public function render()
    {
        return view('livewire.dashboard.my.icon.gts')->layout('layouts.dashboard.base');
    }
}

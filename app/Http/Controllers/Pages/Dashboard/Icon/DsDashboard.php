<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Http\Controllers\Presentation\Dashboard\GrandTalkshowDashboardController;

class DsDashboard extends GrandTalkshowDashboardController
{
    public function render()
    {
        return view('livewire.dashboard.my.icon.ds')->layout('layouts.dashboard.base');
    }
}

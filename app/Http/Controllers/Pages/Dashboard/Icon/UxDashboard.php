<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Http\Controllers\Presentation\Dashboard\GrandTalkshowDashboardController;

class UxDashboard extends GrandTalkshowDashboardController
{
    public function render()
    {
        return view('livewire.dashboard.my.icon.ux')->layout('layouts.dashboard.base');
    }
}

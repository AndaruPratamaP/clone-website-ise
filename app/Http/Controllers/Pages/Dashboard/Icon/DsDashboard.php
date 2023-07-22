<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Http\Controllers\Presentation\Dashboard\DS\DSAcademyDashboardController;

class DsDashboard extends DSAcademyDashboardController
{
    public function render()
    {
        return view('livewire.dashboard.my.icon.ds')->layout('layouts.dashboard.base');
    }
}

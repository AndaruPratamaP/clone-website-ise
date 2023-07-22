<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Http\Controllers\Presentation\Dashboard\UX\UXAcademyDashboardController;

class UxDashboard extends UXAcademyDashboardController
{
    public function render()
    {
        return view('livewire.dashboard.my.icon.ux')->layout('layouts.dashboard.base');
    }
}

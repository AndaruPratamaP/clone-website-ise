<?php

namespace App\Http\Controllers\Pages\Dashboard;

use App\Http\Controllers\Presentation\Dashboard\AdminHomeDashboardController;
use Livewire\Component;

class AdminHomeDashboard extends AdminHomeDashboardController
{
    public function render()
    {
        return view('livewire.dashboard.admin.admin-home-dashboard')->layout('layouts.dashboard.admin.base');
    }
}

<?php

namespace App\Http\Controllers\Pages\Dashboard;

use Livewire\Component;

class AdminHomeDashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard.admin.admin-home-dashboard')->layout('layouts.dashboard.admin.base');
    }
}

<?php

namespace App\Http\Controllers\Pages\Dashboard;

use Livewire\Component;

class UserHomeDashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard.my.user-home-dashboard')->layout('layouts.dashboard.base');
    }
}

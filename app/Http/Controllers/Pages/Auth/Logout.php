<?php

namespace App\Http\Controllers\Pages\Auth;

use App\Http\Controllers\Presentation\AuthController;

class Logout extends AuthController
{
    public function render()
    {
        $this->logout();
        return view('livewire.auth.logout');
    }
}

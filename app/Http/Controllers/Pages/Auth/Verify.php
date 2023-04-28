<?php

namespace App\Http\Controllers\Pages\Auth;

use App\Http\Controllers\Presentation\AuthController;
use Illuminate\Support\Facades\Route;

class Verify extends AuthController
{
    public string $token = "";

    public function render()
    {
        $this->token = Route::current()->parameter('token');
        $this->verify();
        return view('livewire.auth.verify')->layout('layouts.app');
    }
}

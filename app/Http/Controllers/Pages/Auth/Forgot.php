<?php

namespace App\Http\Controllers\Pages\Auth;

use App\Http\Controllers\Presentation\AuthController;
use Illuminate\Support\Facades\Route;
use Throwable;

class Forgot extends AuthController
{
    public string $token = '';
    public string $new_password = '';

    protected $rules = [
        'new_password' => 'required|min:8',
    ];

    public function mount()
    {
        $this->token = Route::current()->parameter('token');
    }

    public function render()
    {
        return view('livewire.auth.forgot')->layout('layouts.only-layout');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected function error($error)
    {
        // Handle the error here
        logger()->error($error);

        // Optionally, you can set a message to be displayed in the UI
        $this->msg['error'] = 'An error occurred. Please try again later.';
    }

    public function change()
    {
        $this->validate($this->rules);
        $this->changeForgotPassword();
    }
}

<?php

namespace App\Http\Controllers\Pages\Auth;

use App\Http\Controllers\Presentation\AuthController;
use Throwable;

class Login extends AuthController
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;
    public bool $isValid = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:8',
    ];

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.app');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        try {
            $this->isValid = true;
            $this->validate($this->rules);
        } catch (Throwable $e) {
            $this->isValid = false;
            return;
        }
    }

    protected function error($error)
    {
        // Handle the error here
        logger()->error($error);

        // Optionally, you can set a message to be displayed in the UI
        $this->msg['error'] = 'An error occurred. Please try again later.';
    }

    public function authenticate()
    {
        $this->validate($this->rules);
        $this->login();
    }
}

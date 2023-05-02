<?php

namespace App\Http\Controllers\Pages\Auth;

use App\Http\Controllers\Presentation\AuthController;
use Throwable;

class RequestForgot extends AuthController
{
    public string $email = '';
    public bool $isValid = false;

    protected $rules = [
        'email' => 'required|email'
    ];

    public function render()
    {
        return view('livewire.auth.request-forgot')->layout('layouts.app');
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

    public function request()
    {
        $this->validate($this->rules);
        $this->requestForgotPassword();
    }
}

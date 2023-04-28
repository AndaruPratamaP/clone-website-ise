<?php

namespace App\Http\Controllers\Pages\Auth;

use App\Http\Controllers\Presentation\AuthController;
use Throwable;

class Register extends AuthController
{
    public string $full_name = '';
    public string $email = '';
    public string $phone = '';
    public string $password = '';
    public string $password_again = '';
    public string $institution = '';
    public string $referral = '';
    public string $otherRef = '';
    public int $province_id;
    public int $role_id;
    public bool $isValid = false;

    protected $rules = [
        'full_name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required|min:8',
        'password' => 'required|min:8|same:password_again',
        'password_again' => 'required|min:8',
        'institution' => 'required|min:3',
        'referral' => 'nullable',
        'province_id' => 'required|numeric',
        'role_id' => 'required|numeric'
    ];

    public function render()
    {
        return view('livewire.auth.register')->layout('layouts.app');
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

    public function updatedReferral()
    {
        if ($this->otherRef !== "") {
            $this->referral = $this->otherRef;
        }
    }

    public function updatedOtherRef()
    {
        if ($this->otherRef !== "") {
            $this->referral = $this->otherRef;
        }
    }

    protected function error($error)
    {
        // Handle the error here
        logger()->error($error);

        // Optionally, you can set a message to be displayed in the UI
        $this->msg['error'] = 'An error occurred. Please try again later.';
    }

    public function regist()
    {
        $this->validate($this->rules);
        $this->register();
    }
}

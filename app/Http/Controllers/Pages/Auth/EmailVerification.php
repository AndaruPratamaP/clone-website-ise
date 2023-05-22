<?php

namespace App\Http\Controllers\Pages\Auth;

use Livewire\Component;

class EmailVerification extends Component
{
    public function render()
    {
        return view('livewire.auth.email-verification')->layout('layouts.only-layout');
    }
}

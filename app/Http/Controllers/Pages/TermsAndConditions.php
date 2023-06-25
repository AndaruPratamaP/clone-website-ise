<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;

class TermsAndConditions extends Component
{
    public function render()
    {
        return view('livewire.terms-and-conditions')->layout('layouts.only-layout');
    }
}

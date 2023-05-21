<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;

class BionixLanding extends Component
{
    public function render()
    {
        return view('livewire.bionix-landing')->layout('layouts.app');
    }
}

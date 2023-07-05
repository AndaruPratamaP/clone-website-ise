<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;

class RiseLanding extends Component
{
    public function render()
    {
        return view('livewire.rise-landing')->layout('layouts.app');
    }
}

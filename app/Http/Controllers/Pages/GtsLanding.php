<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;

class GtsLanding extends Component
{
    public function render()
    {
        return view('livewire.gts-landing')->layout('layouts.app');
    }
}

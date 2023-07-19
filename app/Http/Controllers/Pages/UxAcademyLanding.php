<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;

class UxAcademyLanding extends Component
{
    public function render()
    {
        return view('livewire.ux-academy-landing')->layout('layouts.app');
    }
}

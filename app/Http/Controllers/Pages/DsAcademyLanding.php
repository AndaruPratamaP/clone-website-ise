<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;

class DsAcademyLanding extends Component
{
    public function render()
    {
        return view('livewire.ds-academy-landing')->layout('layouts.app');
    }
}
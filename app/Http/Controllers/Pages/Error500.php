<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;

class Error500 extends Component
{
    public function render()
    {
        return view('livewire.500')->layout('layouts.only-layout');
    }
}

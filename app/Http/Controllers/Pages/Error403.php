<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;

class Error403 extends Component
{
    public function render()
    {
        return view('livewire.errors.403')->layout('layouts.only-layout');
    }
}

<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;

class Error404 extends Component
{
    public function render()
    {
        return view('livewire.errors.404')->layout('layouts.only-layout');
    }
}

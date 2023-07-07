<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;

class Maintenance extends Component
{
    public function render()
    {
        return view('livewire.maintenance')->layout('layouts.only-layout');
    }
}

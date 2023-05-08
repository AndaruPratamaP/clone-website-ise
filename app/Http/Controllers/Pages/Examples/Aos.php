<?php

namespace App\Http\Controllers\Pages\Examples;

use Livewire\Component;

class Aos extends Component
{
    public function render()
    {
        return view('livewire.aos')->layout('layouts.app');
    }
}

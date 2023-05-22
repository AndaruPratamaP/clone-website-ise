<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;

class ComingSoon extends Component
{
    public function render()
    {
        return view('livewire.coming-soon')->layout('layouts.only-layout');
    }
}

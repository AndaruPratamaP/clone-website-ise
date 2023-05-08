<?php

namespace App\Http\Controllers\Pages\Examples;

use Livewire\Component;

class Swiper extends Component
{
    public function render()
    {
        return view('livewire.swiper')->layout('layouts.app');
    }
}

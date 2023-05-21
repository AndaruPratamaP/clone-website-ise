<?php

namespace App\Http\Controllers\Pages\Dashboard\Rise;

use Livewire\Component;

class RiseRegistration extends Component
{
    public function render()
    {
        return view('livewire.dashboard.my.rise.rise-registration')->layout('layouts.only-layout');
    }
}

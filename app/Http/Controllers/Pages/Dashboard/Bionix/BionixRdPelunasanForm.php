<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use Livewire\Component;

class BionixRdPelunasanForm extends Component
{
    public function render()
    {
        return view('livewire.dashboard.my.bionix.bionix-rd-pelunasan-form')->layout('layouts.only-layout');
    }
}

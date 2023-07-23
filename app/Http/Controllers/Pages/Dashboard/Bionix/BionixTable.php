<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use Livewire\Component;

class BionixTable extends Component
{
    public function render()
    {
        return view('livewire.dashboard.admin.bionix.bionix-table')->layout('layouts.dashboard.admin.base');
    }
}

<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use Livewire\Component;

class BionixRdTable extends Component
{
    public function render()
    {
        return view('livewire.dashboard.admin.bionix.bionix-rd-table')->layout('layouts.dashboard.admin.base');
    }
}

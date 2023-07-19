<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use Livewire\Component;

class IsClassTable extends Component
{
    public function render()
    {
        return view('livewire.dashboard.admin.bionix.is-class-table')->layout('layouts.dashboard.admin.base');
    }
}

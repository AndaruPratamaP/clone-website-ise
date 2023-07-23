<?php

namespace App\Http\Controllers\Pages\Dashboard\Rise;

use Livewire\Component;

class RiseTable extends Component
{
    public function render()
    {
        return view('livewire.dashboard.admin.rise.rise-table')->layout('layouts.dashboard.admin.base');
    }
}

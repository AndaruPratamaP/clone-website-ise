<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use Livewire\Component;

class UxTable extends Component
{
    public function render()
    {
        return view('livewire.dashboard.admin.icon.ux-table')->layout('layouts.dashboard.admin.base');
    }
}

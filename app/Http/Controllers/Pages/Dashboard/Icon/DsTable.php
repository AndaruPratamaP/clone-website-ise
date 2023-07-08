<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use Livewire\Component;

class DsTable extends Component
{
    public function render()
    {
        return view('livewire.dashboard.admin.icon.ds-table')->layout('layouts.dashboard.admin.base');
    }
}

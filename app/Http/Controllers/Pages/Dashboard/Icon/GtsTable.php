<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Core\Application\Exports\GTSExport;
use App\Http\Controllers\Presentation\GrandTalkshowController;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class GtsTable extends GrandTalkshowController
{
    use WithPagination;
    public string $search = '';
    public int $entries = 10;

    public function render()
    {
        return view('livewire.dashboard.admin.icon.gts-table', [
            'gtss' => $this->index($this->search, $this->entries),
        ])->layout('layouts.dashboard.admin.base');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingEntries()
    {
        $this->resetPage();
    }

    public function export()
    {
        return Excel::download(new GTSExport, 'grandtalkshow.xlsx');
    }
}

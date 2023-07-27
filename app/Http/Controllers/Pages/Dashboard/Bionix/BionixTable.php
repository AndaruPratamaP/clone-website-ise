<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Core\Domain\Models\Eloquents\Bionix\Bionix;
use App\Http\Controllers\Presentation\Dashboard\Bionix\BionixController;
use Livewire\WithPagination;

class BionixTable extends BionixController
{
    use WithPagination;
    public string $search = '';
    public string $orderby = '';
    public string $order = '';
    public int $entries = 10;

    public function render()
    {
        return view('livewire.dashboard.admin.bionix.bionix-table', [
            'pesertas' => $this->index($this->search, $this->entries, $this->orderby, $this->order),
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

    public function updatingOrderby()
    {
        $this->resetPage();
    }

    public function updatingOrder()
    {
        $this->resetPage();
    }
}

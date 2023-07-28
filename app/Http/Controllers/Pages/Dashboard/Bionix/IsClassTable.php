<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Core\Domain\Models\Eloquents\ISClass\ISClass;
use App\Http\Controllers\Presentation\Dashboard\ISClass\ISClassController;
use Livewire\WithPagination;

class IsClassTable extends ISClassController
{
    use WithPagination;
    public string $search = '';
    public string $orderby = '';
    public string $order = '';
    public int $entries = 10;

    public function render()
    {
        return view('livewire.dashboard.admin.bionix.is-class-table', [
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


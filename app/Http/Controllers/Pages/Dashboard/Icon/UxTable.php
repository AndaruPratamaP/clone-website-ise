<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Http\Controllers\Presentation\Dashboard\UX\UXAcademyController;
use Livewire\WithPagination;

class UxTable extends UXAcademyController
{
    use WithPagination;
    public string $search = '';
    public string $orderby = '';
    public string $order = '';
    public int $entries = 10;
    
    public function render()
    {
        return view('livewire.dashboard.admin.icon.ux-table', [
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

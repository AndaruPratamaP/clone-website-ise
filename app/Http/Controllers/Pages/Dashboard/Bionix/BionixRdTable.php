<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Http\Controllers\Presentation\Dashboard\BionixRoadshow\BionixRdController;
use Livewire\WithPagination;
use App\Core\Application\Exports\BionixRdExport;
use Maatwebsite\Excel\Facades\Excel;

class BionixRdTable extends BionixRdController
{
  use WithPagination;
  public string $search = '';
  public string $orderby = '';
  public string $order = '';
  public int $entries = 10;

  public function render()
  {
    return view('livewire.dashboard.admin.bionix.bionix-rd-table', [
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
  public function export()
  {
      return Excel::download(new BionixRdExport, 'BionixRoadshow.xlsx');
  }
}

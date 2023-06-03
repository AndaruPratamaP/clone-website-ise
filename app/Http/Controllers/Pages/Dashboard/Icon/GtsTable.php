<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Http\Controllers\Presentation\GrandTalkshowController;
use Livewire\Component;
use Livewire\WithPagination;

class GtsTable extends GrandTalkshowController
{
  use WithPagination;
  public string $search = '';

  public function render()
  {
    return view('livewire.gts-table', [
      'gtss' => $this->index($this->search),
    ])->layout('layouts.app');
  }

  public function updatingSearch()
  {
    $this->resetPage();
  }
}
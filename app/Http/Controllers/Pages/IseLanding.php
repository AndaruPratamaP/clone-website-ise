<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;

class IseLanding extends Component
{
  public function render()
  {
    return view('livewire.ise-landing')->layout('layouts.app');
  }
}

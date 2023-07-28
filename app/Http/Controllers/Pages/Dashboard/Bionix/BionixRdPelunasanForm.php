<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Http\Controllers\Presentation\Dashboard\BionixRoadshow\BionixRdRegistrationController;
use Livewire\Component;
use Livewire\WithFileUploads;

class BionixRdPelunasanForm extends BionixRdRegistrationController
{
  use WithFileUploads;
  public string $team_name = '';
  public $bukti;

  public $tagihan = 0;

  protected $rules = [
    'bukti' => 'required|image|max:1024',
  ];
  public function render()
  {
    return view('livewire.dashboard.my.bionix.bionix-rd-pelunasan-form')->layout('layouts.only-layout');
  }
  public function mount()
  {
    $this->tagihan = $this->getTagihan();
  }

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  public function submit()
  {
    $this->validate($this->rules);
    $this->registerPelunasan();
  }
}

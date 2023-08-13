<?php

namespace App\Http\Controllers\Pages\Dashboard\Rise;

use App\Http\Controllers\Presentation\Dashboard\Rise\RiseRegistrationController;
use Livewire\Component;
use Livewire\WithFileUploads;

class RiseFinalForm extends RiseRegistrationController
{
    use WithFileUploads;

    public $answer_file;

    protected $rules = [
        'answer_file' => 'required|file|mimes:pdf|max:3072',
    ];

    public function render()
    {
        return view('livewire.dashboard.my.rise.rise-final-form')->layout('layouts.only-layout');
    }

    public function updated($propertyName)
    {
      $this->validateOnly($propertyName);

    }
    public function submit() {
      $this->validate($this->rules);
      $this->registerFinal();
  }

}

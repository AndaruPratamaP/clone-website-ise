<?php

namespace App\Http\Controllers\Pages\Dashboard\Rise;

use App\Http\Controllers\Presentation\Dashboard\Rise\RiseRegistrationController;
use Livewire\Component;
use Livewire\WithFileUploads;

class RisePenyisihanForm extends RiseRegistrationController
{
    use WithFileUploads;

    public $answer_file;
    public $poster_file;

    protected $rules = [
        'answer_file' => 'required|file|mimes:pdf|max:3072',
        'poster_file' => 'required|image|max:3072',
    ];

    public function render()
    {
        return view('livewire.dashboard.my.rise.rise-penyisihan-form')->layout('layouts.only-layout');
    }

    public function updated($propertyName)
    {
      $this->validateOnly($propertyName);

    }
    public function submit() {
      $this->validate($this->rules);
      $this->registerPenyisihan();
  }
}

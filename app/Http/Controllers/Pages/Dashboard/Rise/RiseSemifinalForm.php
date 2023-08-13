<?php

namespace App\Http\Controllers\Pages\Dashboard\Rise;

use App\Http\Controllers\Presentation\Dashboard\Rise\RiseRegistrationController;
use Livewire\Component;
use Livewire\WithFileUploads;

class RiseSemifinalForm extends RiseRegistrationController
{
    use WithFileUploads;

    public string $youtube_link;
    public $answer_file;

    protected $rules = [
        'youtube_link' => 'required|url|max:255',
        'answer_file' => 'required|file|mimes:pdf|max:3072',
    ];

    public function render()
    {
        return view('livewire.dashboard.my.rise.rise-semifinal-form')->layout('layouts.only-layout');
    }

    public function updated($propertyName)
    {
      $this->validateOnly($propertyName);

    }
    public function submit() {
      $this->validate($this->rules);
      $this->registerSemifinal();
  }
}

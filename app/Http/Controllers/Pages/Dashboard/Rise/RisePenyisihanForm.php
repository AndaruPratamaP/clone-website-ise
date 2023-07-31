<?php

namespace App\Http\Controllers\Pages\Dashboard\Rise;

use Livewire\Component;
use Livewire\WithFileUploads;

class RisePenyisihanForm extends Component
{
    use WithFileUploads;

    public string $team_name;
    public string $leader_agency;
    public string $leader_name;
    public $answer_file;
    public $poster_file;

    protected $rules = [
        'team_name' => 'required|string|max:255',
        'leader_agency' => 'required|string|max:255',
        'leader_name' => 'required|string|max:255',
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
      dd($this); //Temporary
  }
}

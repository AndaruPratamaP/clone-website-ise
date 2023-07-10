<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use Livewire\Component;
use Livewire\WithFileUploads;

class DsSelection extends Component
{
    use WithFileUploads;
    public $answer;

    protected $rules = [
        'answer' => 'required|file|mimes:pdf|max:3072',
    ];

    public function render()
    {
        return view('livewire.dashboard.my.icon.ds-selection')->layout('layouts.only-layout');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate($this->rules);
        dd($this);
    }
}

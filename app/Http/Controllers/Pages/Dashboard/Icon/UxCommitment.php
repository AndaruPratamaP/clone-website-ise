<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use Livewire\Component;
use Livewire\WithFileUploads;

class UxCommitment extends Component
{
    use WithFileUploads;
    public $payment;

    protected $rules = [
        'payment' => 'required|image|max:1024',
    ];

    public function render()
    {
        return view('livewire.dashboard.my.icon.ux-commitment')->layout('layouts.only-layout');
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

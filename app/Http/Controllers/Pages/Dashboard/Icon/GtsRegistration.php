<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use Livewire\Component;
use Livewire\WithFileUploads;


class GtsRegistration extends Component
{

    use WithFileUploads;

    public $name;
    public $email;
    public $sumber_informasi;
    public $bukti_ig;
    public $agree;


    protected $rules = [
        'name' => 'required|min:5|max:255',
        'email' => 'required|email|string',
        'sumber_informasi' => 'required|string',
        'bukti_ig' => 'required|image:max:1024',
        'agree' => 'required',
    ];

    public function render()
    {
        return view('livewire.dashboard.my.icon.gts-registration')->layout('layouts.only-layout');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate($this->rules);
    }
}

<?php

namespace App\Http\Controllers\Pages\Examples;

use Livewire\Component;
use Throwable;

class StepRegistrationExample extends Component
{

    public string $email = '';
    public string $anggota_1 = '';
    public string $anggota_2 = '';
    public string $anggota_3 = '';
    public string $anggota_4 = '';
    public bool $isValid = false;

    protected $rules = [
        'email' => 'required|email',
        'anggota_1' => 'required|min:8',
        'anggota_2' => 'required|min:8',
        'anggota_3' => 'required|min:8',
        'anggota_4' => 'required|min:8',
    ];

    public function render()
    {
        return view('livewire.step-registration-example')->layout('layouts.only-layout');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

        try {
            $this->isValid = true;
            $this->validate($this->rules);
        } catch (Throwable $e) {
            $this->isValid = false;
            return;
        }
    }

    public function submit() {
        dd($this);
    }
}

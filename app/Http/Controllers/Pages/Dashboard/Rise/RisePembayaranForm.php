<?php

namespace App\Http\Controllers\Pages\Dashboard\Rise;

use Livewire\Component;
use Livewire\WithFileUploads;

class RisePembayaranForm extends Component
{
    use WithFileUploads;

    public string $team_name;
    public string $leader_name;
    public string $account_owner;
    public string $bank_name;
    public $payment_file;

    protected $rules = [
        'team_name' => 'required|string|max:255',
        'leader_name' => 'required|string|max:255',
        'account_owner' => 'required|string|max:255',
        'bank_name' => 'required|string|max:255',
        'payment_file' => 'required|image|max:1024',
    ];


    public function render()
    {
        return view('livewire.dashboard.my.rise.rise-pembayaran-form')->layout('layouts.only-layout');
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

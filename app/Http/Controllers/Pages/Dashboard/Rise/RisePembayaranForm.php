<?php

namespace App\Http\Controllers\Pages\Dashboard\Rise;

use App\Http\Controllers\Presentation\Dashboard\Rise\RiseRegistrationController;
use Livewire\Component;
use Livewire\WithFileUploads;

class RisePembayaranForm extends RiseRegistrationController
{
    use WithFileUploads;

    public string $account_owner;
    public string $bank_name;
    public $payment_file;

    protected $rules = [
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
      $this->registerPembayaran();
  }
}

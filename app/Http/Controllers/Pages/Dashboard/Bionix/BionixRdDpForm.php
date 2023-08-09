<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Http\Controllers\Presentation\Dashboard\BionixRoadshow\BionixRdRegistrationController;
use Livewire\Component;
use Livewire\WithFileUploads;

class BionixRdDpForm extends BionixRdRegistrationController
{
  public function render()
  {
    return view('livewire.dashboard.my.bionix.bionix-rd-dp-form')->layout('layouts.only-layout');
  }
  use WithFileUploads;

  public string $team_name = '';
  public string $school;
  public string $leader_name = '';
  public string $rek_name = '';
  public string $nominal_dp = '';
  public string $promo_code = '';
  public string $payment_method;
  public $payment_proof;
  //public
  public array $schools = [''];
  public array $payment_methods = [
    'Cash',
    '1295633675 BNI
    a/n Dewi Angeline',
  ];

  protected $rules = [
    'team_name' => 'required|max:255',
    'school' => 'required',
    'leader_name' => 'required|max:255',
    'rek_name' => 'required|max:255',
    'nominal_dp' => 'required|max:5',
    'promo_code' => 'required|max:255',
    'payment_method' => 'required',
    'payment_proof' => 'required|image|max:1024',
  ];

  public function mount()
  {
    $this->schools = $this->getDaftarSekolah();
  }

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
    //ditambahin
  }

  public function submit()
  {
    $this->validate($this->rules);

    $validCode = $this->isValidPromoCode();

    if (!$validCode) {
      return;
    }

    $this->registerDp();
  }
}

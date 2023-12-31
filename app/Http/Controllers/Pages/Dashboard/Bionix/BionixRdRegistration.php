<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Http\Controllers\Presentation\Dashboard\BionixRoadshow\BionixRdRegistrationController;
use Livewire\Component;
use Livewire\WithFileUploads;

class BionixRdRegistration extends BionixRdRegistrationController
{
  use WithFileUploads;
  public $leader_student_card;
  public $leader_poster_file;
  public $leader_follow_ig_proof;
  public string $leader_twibbon_link = '';
  public string $member_name = '';
  public string $member_email = '';
  public string $member_phone_number = '';
  public $member_student_card;
  public $member_poster_file;
  public $member_follow_ig_proof;
  public string $member_twibbon_link = '';

  protected $rules = [
    'leader_student_card' => 'required|image|max:1024',
    'leader_poster_file' => 'required|image|max:1024',
    'leader_follow_ig_proof' => 'required|image|max:1024',
    'leader_twibbon_link' => 'required|max:255',
    'member_name' => 'required|max:255',
    'member_email' => 'required|email',
    'member_phone_number' => 'required|max:255',
    'member_student_card' => 'required|image|max:1024',
    'member_poster_file' => 'required|image|max:1024',
    'member_follow_ig_proof' => 'required|image|max:1024',
    'member_twibbon_link' => 'required|max:255',
  ];

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  public function submit()
  {
    $this->validate($this->rules);
    $this->registerBerkas();
  }

  //use this one
  public function render()
  {
    return view('livewire.dashboard.my.bionix.bionix-rd-registration')->layout('layouts.only-layout');
  }
}

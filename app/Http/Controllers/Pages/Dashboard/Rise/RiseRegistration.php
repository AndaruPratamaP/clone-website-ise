<?php

namespace App\Http\Controllers\Pages\Dashboard\Rise;

use App\Http\Controllers\Presentation\Dashboard\Rise\RiseRegistrationController;
use Livewire\Component;
use Livewire\WithFileUploads;
use Throwable;

class RiseRegistration extends RiseRegistrationController
{
  public function render()
  {
    return view('livewire.dashboard.my.rise.rise-registration')->layout('layouts.only-layout');
  }

  use WithFileUploads;
  // step 1
  public string $team_name;
  public string $leader_agency;
  public string $leader_name;
  public string $leader_phone;
  public string $leader_email;
  public string $leader_twibbon;
  public string $referral_code;
  public $leader_student_card;
  public $leader_poster;
  public $leader_ig_follow;
  // Step 2
  public string $member1_name;
  public string $member1_agency;
  public string $member1_phone;
  public string $member1_email;
  public string $member1_twibbon;
  public $member1_student_card;
  public $member1_poster;
  public $member1_ig_follow;
// Step 3
    public string $member2_name;
    public string $member2_agency;
    public string $member2_phone;
    public string $member2_email;
    public string $member2_twibbon;
    public $member2_student_card;
    public $member2_poster;
    public $member2_ig_follow;


  protected $rules = [
    // step 1
    'team_name' => 'required|string|max:255',
    'leader_agency' => 'required|string|max:255',
    'leader_name' => 'required|string|max:255',
    'leader_phone' => 'required|string|max:255',
    'leader_email' => 'required|string|max:255|email',
    'leader_twibbon' => 'required|string|max:255',
    'referral_code' => 'string|max:255|nullable',
    'leader_student_card' => 'required|image|max:1024',
    'leader_poster' => 'required|image|max:1024',
    'leader_ig_follow' => 'required|image|max:1024',
    // step 2
    'member1_name' => 'required|string|max:255',
    'member1_agency' => 'required|string|max:255',
    'member1_phone' => 'required|string|max:255',
    'member1_email' => 'required|string|max:255|email',
    'member1_twibbon' => 'required|string|max:255',
    'member1_student_card' => 'required|image|max:1024',
    'member1_poster' => 'required|image|max:1024',
    'member1_ig_follow' => 'required|image|max:1024',
    // step 3
    'member2_name' => 'string|max:255|nullable',
    'member2_agency' => 'string|max:255|nullable',
    'member2_phone' => 'string|max:255|nullable',
    'member2_email' => 'string|max:255|email|nullable',
    'member2_twibbon' => 'string|max:255|nullable',
    'member2_student_card' => 'image|max:1024|nullable',
    'member2_poster' => 'image|max:1024|nullable',
    'member2_ig_follow' => 'image|max:1024|nullable',

  ];


  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);

  }
  public function submit() {
    $this->validate($this->rules);
    $this->register();
}
}

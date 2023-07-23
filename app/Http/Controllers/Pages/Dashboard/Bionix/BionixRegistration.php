<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use Livewire\Component;
use Livewire\WithFileUploads;

class BionixRegistration extends Component
{
  use WithFileUploads;
  public string $team_name = '';
  public string $school = '';
  public $agreement;
  public string $leader_name = '';
  public string $leader_email = '';
  public string $leader_phone_number = '';
  public $leader_student_card;
  public $leader_poster_file;
  public $leader_ig_follow;
  public string $leader_twibbon_link = '';
  public string $member_name = '';
  public string $member_email = '';
  public string $member_phone_number = '';
  public $member_student_card;
  public $member_poster_file;
  public $member_ig_follow;
  public string $member_twibbon_link = '';
  public $payment_proof;

  public function render()
  {
    return view('livewire.dashboard.my.bionix.bionix-registration')->layout('layouts.only-layout');
  }

  protected $rules = [
    'team_name' => 'required|max:255',
    'school' => 'required|max:255',
    'agreement' => 'required',
    'leader_name' => 'required|max:255',
    'leader_email' => 'required|email',
    'leader_phone_number' => 'required|max:255',
    'leader_student_card' => 'required|image|max:1024',
    'leader_poster_file' => 'required|image|max:1024',
    'leader_ig_follow' => 'required|image|max:1024',
    'leader_twibbon_link' => 'required|max:255',
    'member_name' => 'required|max:255',
    'member_email' => 'required|email',
    'member_phone_number' => 'required|max:255',
    'member_student_card' => 'required|image|max:1024',
    'member_poster_file' => 'required|image|max:1024',
    'member_ig_follow' => 'required|image|max:1024',
    'member_twibbon_link' => 'required|max:255',
    'payment_proof' => 'required|image|max:1024',
  ];

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

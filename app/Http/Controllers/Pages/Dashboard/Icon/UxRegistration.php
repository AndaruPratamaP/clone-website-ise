<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Http\Controllers\Presentation\Dashboard\UX\UXAcademyRegistrationController;
use Livewire\WithFileUploads;

class UxRegistration extends UXAcademyRegistrationController
{
  use WithFileUploads;
  public string $department = '';
  public string $instagram = '';
  public string $whatsapp = '';
  public string $link_upload_twibbon = '';
  public $share_proof_file;
  public $cv;
  public string $reason = '';
  public string $hope = '';
  public string $after_ise = '';
  public string $referral;
  public string $otherRef = '';
  public $agreement_1;
  public $agreement_2;

  public $payment_proof;

  public function render()
  {
    return view('livewire.dashboard.my.icon.ux-registration')->layout('layouts.only-layout');
  }

  public array $referrals = ['Media Sosial ISE!', 'Media Partner ISE!', 'Sekolah', 'Teman/Keluarga', 'Lainnya'];

  protected $rules = [
    'department' => 'required|max:255',
    'instagram' => 'required|max:255',
    'link_upload_twibbon' => 'required|max:255',
    'share_proof_file' => 'required|image|max:1024',
    'cv' => 'required|mimes:pdf|file|max:1024',
    'reason' => 'required',
    'hope' => 'required',
    'after_ise' => 'required',
    'referral' => 'required',
    'agreement_1' => 'required',
    'agreement_2' => 'required',
    'payment_proof' => 'required|image|max:1024',
  ];

  public function mount()
  {
    if (!$this->isOpen) {
        return redirect()->route('my.ux')->with('toastr-toast', [
            'type' => 'info',
            'title' => 'Pendaftaran telah ditutup',
            'text' => 'Pendaftaran sudah ditutup karena telah melewati masa pendaftaran.',
        ]);
    }

    if ($this->isRegistered) {
        return redirect()->route('my.ux')->with('toastr-toast', [
            'type' => 'info',
            'title' => 'Telah terdaftar',
            'text' => 'Kamu telah terdaftar...',
        ]);
    }
  }

  public function updatedOtherRef()
  {
    if ($this->otherRef !== '') {
      $this->referral = $this->otherRef;
    }
  }

  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);
  }

  public function submit()
  {
    $this->validate($this->rules);
    $this->register();
  }
}

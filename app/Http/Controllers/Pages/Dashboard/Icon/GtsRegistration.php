<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Http\Controllers\Presentation\Dashboard\GrandTalkshowRegistrationController;
use Livewire\WithFileUploads;


class GtsRegistration extends GrandTalkshowRegistrationController
{

    use WithFileUploads;

    public string $full_name;
    public string $email;
    public string $referral;
    public string $otherRef = '';
    public $share_proof_file;
    public $agree;

    public array $referrals = [
        "Media Sosial ISE!",
        "Media Partner ISE!",
        "Sekolah",
        "Teman/Keluarga",
        "Lainnya"
    ];

    protected $rules = [
        'referral' => 'required|string',
        'share_proof_file' => 'required|image|max:1024',
        'agree' => 'required',
    ];

    public function render()
    {
        return view('livewire.dashboard.my.icon.gts-registration')->layout('layouts.only-layout');
    }

    public function mount()
    {
        if (!$this->isOpen) {
            return redirect()->route('my.gts')->with('toastr-toast', [
                'type' => 'info',
                'title' => 'Pendaftaran telah ditutup',
                'text' => 'Pendaftaran sudah ditutup karena telah melewati masa pendaftaran.',
            ]);
        }

        if ($this->isRegistered) {
            return redirect()->route('my.gts')->with('toastr-toast', [
                'type' => 'info',
                'title' => 'Telah terdaftar',
                'text' => 'Kamu telah terdaftar...',
            ]);
        }

        $this->full_name = $this->user_data['full_name'];
        $this->email = $this->user_data['email'];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatedReferral()
    {
        if ($this->otherRef !== "") {
            $this->referral = $this->otherRef;
        }
    }

    public function updatedOtherRef()
    {
        if ($this->otherRef !== "") {
            $this->referral = $this->otherRef;
        }
    }

    public function submit()
    {
        $this->validate($this->rules);

        $this->register();
    }
}

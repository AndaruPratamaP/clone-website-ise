<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Http\Controllers\Presentation\Dashboard\DS\DSAcademyRegistrationController;
use Livewire\Component;
use Livewire\WithFileUploads;
use Throwable;

class DsRegistration extends DSAcademyRegistrationController
{
    use WithFileUploads;
    public string $nama_anggota1    = '';
    public string $nama_anggota2    = '';
    public string $email_anggota1   = '';
    public string $email_anggota2   = '';
    public string $univ_anggota1    = '';
    public string $univ_anggota2    = '';
    public string $jurusan_ketua    = '';
    public string $jurusan_anggota1   = '';
    public string $jurusan_anggota2    = '';
    public string $insta_ketua       = '';
    public string $insta_anggota1    = '';
    public string $insta_anggota2    = '';
    public string $twib_ketua       = '';
    public string $twib_anggota1    = '';
    public string $twib_anggota2    = '';
    public string $wasap_anggota1    = '';
    public string $wasap_anggota2    = '';
    public string $nama_tim       = '';
    public string $alasan_tim    = '';
    public string $tujuan_tim    = '';
    public string $harapan_tim    = '';
    public string $sumber_informasi    = '';
    public string $sumber_informasi_lainnya    = '';
    public $agree;
    public $bukti_ketua;
    public $bukti_anggota1;
    public $bukti_anggota2;
    public $bukti_pembayaran;
    public $cv_ketua;
    public $cv_anggota1;
    public $cv_anggota2;

    protected $rules = [
        'nama_anggota1' => 'required|string|max:255',
        'nama_anggota2' => 'required|string|max:255',
        'email_anggota1' => 'required|string|max:255|email',
        'email_anggota2' => 'required|string|max:255|email',
        'univ_anggota1' => 'required|string|max:255',
        'univ_anggota2' => 'required|string|max:255',
        'jurusan_ketua' => 'required|string|max:255',
        'jurusan_anggota1' => 'required|string|max:255',
        'jurusan_anggota2' => 'required|string|max:255',
        'insta_ketua' => 'required|string|max:255',
        'insta_anggota1' => 'required|string|max:255',
        'insta_anggota2' => 'required|string|max:255',
        'twib_ketua' => 'required|string|max:255',
        'twib_anggota1' => 'required|string|max:255',
        'twib_anggota2' => 'required|string|max:255',
        'wasap_anggota1' => 'required|string|max:255',
        'wasap_anggota2' => 'required|string|max:255',
        'cv_ketua' => 'required|mimes:pdf|max:1024',
        'cv_anggota1' => 'required|mimes:pdf|max:1024',
        'cv_anggota2' => 'required|mimes:pdf|max:1024',
        'nama_tim' => 'required|string|max:255',
        'alasan_tim' => 'required|string|max:255',
        'tujuan_tim' => 'required|string|max:255',
        'harapan_tim' => 'required|string|max:255',
        'sumber_informasi' => 'required',
        'sumber_informasi_lainnya' => 'string|max:255',
        'bukti_ketua' => 'required|image:max:1024',
        'bukti_anggota1' => 'required|image:max:1024',
        'bukti_anggota2' => 'required|image:max:1024',
        'bukti_pembayaran' => 'required|image:max:1024',
    ];

    public function mount()
    {
      if (!$this->isOpen) {
          return redirect()->route('my.ds')->with('toastr-toast', [
              'type' => 'info',
              'title' => 'Pendaftaran telah ditutup',
              'text' => 'Pendaftaran sudah ditutup karena telah melewati masa pendaftaran.',
          ]);
      }
  
      if ($this->isRegistered) {
          return redirect()->route('my.ds')->with('toastr-toast', [
              'type' => 'info',
              'title' => 'Telah terdaftar',
              'text' => 'Kamu telah terdaftar...',
          ]);
      }
    }

    public function render()
    {
        return view('livewire.dashboard.my.icon.ds-registration')->layout('layouts.only-layout');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit() {
        $this->validate($this->rules);
        $this->register();
    }

}

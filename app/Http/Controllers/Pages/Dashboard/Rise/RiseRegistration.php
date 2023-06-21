<?php

namespace App\Http\Controllers\Pages\Dashboard\Rise;

use Livewire\Component;
use Livewire\WithFileUploads;
use Throwable;

class RiseRegistration extends Component
{
  public function render()
  {
    return view('livewire.dashboard.my.rise.rise-registration')->layout('layouts.only-layout');
  }

  use WithFileUploads;
  // step 1
  public $nama_tim;
  public $asal_instansi;
  public $nama_ketua;
  public $nomor_telepon_ketua;
  public $email_ketua;
  public $twibbon_ketua;
  public $kartu_pelajar_ketua;
  public $poster_ketua;

  // step 2 
  public $nama_anggota1;
  public $nomor_telepon_anggota1;
  public $email_anggota1;
  public $twibbon_anggota1;
  public $kartu_pelajar_anggota1;
  public $poster_anggota1;

  // step 3

  public $nama_anggota2;
  public $nomor_telepon_anggota2;
  public $email_anggota2;
  public $twibbon_anggota2;
  public $kartu_pelajar_anggota2;
  public $poster_anggota2;

  // step 4

  public $status_biodata;

  protected $rules = [
    // step 1
    'nama_tim' => 'required|max:255',
    'asal_instansi' => 'required|max:255',
    'nama_ketua' => 'required|max:255',
    'nomor_telepon_ketua' => 'required|max:255',
    'email_ketua' => 'required|email|max:255',
    'twibbon_ketua' => 'required|max:255',
    'kartu_pelajar_ketua' => 'required|image:max:1024',
    'poster_ketua' => 'required|image:max:1024',
    // step 2
    'nama_anggota1' => 'required|max:255',
    'nomor_telepon_anggota1' => 'required|max:255',
    'email_anggota1' => 'required|email|max:255',
    'twibbon_anggota1' => 'required|max:255',
    'kartu_pelajar_anggota1' => 'required|image:max:1024',
    'poster_anggota1' => 'required|image:max:1024',
    // step 3
    'nama_anggota2' => 'required|max:255',
    'nomor_telepon_anggota2' => 'required|max:255',
    'email_anggota2' => 'required|email|max:255',
    'twibbon_anggota2' => 'required|max:255',
    'kartu_pelajar_anggota2' => 'required|image:max:1024',
    'poster_anggota2' => 'required|image:max:1024',
    // step 4
    'status_biodata' => 'required|max:255',
  ];


  public function updated($propertyName)
  {
    $this->validateOnly($propertyName);

  }
  public function submit()
  {
    dd($this);
  }
}
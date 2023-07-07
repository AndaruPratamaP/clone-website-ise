<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use Livewire\Component;
use Livewire\WithFileUploads;
use Throwable;

class IsClassRegistration extends Component
{
    public function render()
    {
        return view('livewire.dashboard.my.bionix.is-class-registration')->layout('layouts.only-layout');
    }

    use WithFileUploads;

    // step 1
    public $nama;
    public $asal_sekolah;
    public $kartu_pelajar;
    public $poster;
    public $twibbon;
    // step 2
    public $bukti_bayar;
    public $tf_method;

    protected $rules = [
      // step 1
      'nama' => 'required|string|max:255',
      'asal_sekolah' => 'required|string|max:255',
      'kartu_pelajar' => 'required|image|max:1024',
      'poster' => 'required|image|max:1024',
      'twibbon' => 'required|string|max:255',
      // step 2
      'bukti_bayar' => 'required|image|max:1024',
      'tf_method' => 'required|string|max:255',
    ];


    public function updated($propertyName)
    {
      $this->validateOnly($propertyName);
    }
    public function submit()
    {
      $this->validate($this->rules);
    }
}

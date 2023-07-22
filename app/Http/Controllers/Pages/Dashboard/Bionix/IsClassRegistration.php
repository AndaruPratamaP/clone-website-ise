<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Core\Domain\Models\Eloquents\BankList\BankList;
use App\Http\Controllers\Presentation\Dashboard\ISClass\ISClassRegistrationController;
use Livewire\Component;
use Livewire\WithFileUploads;
use Throwable;

class IsClassRegistration extends ISClassRegistrationController
{
    public function render()
    {
        return view('livewire.dashboard.my.bionix.isclass-registration')->layout('layouts.only-layout');
    }

    use WithFileUploads;

    // step 1
    public $kartu_pelajar;
    public $poster;
    public $twibbon;
    public $follow_proof_file;
    // step 2
    public $bukti_bayar;
    public $payment_method;

    public array $payment_methods = [1, 3];

    public $bank_list;

    protected $rules = [
      // step 1
      'kartu_pelajar' => 'required|image|max:1024',
      'poster' => 'required|image|max:1024',
      'twibbon' => 'required|string|max:255',
      'follow_proof_file' => 'required|image|max:1024',
      // step 2
      'bukti_bayar' => 'required|image|max:1024',
      'payment_method' => 'required|string|max:255',
    ];

    public function mount()
    {
      $this->bank_list = BankList::all();

      if ($this->isFull) {
          return redirect()->route('my.isclass')->with('toastr-toast', [
              'type' => 'info',
              'title' => 'Kuota pendaftaran telah dipenuhi',
              'text' => 'Pendaftaran sudah ditutup karena telah melewati batas kuota.',
          ]);
      }

      if (!$this->isOpen) {
          return redirect()->route('my.isclass')->with('toastr-toast', [
              'type' => 'info',
              'title' => 'Pendaftaran telah ditutup',
              'text' => 'Pendaftaran sudah ditutup karena telah melewati masa pendaftaran.',
          ]);
      }
  
      if ($this->isRegistered) {
          return redirect()->route('my.isclass')->with('toastr-toast', [
              'type' => 'info',
              'title' => 'Telah terdaftar',
              'text' => 'Kamu telah terdaftar...',
          ]);
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

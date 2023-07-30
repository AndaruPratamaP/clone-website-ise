<?php

namespace App\Http\Controllers\Pages\Dashboard\Rise;

use App\Http\Controllers\Presentation\Dashboard\Rise\RiseDetailPesertaController;
use Livewire\Component;

class RiseAdminAction extends RiseDetailPesertaController
{
    public function render()
    {
        return view('livewire.dashboard.admin.rise.rise-detail-peserta')->layout('layouts.dashboard.admin.base');
    }

    public function mount()
    {
        switch (request()->route("action")) {
            case "accept-berkas":
                $this->acceptRegistration();
                break;
            case "reject-berkas":
                $this->rejectRegistration();
                break;
            // case "accept-seleksi-soal":
            //     $this->acceptAnswer();
            //     break;
            // case "reject-seleksi-soal":
            //     $this->rejectAnswer();
            //     break;
            default:
                break;
        }
        redirect()->route("admin.rise.table");
    }
}

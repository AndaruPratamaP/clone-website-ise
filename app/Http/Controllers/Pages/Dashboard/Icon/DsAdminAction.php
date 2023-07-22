<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Http\Controllers\Presentation\Dashboard\DS\DSAcademyDetailPesertaController;
use Livewire\Component;

class DsAdminAction extends DSAcademyDetailPesertaController
{
    public function render()
    {
        return view('livewire.ds-admin-action');
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
            case "accept-seleksi-soal":
                $this->acceptAnswer();
                break;
            case "reject-seleksi-soal":
                $this->rejectAnswer();
                break;
            default:
                break;
        }
        redirect()->route("admin.ds.table");
    }
}

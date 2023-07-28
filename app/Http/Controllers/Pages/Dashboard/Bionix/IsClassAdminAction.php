<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Http\Controllers\Presentation\Dashboard\ISClass\ISClassDetailPesertaController;
use Livewire\Component;


class IsClassAdminAction extends ISClassDetailPesertaController
{
    public function render()
    {
        return view('livewire.dashboard.admin.bionix.is-class-detail-peserta')->layout('layouts.dashboard.admin.base');
    }

    public function mount()
    {
        switch (request()->route("action")) {
            case "accept-berkas":
                $this->accept();
                break;
            case "reject-berkas":
                $this->reject();
                break;
            default:
                break;
        }
        redirect()->route("admin.isclass.table");
    }
}


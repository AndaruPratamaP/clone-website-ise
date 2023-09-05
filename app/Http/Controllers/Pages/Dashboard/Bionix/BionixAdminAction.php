<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Http\Controllers\Presentation\Dashboard\Bionix\BionixDetailPesertaController;
use Livewire\Component;

class BionixAdminAction extends BionixDetailPesertaController
{
    public function render()
    {
        return view('livewire.bionix-admin-action');
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
            case 'accept-penyisihan':
                $this->acceptPenyisihan();
                break;
            case 'reject-penyisihan':
                $this->rejectPenyisihan();
                break;
            case 'accept-semifinal':
                $this->acceptSemifinal();
                break;
            case 'reject-semifinal':
                $this->rejectSemifinal();
                break;
            case 'accept-final':
                $this->acceptFinal();
                break;
            case 'reject-final':
                $this->rejectFinal();
                break;
                default:
                break;

        }
        redirect()->route("admin.bionix.table");
    }
}

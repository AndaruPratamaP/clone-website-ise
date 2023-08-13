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
            case "accept-penyisihan":
                $this->acceptPenyisihan();
                break;
            case "reject-penyisihan":
                $this->rejectPenyisihan();
                break;
            case "accept-pembayaran":
                $this->acceptPembayaran();
                break;
            case "reject-pembayaran":
                $this->rejectPembayaran();
                break;
            case "accept-semifinal":
                $this->acceptSemifinal();
                break;
            case "reject-semifinal":
                $this->rejectSemifinal();
                break;
            case "accept-final":
                $this->acceptFinal();
                break;
            case "reject-final":
                $this->rejectFinal();
                break;
            default:
                break;
        }
        redirect()->route("admin.rise.table");
    }
}

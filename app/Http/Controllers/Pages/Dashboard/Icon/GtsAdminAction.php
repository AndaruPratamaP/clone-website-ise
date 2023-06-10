<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use App\Http\Controllers\Presentation\Dashboard\GrandTalkshowDetailPesertaController;

class GtsAdminAction extends GrandTalkshowDetailPesertaController
{
    public function render()
    {
        return view('livewire.dashboard.admin.icon.gts-detail-peserta')->layout('layouts.dashboard.admin.base');
    }

    public function mount()
    {
        switch (request()->route("action")) {
            case "accept":
                $this->acceptPeserta();
                break;
            case "reject":
                $this->rejectPeserta();
                break;
            default:
                break;
        }
        redirect()->route("gts.table");
    }
}

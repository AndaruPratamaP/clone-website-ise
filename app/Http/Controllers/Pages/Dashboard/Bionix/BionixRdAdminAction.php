<?php

namespace App\Http\Controllers\Pages\Dashboard\Bionix;

use App\Http\Controllers\Presentation\Dashboard\BionixRoadshow\BionixRdDetailPesertaController;
use Livewire\Component;

class BionixRdAdminAction extends BionixRdDetailPesertaController
{
  public function render()
  {
    return view('livewire.dashboard.admin.bionix.bionix-rd-detail-peserta')->layout('layouts.dashboard.admin.base');
  }
  public function mount()
  {
    switch (request()->route('action')) {
      case 'accept-lunas':
        $this->acceptLunas();
        break;
      case 'accept-dp':
        $this->acceptDp();
        break;
      case 'reject-dp':
        $this->rejectDp();
        break;
      case 'accept-pelunasan':
        $this->acceptPelunasan();
        break;
      case 'reject-pelunasan':
        $this->rejectPelunasan();
        break;
      case 'accept-berkas':
        $this->acceptBerkas();
        break;
      case 'reject-berkas':
        $this->rejectBerkas();
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
    redirect()->route('admin.bionixroadshow.table');
  }
}

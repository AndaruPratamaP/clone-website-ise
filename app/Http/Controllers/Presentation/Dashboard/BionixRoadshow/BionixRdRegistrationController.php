<?php

namespace App\Http\Controllers\Presentation\Dashboard\BionixRoadshow;

use App\Core\Application\Services\BionixRoadshow\BionixRdRegistrationRequest;
use App\Core\Application\Services\BionixRoadshow\BionixRdDpRequest;
use App\Core\Application\Services\BionixRoadshow\BionixRdPelunasanRequest;
use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\BionixRoadshow\BionixRdService;
use App\Exceptions\IseException;
use App\Http\Controllers\Pages\BaseController;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Throwable;

class BionixRdRegistrationController extends Component
{
  use BaseController;

  private EventService $event_service;
  private BionixRdService $service;
  private BionixRdDpRequest $requestDp;
  private BionixRdPelunasanRequest $requestPelunasan;
  private BionixRdRegistrationRequest $requestBerkas;

  public bool $isOpen = false;
  public bool $isRegistered = false;
  public $date;

  public array $user_data = [
    'full_name' => '',
    'email' => '',
  ];

  public $peserta;

  public array $msg = [
    'error' => '',
    'success' => '',
  ];

  public function boot(EventService $event_service, BionixRdService $service)
  {
    $this->event_service = $event_service;
    $this->service = $service;

    $this->isRegistered = $this->event_service->isUserOnEvent(
      '3e003d84-884c-4762-aa7a-66f8a7458e88',
      auth()->user()->id
    );

    $this->isOpen = $this->event_service->isEventOpen('3e003d84-884c-4762-aa7a-66f8a7458e88');

    $this->user_data = [
      'full_name' => auth()->user()->full_name,
      'email' => auth()->user()->email,
    ];
    
    $this->peserta = $this->service->getPeserta(auth()->user()->id);
  }

  public function registerDp()
  {
    $this->requestDp = new BionixRdDpRequest(
      $this->team_name,
      $this->school,
      $this->rek_name,
      $this->nominal_dp,
      $this->promo_code,
      $this->payment_method,
      $this->payment_proof
    );

    DB::beginTransaction();
    try {
      $this->dispatchToast('info', 'Menguplod form...', 'Mohon tunggu sebentar');
      $this->service->registerDp($this->requestDp);
      $this->dispatchToast('success', 'Berhasil Terdaftar', 'Anda telah terdaftar pada Bionix Roadshow');

      // redirect
    } catch (Throwable $e) {
      DB::rollBack();
      $this->msg['error'] = $e->getMessage();

      $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
      return;
    }
    DB::commit();

    return redirect()
      ->route('my.bionixroadshow')
      ->with('toastr-toast', [
        'type' => 'success',
        'title' => 'Berhasil mendaftar',
        'text' => 'Anda telah terdaftar pada Bionix Roadshow',
      ]);
  }
  public function registerPelunasan()
  {
    $this->requestPelunasan = new BionixRdPelunasanRequest($this->bukti);

    DB::beginTransaction();
    try {
      $this->dispatchToast('info', 'Menguplod form...', 'Mohon tunggu sebentar');
      $this->service->registerPelunasan($this->requestPelunasan);
      $this->dispatchToast('success', 'Berhasil Terdaftar', 'Anda telah terdaftar pada Bionix Roadshow');

      // redirect
    } catch (Throwable $e) {
      DB::rollBack();
      $this->msg['error'] = $e->getMessage();

      $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
      return;
    }
    DB::commit();

    return redirect()
      ->route('my.bionixroadshow')
      ->with('toastr-toast', [
        'type' => 'success',
        'title' => 'Berhasil mendaftar',
        'text' => 'Anda telah terdaftar pada Bionix Roadshow',
      ]);
  }
  public function registerBerkas()
  {
    $this->requestBerkas = new BionixRdRegistrationRequest(
      $this->leader_name,
      $this->leader_student_card,
      $this->leader_poster_file,
      $this->leader_follow_ig_proof,
      $this->leader_twibbon_link,
      $this->member_name,
      $this->member_email,
      $this->member_phone_number,
      $this->member_student_card,
      $this->member_poster_file,
      $this->member_follow_ig_proof,
      $this->member_twibbon_link
    );

    DB::beginTransaction();
    try {
      $this->dispatchToast('info', 'Menguplod form...', 'Mohon tunggu sebentar');
      $this->service->registerBerkas($this->requestBerkas);
      $this->dispatchToast('success', 'Berhasil Terdaftar', 'Anda telah terdaftar pada Bionix Roadshow');

      // redirect
    } catch (Throwable $e) {
      DB::rollBack();
      $this->msg['error'] = $e->getMessage();

      $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
      return;
    }
    DB::commit();

    return redirect()
      ->route('my.bionixroadshow')
      ->with('toastr-toast', [
        'type' => 'success',
        'title' => 'Berhasil mendaftar',
        'text' => 'Anda telah terdaftar pada Bionix Roadshow',
      ]);
  }

  public function isValidPromoCode(): bool
  {
    try
    {
      $validCode = $this->service->isValidCoupon($this->school, $this->promo_code);
      return $validCode;
    } catch(IseException $e)
    {
      $this->msg['error'] = $e->getMessage();
      $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
      return false;
    }
  }

  public function getDaftarSekolah()
  {
    try
    {
      $daftarSekolah = $this->service->getDaftarSekolah();
      return $daftarSekolah;
    } catch(IseException $e)
    {
      $this->msg['error'] = $e->getMessage();
      $this->dispatchToast('error', 'Terjadi kegagalan', $e->getMessage());
      return [];
    }
  }

  public function getTagihan()
  {
    return $this->service->getHargaPelunasan();
  }
}

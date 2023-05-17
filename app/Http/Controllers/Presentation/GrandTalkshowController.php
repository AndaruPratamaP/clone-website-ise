<?php

namespace App\Http\Controllers\Presentation;

use App\Core\Application\Services\GrandTalkshow\GrandTalkshowRequest;
use App\Core\Application\Services\GrandTalkshow\GrandTalkshowResponse;
use App\Core\Application\Services\GrandTalkshow\GrandTalkshowService;
use App\Core\Domain\Models\Facades\UserAccount;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

use Throwable;

class GrandTalkshowController extends Component
{
  private GrandTalkshowService $service;
  private GrandTalkshowRequest $request;

  public array $msg = [
    'error' => '',
    'success' => '',
  ];

  public function boot(GrandTalkshowService $service)
  {
    $this->service = $service;
  }

  public function index($search)
  {
    return $this->service->getAllPeserta($search);
  }
}

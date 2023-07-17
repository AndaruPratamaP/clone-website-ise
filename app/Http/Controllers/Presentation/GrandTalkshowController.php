<?php

namespace App\Http\Controllers\Presentation;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\GrandTalkshow\GrandTalkshowRequest;
use App\Core\Application\Services\GrandTalkshow\GrandTalkshowService;
use App\Http\Controllers\Pages\BaseController;
use Livewire\Component;

use Throwable;

class GrandTalkshowController extends Component
{
    use BaseController;
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

    public function index(string $search, int $entries, string $orderby, string $order)
    {
        return $this->service->getAllPeserta($search, $entries, $orderby, $order);
    }

    public function sendNotify()
    {
        if($this->service->sendNotify())
        {
            $this->dispatchToast('success', 'Berhasil mengirim notifikasi');
        } else {
            $this->dispatchToast('error', 'Tidak berhasil mengirim notifikasi');
        }
    }
}

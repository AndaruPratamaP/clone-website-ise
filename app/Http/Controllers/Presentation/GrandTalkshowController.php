<?php

namespace App\Http\Controllers\Presentation;

use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\GrandTalkshow\GrandTalkshowRequest;
use App\Core\Application\Services\GrandTalkshow\GrandTalkshowService;
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

    public function index(string $search, int $entries, string $orderby, string $order)
    {
        return $this->service->getAllPeserta($search, $entries, $orderby, $order);
    }
}

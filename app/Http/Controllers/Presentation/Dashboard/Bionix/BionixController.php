<?php

namespace App\Http\Controllers\Presentation\Dashboard\Bionix;

use App\Core\Application\Services\Event\EventService;
use App\Http\Controllers\Pages\Dashboard\Bionix\BionixRegistration;
use App\Core\Application\Services\Bionix\BionixService;
use App\Core\Application\Services\Bionix\BionixRequest;
use Livewire\Component;
use Throwable;

class BionixController extends Component
{
    private BionixService $service;
    private BionixRequest $request;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(BionixService $service)
    {
        $this->service = $service;
    }

    public function index(string $search, int $entries, string $orderby, string $order)
    {
        return $this->service->getAllPeserta($search, $entries, $orderby, $order);
    }
}

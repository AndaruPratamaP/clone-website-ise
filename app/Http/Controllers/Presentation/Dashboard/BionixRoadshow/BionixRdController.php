<?php

namespace App\Http\Controllers\Presentation\Dashboard\BionixRoadShow;

use App\Core\Application\Services\BionixRoadshow\BionixRdService;
use App\Http\Controllers\Pages\BaseController;
use Livewire\Component;

use Throwable;

class BionixRdController extends Component
{
    use BaseController;
    private BionixRdService $service;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(BionixRdService $service)
    {
        $this->service = $service;
    }

    public function index(string $search, int $entries, string $orderby, string $order)
    {
        return $this->service->getAllPeserta($search, $entries, $orderby, $order);
    }
}

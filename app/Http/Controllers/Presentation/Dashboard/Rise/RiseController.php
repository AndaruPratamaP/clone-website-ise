<?php

namespace App\Http\Controllers\Presentation\Dashboard\Rise;

use App\Core\Application\Services\Rise\RiseService;
use App\Core\Application\Services\Rise\RiseRegistrationRequest;
use App\Http\Controllers\Pages\BaseController;
use Livewire\Component;
use Throwable;

class RiseController extends Component
{
    use BaseController;
    private RiseService $service;
    private RiseRegistrationRequest $request;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(RiseService $service)
    {
        $this->service = $service;
    }

    public function index(string $search, int $entries, string $orderby, string $order)
    {
        return $this->service->getAllPeserta($search, $entries, $orderby, $order);
    }
}

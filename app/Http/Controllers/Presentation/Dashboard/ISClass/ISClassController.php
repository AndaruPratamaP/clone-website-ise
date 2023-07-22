<?php

namespace App\Http\Controllers\Presentation\Dashboard\ISClass;

use App\Core\Application\Services\ISClass\ISClassService;
use App\Http\Controllers\Pages\BaseController;
use Livewire\Component;

use Throwable;

class ISClassController extends Component
{
    use BaseController;
    private ISClassService $service;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(ISClassService $service)
    {
        $this->service = $service;
    }

    public function index(string $search, int $entries, string $orderby, string $order)
    {
        return $this->service->getAllPeserta($search, $entries, $orderby, $order);
    }
}

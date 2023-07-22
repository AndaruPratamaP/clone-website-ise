<?php

namespace App\Http\Controllers\Presentation\Dashboard\UX;

use App\Core\Application\Services\UXAcademy\UXAcademyService;
use App\Http\Controllers\Pages\BaseController;
use Livewire\Component;

use Throwable;

class UXAcademyController extends Component
{
    use BaseController;
    private UXAcademyService $service;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(UXAcademyService $service)
    {
        $this->service = $service;
    }

    public function index(string $search, int $entries, string $orderby, string $order)
    {
        return $this->service->getAllPeserta($search, $entries, $orderby, $order);
    }
}

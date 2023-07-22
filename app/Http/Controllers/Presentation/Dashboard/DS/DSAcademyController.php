<?php

namespace App\Http\Controllers\Presentation\Dashboard\DS;

use App\Core\Application\Services\DSAcademy\DSAcademyService;
use App\Http\Controllers\Pages\BaseController;
use Livewire\Component;

use Throwable;

class DSAcademyController extends Component
{
    use BaseController;
    private DSAcademyService $service;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(DSAcademyService $service)
    {
        $this->service = $service;
    }

    public function index(string $search, int $entries, string $orderby, string $order)
    {
        return $this->service->getAllPeserta($search, $entries, $orderby, $order);
    }
}

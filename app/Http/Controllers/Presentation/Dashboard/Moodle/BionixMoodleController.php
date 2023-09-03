<?php

namespace App\Http\Controllers\Presentation\Dashboard\Moodle;

use App\Core\Application\Exports\BionixMoodleExport;
use App\Core\Application\Services\Moodle\BionixMoodleService;
use App\Http\Controllers\Pages\BaseController;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use Throwable;

class BionixMoodleController extends Component
{
    use BaseController;
    private BionixMoodleService $service;

    public array $msg = [
        'error' => '',
        'success' => '',
    ];

    public function boot(BionixMoodleService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $this->service->generate();
    }

    public function export()
    {
        return Excel::download(new BionixMoodleExport, 'users.csv', \Maatwebsite\Excel\Excel::CSV);
    }

    public function render()
    {
        $this->index();

        redirect()->route('admin.moodle.download');

        return view('livewire.errors.500')->layout('layouts.only-layout');
    }
}

<?php

namespace App\Http\Controllers\Presentation;

use App\Core\Application\Services\Shortener\ShortenerRequest;
use App\Core\Application\Services\Shortener\ShortenerResponse;
use App\Core\Application\Services\Shortener\ShortenerService;
use App\Core\Domain\Models\Facades\UserAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Throwable;

class ShortenerController extends Component
{
    private ShortenerService $service;
    private ShortenerRequest $request;

    public array $msg = [
        "error" => "",
        "success" => ""
    ];

    public function boot(ShortenerService $service)
    {
        $this->service = $service;
    }

    public function index(): array
    {
        return $this->service->getAllShortener();
    }

    public function show(string $short_url): ?ShortenerResponse
    {
        return $this->service->getShortener($short_url);
    }

    public function store(): ?ShortenerResponse
    {
        if (preg_match('/[0-9]/', $this->short_url)) {
            $this->msg['error'] = "Short URL tidak boleh mengandung angka";
            return null;
        }

        $this->request = new ShortenerRequest(
            $this->long_url,
            $this->short_url,
        );

        DB::beginTransaction();
        try {
            $data = $this->service->storeShortener($this->request, new UserAccount(Auth::user()->id));
        } catch (Throwable $e) {
            DB::rollBack();
            $this->msg['error'] = $e;
            return null;
        }
        DB::commit();

        return new ShortenerResponse(
            $data->getShortUrl(),
            $data->getLongUrl(),
            $data->getVisitor(),
            $data->getUserId()
        );
    }
}

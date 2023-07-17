<?php

namespace App\Http\Controllers\Presentation;

use App\Core\Application\Services\Shortener\ShortenerRequest;
use App\Core\Application\Services\Shortener\ShortenerResponse;
use App\Core\Application\Services\Shortener\ShortenerService;
use App\Core\Domain\Models\Facades\UserAccount;
use App\Exceptions\IseException;
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

    public function index(string $search, int $entries, string $orderby, string $order)
    {
        return $this->service->getAllShortener($search, $entries, $orderby, $order);
    }

    public function show(string $short_url): ?ShortenerResponse
    {
        return $this->service->getShortener($short_url);
    }

    public function store(): ?ShortenerResponse
    {

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

    public function delete($shorten)
    {
        DB::beginTransaction();
        try {
            $this->service->delete($shorten);
        } catch (IseException $e) {
            DB::rollBack();

            return redirect()->route('admin.shortener.table')->with('toastr-toast', [
                'type' => 'error',
                'title' => 'Telah terjadi error',
                'text' => $e->getMessage(),
            ]);
        }
        DB::commit();

        return redirect()->route('admin.shortener.table')->with('toastr-toast', [
            'type' => 'success',
            'title' => 'Berhasil',
            'text' => 'Shortener telah berhasil dihapus...',
        ]);
    }
}

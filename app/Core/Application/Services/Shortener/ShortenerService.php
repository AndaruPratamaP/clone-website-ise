<?php

namespace App\Core\Application\Services\Shortener;

use App\Core\Domain\Models\Eloquents\Shortener\Shortener as EloquentShortener;
use App\Core\Domain\Models\Facades\Shortener\Shortener;
use App\Core\Domain\Models\Facades\UserAccount;
use App\Core\Domain\Repositories\SqlShortenerRepository;
use App\Exceptions\IseException;
use Throwable;

class ShortenerService
{
    private SqlShortenerRepository $repository;

    public function __construct(SqlShortenerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllShortener($search, $entries, $orderby, $order)
    {
        $columns = ['long_url', 'short_url', 'full_name'];

        $paginate = EloquentShortener::join('users', 'shorteners.user_id', '=', 'users.id')
            ->where(function ($q) use ($search, $columns) {
                foreach ($columns as $column) {
                    $q->orWhere($column, 'like', '%' . $search . '%');
                }
            })
            ->orderBy($this->sanitizeOrderBy($orderby), $this->sanitizeOrder($order))
            ->paginate($entries);

        return $paginate;
    }

    protected function sanitizeOrderBy($orderby)
    {
        $allowedColumns = ['shorteners.created_at', 'short_url', 'full_name', 'visitor'];
        return in_array($orderby, $allowedColumns) ? $orderby : 'shorteners.created_at';
    }

    protected function sanitizeOrder($order)
    {
        return in_array(strtolower($order), ['asc', 'desc']) ? strtolower($order) : 'asc';
    }

    public function getShortener(string $short_url): ?ShortenerResponse
    {
        $shortener = $this->repository->findByShortUrl($short_url);

        if ($shortener === null) {
            IseException::throw("Shortener dengan short url {$short_url} tidak ditemukan", 501);
        }

        return new ShortenerResponse(
            $shortener->getShortUrl(),
            $shortener->getLongUrl(),
            $shortener->getVisitor(),
            $shortener->getUserId()
        );
    }

    public function storeShortener(ShortenerRequest $request, UserAccount $user): ?ShortenerResponse
    {
        $generatedShortUrl = null;
        if ($request->getShortUrl() == null) {
            $latestAlias = $this->repository->findLatestUnCustomizedShortUrl();
            $generatedShortUrl = $this->generateAlias(($latestAlias == null) ? $latestAlias : $latestAlias->getShortUrl());
        }

        $shortener = new Shortener(
            ($generatedShortUrl == null) ? $request->getShortUrl() : $generatedShortUrl,
            $request->getLongUrl(),
            ($generatedShortUrl == null) ? true : false,
            $user->getUserId(),
        );

        $done = $this->repository->store($shortener);
        if (!$done) {
            IseException::throw("Gagal menyimpan shortener", 502);
        }

        return new ShortenerResponse(
            $shortener->getShortUrl(),
            $shortener->getLongUrl(),
            $shortener->getVisitor(),
            $shortener->getUserId()
        );
    }

    private function generateAlias($latestAlias): string
    {
        $base = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];

        $temp = $latestAlias;
        $latestAlias = "";
        foreach (str_split($temp) as $alias) {
            if (in_array($alias, $base)) {
                $latestAlias .= $alias;
            }
        }

        if (strlen($latestAlias) < 1) {
            return "a";
        }

        $latestAlias = str_split($latestAlias);
        $banyak = count($latestAlias);


        $naik = true;
        for ($i = $banyak; $i > 0 && $naik == true; $i--) {
            $key = array_search($latestAlias[$i - 1], $base);
            if (!array_key_exists($key + 1, $base)) {
                $latestAlias[$i - 1] = $base[0];
                if ($i == 1) {
                    $naik = false;
                    array_unshift($latestAlias, $base[0]);
                } else {
                    $naik = true;
                }
            } else {
                $latestAlias[$i - 1] = $base[$key + 1];
                $naik = false;
            }
        }

        return implode("", $latestAlias);
    }

    public function delete(string $shorten): bool
    {
        try {
            EloquentShortener::where('short_url', $shorten)->delete();
            return true;
        } catch (Throwable $e) {
            IseException::throw("Gagal menghapus shortener", 502);
        }
    }
}

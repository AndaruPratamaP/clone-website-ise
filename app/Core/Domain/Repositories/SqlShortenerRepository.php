<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\Shortener\Shortener;
use App\Core\Domain\Models\Facades\User\UserId;
use Illuminate\Support\Facades\DB;

class SqlShortenerRepository
{
    public function getAll(): array
    {
        $rows = DB::table('shorteners')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?Shortener
    {
        $row = DB::table('shorteners')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        $row->visitor += 1;
        DB::table('shorteners')
            ->where('id', $id)
            ->update(['visitor' => $row->visitor]);

        return $this->constructFromRows([$row])[0];
    }

    public function findByShortUrl(string $short_url): ?Shortener
    {
        $row = DB::table('shorteners')->where('short_url', $short_url)->first();

        if (!$row) {
            return null;
        }

        $row->visitor += 1;
        DB::table('shorteners')
            ->where('short_url', $short_url)
            ->update(['visitor' => $row->visitor]);

        return $this->constructFromRows([$row])[0];
    }

    public function findLatestUnCustomizedShortUrl(): ?Shortener
    {
        $row = DB::table('shorteners')
            ->select('*')
            ->where('is_customized', '=', 0)
            ->orderBy('id', 'DESC')
            ->limit(1)
            ->get();

        // check if row all empty
        if (!$row->all()) {
            return null;
        }

        return $this->constructFromRows($row->all())[0];
    }

    public function store(Shortener $shortener): bool
    {
        $row = DB::table('shorteners')->insert([
            'short_url' => $shortener->getShortUrl(),
            'long_url' => $shortener->getLongUrl(),
            'is_customized' => $shortener->getIsCustomized(),
            'visitor' => $shortener->getVisitor(),
            'user_id' => $shortener->getUserId()->toString(),
        ]);

        if (!$row) {
            return false;
        }
        return true;
    }

    public function constructFromRows(array $rows): array
    {
        $Shorteners = [];
        foreach ($rows as $row) {
            $Shorteners[] = new Shortener(
                $row->short_url,
                $row->long_url,
                $row->is_customized,
                new UserId($row->user_id),
                $row->visitor,
            );
        }
        return $Shorteners;
    }
}

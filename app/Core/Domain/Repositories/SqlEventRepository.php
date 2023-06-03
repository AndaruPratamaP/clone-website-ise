<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\Event\Event;
use Illuminate\Support\Facades\DB;

class SqlEventRepository
{
    public function getAll(): array
    {
        $rows = DB::table('Event')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?Event
    {
        $row = DB::table('Event')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $Events = [];
        foreach ($rows as $row) {
            $Events[] = new Event(
                $row->id,
            );
        }
        return $Events;
    }
}

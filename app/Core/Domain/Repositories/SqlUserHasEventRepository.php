<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\UserHasEvent\UserHasEvent;
use Illuminate\Support\Facades\DB;

class SqlUserHasEventRepository
{
    public function getAll(): array
    {
        $rows = DB::table('UserHasEvent')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?UserHasEvent
    {
        $row = DB::table('UserHasEvent')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $UserHasEvents = [];
        foreach ($rows as $row) {
            $UserHasEvents[] = new UserHasEvent(
                $row->id,
            );
        }
        return $UserHasEvents;
    }
}

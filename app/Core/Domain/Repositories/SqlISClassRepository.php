<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\ISClass\ISClass;
use Illuminate\Support\Facades\DB;

class SqlISClassRepository
{
    public function getAll(): array
    {
        $rows = DB::table('ISClass')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?ISClass
    {
        $row = DB::table('ISClass')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $ISClasss = [];
        foreach ($rows as $row) {
            $ISClasss[] = new ISClass(
                $row->id,
            );
        }
        return $ISClasss;
    }
}

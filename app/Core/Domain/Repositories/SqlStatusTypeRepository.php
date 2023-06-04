<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\StatusType\StatusType;
use Illuminate\Support\Facades\DB;

class SqlStatusTypeRepository
{
    public function getAll(): array
    {
        $rows = DB::table('StatusType')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?StatusType
    {
        $row = DB::table('StatusType')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $StatusTypes = [];
        foreach ($rows as $row) {
            $StatusTypes[] = new StatusType(
                $row->id,
            );
        }
        return $StatusTypes;
    }
}

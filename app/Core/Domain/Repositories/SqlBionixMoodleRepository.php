<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\BionixMoodle\BionixMoodle;
use Illuminate\Support\Facades\DB;

class SqlBionixMoodleRepository
{
    public function getAll(): array
    {
        $rows = DB::table('BionixMoodle')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?BionixMoodle
    {
        $row = DB::table('BionixMoodle')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $BionixMoodles = [];
        foreach ($rows as $row) {
            $BionixMoodles[] = new BionixMoodle(
                $row->id,
            );
        }
        return $BionixMoodles;
    }
}

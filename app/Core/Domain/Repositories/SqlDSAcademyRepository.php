<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\DSAcademy\DSAcademy;
use Illuminate\Support\Facades\DB;

class SqlDSAcademyRepository
{
    public function getAll(): array
    {
        $rows = DB::table('DSAcademy')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?DSAcademy
    {
        $row = DB::table('DSAcademy')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $DSAcademys = [];
        foreach ($rows as $row) {
            $DSAcademys[] = new DSAcademy(
                $row->id,
            );
        }
        return $DSAcademys;
    }
}

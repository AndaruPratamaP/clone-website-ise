<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\UXAcademy\UXAcademy;
use Illuminate\Support\Facades\DB;

class SqlUXAcademyRepository
{
    public function getAll(): array
    {
        $rows = DB::table('UXAcademy')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?UXAcademy
    {
        $row = DB::table('UXAcademy')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $UXAcademys = [];
        foreach ($rows as $row) {
            $UXAcademys[] = new UXAcademy(
                $row->id,
            );
        }
        return $UXAcademys;
    }
}

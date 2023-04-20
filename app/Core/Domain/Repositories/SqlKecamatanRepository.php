<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\Kecamatan\Kecamatan;
use Illuminate\Support\Facades\DB;

class SqlKecamatanRepository
{
    public function getAll(): array
    {
        $rows = DB::table('kecamatan')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?Kecamatan
    {
        $row = DB::table('kecamatan')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $Kecamatans = [];
        foreach ($rows as $row) {
            $Kecamatans[] = new Kecamatan(
                $row->id,
                $row->name,
                $row->kabupaten_id,
            );
        }
        return $Kecamatans;
    }
}

<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\Desa\Desa;
use Illuminate\Support\Facades\DB;

class SqlDesaRepository
{
    public function getAll(): array
    {
        $rows = DB::table('desa')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?Desa
    {
        $row = DB::table('desa')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $Desas = [];
        foreach ($rows as $row) {
            $Desas[] = new Desa(
                $row->id,
                $row->name,
                $row->kecamatan_id,
            );
        }
        return $Desas;
    }
}

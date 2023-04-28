<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\Verification\Verification;
use Illuminate\Support\Facades\DB;

class SqlVerificationRepository
{
    public function getAll(): array
    {
        $rows = DB::table('Verification')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?Verification
    {
        $row = DB::table('Verification')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $Verifications = [];
        foreach ($rows as $row) {
            $Verifications[] = new Verification(
                $row->id,
            );
        }
        return $Verifications;
    }
}

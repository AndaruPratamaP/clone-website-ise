<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\VerificationType\VerificationType;
use Illuminate\Support\Facades\DB;

class SqlVerificationTypeRepository
{
    public function getAll(): array
    {
        $rows = DB::table('verification_types')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?VerificationType
    {
        $row = DB::table('verification_types')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $VerificationTypes = [];
        foreach ($rows as $row) {
            $VerificationTypes[] = new VerificationType(
                $row->id,
                $row->name
            );
        }
        return $VerificationTypes;
    }
}

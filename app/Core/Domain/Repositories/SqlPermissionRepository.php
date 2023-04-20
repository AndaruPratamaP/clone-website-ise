<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\Permission\Permission;
use Illuminate\Support\Facades\DB;

class SqlPermissionRepository
{
    public function getAll(): array
    {
        $rows = DB::table('Permission')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?Permission
    {
        $row = DB::table('Permission')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $Permissions = [];
        foreach ($rows as $row) {
            $Permissions[] = new Permission(
                $row->id,
            );
        }
        return $Permissions;
    }
}

<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\RoleHasPermission\RoleHasPermission;
use Illuminate\Support\Facades\DB;

class SqlRoleHasPermissionRepository
{
    public function getAll(): array
    {
        $rows = DB::table('RoleHasPermission')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?RoleHasPermission
    {
        $row = DB::table('RoleHasPermission')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $RoleHasPermissions = [];
        foreach ($rows as $row) {
            $RoleHasPermissions[] = new RoleHasPermission(
                $row->id,
            );
        }
        return $RoleHasPermissions;
    }
}

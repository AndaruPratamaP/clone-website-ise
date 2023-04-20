<?php

namespace App\Core\Domain\Repositories;

use App\Core\Domain\Models\Facades\Role\Role;
use Illuminate\Support\Facades\DB;

class SqlRoleRepository
{
    public function getAll(): array
    {
        $rows = DB::table('Role')->get();

        if (!$rows) {
            return null;
        }

        return $this->constructFromRows($rows->all());
    }

    public function find(int $id): ?Role
    {
        $row = DB::table('Role')->where('id', $id)->first();

        if (!$row) {
            return null;
        }

        return $this->constructFromRows([$row])[0];
    }

    public function constructFromRows(array $rows): array
    {
        $Roles = [];
        foreach ($rows as $row) {
            $Roles[] = new Role(
                $row->id,
            );
        }
        return $Roles;
    }
}

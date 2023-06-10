<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $this->seedPermission();
        $this->seedRoleHasPermission();
    }

    public function seedPermission()
    {
        $json = file_get_contents(database_path('seeders/json/permissions.json'));
        $permissions = json_decode($json, true);
        if ($this->checkIfPermissionSeeded(count($permissions))) {
            return;
        }

        $payload = [];
        foreach ($permissions as $permission) {
            $payload[] = [
                'id' => $permission['id'],
                'route' => $permission['route'],
            ];
        }
        DB::table('permissions')->insert($payload);
    }

    public function seedRoleHasPermission()
    {
        $json = file_get_contents(database_path('seeders/json/role_has_permission.json'));
        $permissions = json_decode($json, true);
        if ($this->checkIfRoleHasPermissionSeeded(count($permissions))) {
            return;
        }

        $payload = [];
        foreach ($permissions as $permission) {
            $payload[] = [
                'role_id' => $permission['role_id'],
                'permission_id' => $permission['permission_id'],
            ];
        }
        DB::table('role_has_permission')->insert($payload);
    }

    public function checkIfPermissionSeeded(int $rows): bool
    {
        $table_rows = DB::table('permissions')->count();

        if ($table_rows === 0) {
            return false;
        } elseif ($table_rows !== $rows) {
            $this->wipePermission();
            return false;
        } else {
            return true;
        }
    }

    public function checkIfRoleHasPermissionSeeded(int $rows): bool
    {
        $table_rows = DB::table('role_has_permission')->count();

        if ($table_rows === 0) {
            return false;
        } elseif ($table_rows !== $rows) {
            $this->wipeRoleHasPermission();
            return false;
        } else {
            return true;
        }
    }

    public function wipeRoleHasPermission()
    {
        DB::table('role_has_permission')->truncate();
    }

    public function wipePermission()
    {
        DB::table('permissions')->truncate();
    }
}

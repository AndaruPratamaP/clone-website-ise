<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $this->checkIfSeeded();
        $this->seedPermission();
        $this->seedRoleHasPermission();
    }

    public function checkIfSeeded()
    {
        $permission = count(json_decode(file_get_contents(database_path('seeders/json/permissions.json')), true));
        $rolehaspermission = count(json_decode(file_get_contents(database_path('seeders/json/role_has_permission.json')), true));
        if($this->checkIfRoleHasPermissionSeeded($rolehaspermission) && $this->checkIfPermissionSeeded($permission)) 
        {
            return;
        }
    }

    public function seedPermission()
    {
        $json = file_get_contents(database_path('seeders/json/permissions.json'));
        $permissions = json_decode($json, true);

        $payload = [];
        foreach ($permissions as $permission) {
            $exists = DB::table('permissions')->where('id', $permission['id'])->first();
            if ($exists) {
                continue;
            }

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

        $payload = [];
        foreach ($permissions as $permission) {
            $exists = DB::table('role_has_permission')->where('role_id', $permission['role_id'])->first();
            if ($exists) {
                continue;
            }

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

        if ($table_rows < $rows) {
            return false;
        } else {
            return true;
        }
    }

    public function checkIfRoleHasPermissionSeeded(int $rows): bool
    {
        $table_rows = DB::table('role_has_permission')->count();

        if ($table_rows < $rows) {
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

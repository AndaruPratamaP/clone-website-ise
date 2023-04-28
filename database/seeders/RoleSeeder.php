<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(database_path('seeders/json/roles.json'));
        $roles = json_decode($json, true);

        if ($this->checkIfSeeded(count($roles))) {
            return;
        }

        $payload = [];
        foreach ($roles as $role) {
            $payload[] = [
                'id' => $role['id'],
                'name' => $role['name']
            ];
        }
        DB::table('roles')->insert($payload);
    }

    public function checkIfSeeded(int $rows): bool
    {
        $table_rows = DB::table('roles')->count();

        if ($table_rows === 0) {
            return false;
        } elseif ($table_rows !== $rows) {
            $this->wipe();
            return false;
        } else {
            return true;
        }
    }

    public function wipe()
    {
        DB::table('roles')->truncate();
    }
}

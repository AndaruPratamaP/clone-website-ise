<?php

namespace Database\Seeders;

use App\Core\Domain\Models\Eloquents\Role\Role;
use App\Core\Domain\Models\Eloquents\User\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RandomUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_id = $this->getRoles();

        if ($this->checkIfSeeded(count($roles_id))) {
            return;
        }

        foreach ($roles_id as $role_id) {
            User::factory()->role($role_id)->create();
        }
    }

    private function getRoles(): array
    {
        $roles = Role::all();
        $roles_id = [];
        foreach ($roles as $role) {
            $roles_id[] = $role->id;
        }
        return $roles_id;
    }

    public function checkIfSeeded(int $rows): bool
    {
        $table_rows = DB::table('users')->count();

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
        DB::table('users')->truncate();
    }
}

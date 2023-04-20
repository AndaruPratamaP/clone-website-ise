<?php

namespace Database\Seeders;

use App\Core\Domain\Models\Eloquents\Role\Role;
use App\Core\Domain\Models\Eloquents\User\User;
use Illuminate\Database\Seeder;

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
}

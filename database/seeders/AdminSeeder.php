<?php

namespace Database\Seeders;

use App\Core\Application\Services\Hash\HashService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $json = file_get_contents(database_path('seeders/json/admins.json'));
        $admins = json_decode($json, true);
        if ($this->checkIfSeeded($admins)) {
            return;
        }

        $password = [
            HashService::argon(env("bph_PASSWORD", "12345678"), 'argon2i'),
            HashService::argon(env("icon_PASSWORD", "12345678"), 'argon2i'),
            HashService::argon(env("bionix_PASSWORD", "12345678"), 'argon2i'),
            HashService::argon(env("rise_PASSWORD", "12345678"), 'argon2i'),
            HashService::argon(env("admin_PASSWORD", "12345678"), 'argon2i'),
            HashService::argon(env("technical_PASSWORD", "12345678"), 'argon2i'),
            HashService::argon(env("paradigm_PASSWORD", "12345678"), 'argon2i'),
            HashService::argon(env("itdev_PASSWORD", "12345678"), 'argon2i'),
            HashService::argon(env("finance_PASSWORD", "12345678"), 'argon2i'),
            HashService::argon(env("pr_PASSWORD", "12345678"), 'argon2i'),
            HashService::argon(env("marketing_PASSWORD", "12345678"), 'argon2i'),
            HashService::argon(env("creative_PASSWORD", "12345678"), 'argon2i'),
        ];

        $payload = [];
        $count = 0;
        foreach ($admins as $admin) {
            $payload[] = [
                'id' => $admin['id'],
                'full_name' => $admin['full_name'],
                'email' => $admin['email'],
                'password' => $password[$count++],
                'handphone' => $admin['handphone'],
                'institution' => $admin['institution'],
                'referral' => $admin['referral'],
                'verified_at' => $admin['verified_at'],
                'provinsi_id' => $admin['provinsi_id'],
                'role_id' => $admin['role_id']
            ];
        }
        DB::table('users')->insert($payload);
    }

    public function checkIfSeeded(array $id): bool
    {
        $seeded = true;

        for ($i = 0; $i < count($id); $i++) {
            $table_rows = DB::table('users')->where('id', $id[$i]['id'])->count();
            if ($table_rows === 0) {
                $seeded = false;
                break;
            }
        }

        return $seeded;
    }
}

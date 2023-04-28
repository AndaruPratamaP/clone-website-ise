<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VerificationType extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(database_path('seeders/json/verification_types.json'));
        $types = json_decode($json, true);

        if ($this->checkIfSeeded(count($types))) {
            return;
        }

        $payload = [];
        foreach ($types as $type) {
            $payload[] = [
                'id' => $type['id'],
                'name' => $type['name']
            ];
        }
        DB::table('verification_types')->insert($payload);
    }

    public function checkIfSeeded(int $rows): bool
    {
        $table_rows = DB::table('verification_types')->count();

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
        DB::table('verification_types')->truncate();
    }
}

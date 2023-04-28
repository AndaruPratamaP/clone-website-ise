<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(database_path('seeders/json/provinsi.json'));
        $provinces = json_decode($json, true);

        if ($this->checkIfSeeded(count($provinces))) {
            return;
        }

        $payload = [];
        foreach ($provinces as $province) {
            $payload[] = [
                'id' => $province['id'],
                'name' => $province['name']
            ];
        }
        DB::table('provinsi')->insert($payload);
    }

    public function checkIfSeeded(int $rows): bool
    {
        $table_rows = DB::table('provinsi')->count();

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
        DB::table('provinsi')->truncate();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(database_path('seeders/json/kecamatan.json'));
        $kecamatans = json_decode($json, true);

        if ($this->checkIfSeeded(count($kecamatans))) {
            return;
        }

        $payload = [];
        foreach ($kecamatans as $kecamatan) {
            $payload[] = [
                'id' => $kecamatan['id'],
                'kabupaten_id' => $kecamatan['kabupaten_id'],
                'name' => $kecamatan['name']
            ];
        }
        DB::table('kecamatan')->insert($payload);
    }

    public function checkIfSeeded(int $rows): bool
    {
        $table_rows = DB::table('kecamatan')->count();

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
        DB::table('kecamatan')->truncate();
    }
}

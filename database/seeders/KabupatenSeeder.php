<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(database_path('seeders/json/kabupaten.json'));
        $kabupatens = json_decode($json, true);

        if ($this->checkIfSeeded(count($kabupatens))) {
            return;
        }

        $payload = [];
        foreach ($kabupatens as $kabupaten) {
            $payload[] = [
                'id' => $kabupaten['id'],
                'provinsi_id' => $kabupaten['provinsi_id'],
                'name' => $kabupaten['name']
            ];
        }
        DB::table('kabupaten')->insert($payload);
    }

    public function checkIfSeeded(int $rows): bool
    {
        $table_rows = DB::table('kabupaten')->count();

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
        DB::table('kabupaten')->truncate();
    }
}

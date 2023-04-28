<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(database_path('seeders/json/desa.json'));
        $big_desas = json_decode($json, true);
        if ($this->checkIfSeeded(count($big_desas))) {
            return;
        }

        foreach (array_chunk($big_desas, 1000) as $key => $desas) {
            // foreach ($smallerArray as $index => $value) {
            //         $temp[$index] = $value;
            // }
            // DB::table('table_name')->insert(temp);
            $payload = [];
            foreach ($desas as $desa) {
                $payload[] = [
                    'id' => $desa['id'],
                    'kecamatan_id' => $desa['kecamatan_id'],
                    'name' => $desa['name']
                ];
            }
            DB::table('desa')->insert($payload);
        }
    }

    public function checkIfSeeded(int $rows): bool
    {
        $table_rows = DB::table('desa')->count();

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
        DB::table('desa')->truncate();
    }
}

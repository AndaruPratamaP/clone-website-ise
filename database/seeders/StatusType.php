<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusType extends Seeder
{
    public function run()
    {
        $json = file_get_contents(database_path('seeders/json/status_types.json'));
        $status_types = json_decode($json, true);
        if ($this->checkIfSeeded(count($status_types))) {
            return;
        }

        $payload = [];
        foreach ($status_types as $status_type) {
            $exists = DB::table('status_types')->where('id', $status_type['id'])->first();
            if ($exists) {
                continue;
            }

            $payload[] = [
                'id' => $status_type['id'],
                'name' => $status_type['name']
            ];
        }
        DB::table('status_types')->insert($payload);
    }

    public function checkIfSeeded(int $rows): bool
    {
        $table_rows = DB::table('status_types')->count();

        if ($table_rows < $rows) {
            return false;
        } else {
            return true;
        }
    }

    public function wipe()
    {
        DB::table('status_types')->truncate();
    }
}

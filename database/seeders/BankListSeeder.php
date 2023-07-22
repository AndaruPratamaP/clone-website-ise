<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankListSeeder extends Seeder
{
    public function run()
    {
        $json = file_get_contents(database_path('seeders/json/bank_lists.json'));
        $bank_lists = json_decode($json, true);
        if ($this->checkIfSeeded(count($bank_lists))) {
            return;
        }

        $payload = [];
        foreach ($bank_lists as $bank_list) {
            $exists = DB::table('bank_list')->where('id', $bank_list['id'])->first();
            if ($exists) {
                continue;
            }

            $payload[] = [
                'id' => $bank_list['id'],
                'name' => $bank_list['name'],
                'account_number' => $bank_list['account_number']
            ];
        }
        DB::table('bank_list')->insert($payload);
    }

    public function checkIfSeeded(int $rows): bool
    {
        $table_rows = DB::table('bank_list')->count();

        if ($table_rows < $rows) {
            return false;
        } else {
            return true;
        }
    }

    public function wipe()
    {
        DB::table('bank_list')->truncate();
    }
}

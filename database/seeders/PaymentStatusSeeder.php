<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentStatusSeeder extends Seeder
{
    public function run()
    {
        $json = file_get_contents(database_path('seeders/json/payment_status.json'));
        $payment_status = json_decode($json, true);
        if ($this->checkIfSeeded(count($payment_status))) {
            return;
        }

        $payload = [];
        foreach ($payment_status as $payment) {
            $exists = DB::table('payment_status')->where('id', $payment['id'])->first();
            if ($exists) {
                continue;
            }

            $payload[] = [
                'id' => $payment['id'],
                'name' => $payment['name']
            ];
        }
        DB::table('payment_status')->insert($payload);
    }

    public function checkIfSeeded(int $rows): bool
    {
        $table_rows = DB::table('payment_status')->count();

        if ($table_rows < $rows) {
            return false;
        } else {
            return true;
        }
    }

    public function wipe()
    {
        DB::table('payment_status')->truncate();
    }
}

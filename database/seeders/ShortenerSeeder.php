<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShortenerSeeder extends Seeder
{
    public function run()
    {
        $json = file_get_contents(database_path('seeders/json/shorteners.json'));
        $shorteners = json_decode($json, true);
        if ($this->checkIfSeeded($shorteners)) {
            return;
        }

        $payload = [];
        $count = 0;
        foreach ($shorteners as $shortener) {
            $payload[] = [
                'id' => $shortener['id'],
                'user_id' => $shortener['user_id'],
                'short_url' => $shortener['short_url'],
                'long_url' => $shortener['long_url'],
                'is_customized' => $shortener['is_customized'],
                'visitor' => $shortener['visitor'],
            ];
        }
        DB::table('shorteners')->insert($payload);
    }

    public function checkIfSeeded(array $id): bool
    {
        $seeded = true;

        for ($i = 0; $i < count($id); $i++) {
            $table_rows = DB::table('shorteners')->where('id', $id[$i]['id'])->count();
            if ($table_rows === 0) {
                $seeded = false;
                break;
            }
        }

        return $seeded;
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    public function run()
    {
        $json = file_get_contents(database_path('seeders/json/events.json'));
        $events = json_decode($json, true);
        if ($this->checkIfSeeded(count($events))) {
            return;
        }

        $payload = [];
        foreach ($events as $event) {
            $payload[] = [
                'id' => $event['id'],
                'name' => $event['name'],
                'description' => $event['description'],
                'quota' => $event['quota'],
                'start_date' => $event['start_date'],
                'end_date' => $event['end_date']
            ];
        }
        DB::table('events')->insert($payload);
    }

    public function checkIfSeeded(int $rows): bool
    {
        $table_rows = DB::table('events')->count();

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
        DB::table('events')->truncate();
    }
}

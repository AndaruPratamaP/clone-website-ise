<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $seeders = [
        'local' => [
            ProvinsiSeeder::class,
            KabupatenSeeder::class,
            KecamatanSeeder::class,
            DesaSeeder::class,
            RoleSeeder::class,
            RandomUserSeeder::class,
            VerificationType::class,
            EventSeeder::class,
            StatusType::class
        ],
        'production' => [
            ProvinsiSeeder::class,
            KabupatenSeeder::class,
            KecamatanSeeder::class,
            DesaSeeder::class,
            RoleSeeder::class,
            VerificationType::class,
            EventSeeder::class,
            StatusType::class
        ],
    ];
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (!array_key_exists(app()->environment(), $this->seeders)) {
            return;
        }
        $this->call($this->seeders[app()->environment()]);
    }
}

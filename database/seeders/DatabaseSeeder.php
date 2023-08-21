<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EstadosSeeder::class,
            BrothersSeeder::class,
            FatinhaSeeder::class,
            CorujaoSeeder::class,
            BrazPizzaSeeder::class,
            NoCaprichoSeeder::class,
            UserSeeder::class,
            StatusSeeder::class
        ]);
    }
}

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
            VillasSeeder::class,
            FatinhaSeeder::class,
            CorujaoSeeder::class,
            BrazPizzaSeeder::class,
            NoCaprichoSeeder::class,
            LucigasSeeder::class,
            CasadopastelSeeder::class,
            UserSeeder::class,
            StatusSeeder::class
        ]);
    }
}

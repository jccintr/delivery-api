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
            // rodar esses seeder apenas uma vez
            EstadosSeeder::class,
            UserSeeder::class,
            StatusSeeder::class,

            // lojas exemplo
            NoCaprichoSeeder::class,
            LucigasSeeder::class,
            CasadopastelSeeder::class
            //PizzamasterSeeder::class
            //fim lojas exemplo

            // BrothersSeeder::class,
            // VillasSeeder::class,
            // FatinhaSeeder::class,
            // CorujaoSeeder::class,
            // BrazPizzaSeeder::class,
            // MercadinhoPopularSeeder::class,
            
            
        ]);
    }
}

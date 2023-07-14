<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $idTenant = DB::table('users')->insertGetid([
            'name' => "Julio Cesar",
            'email' => "jccintr@gmail.com",
            'password' => Hash::make('zodiac'),
            'role' => 3
            //'logotipo' => 'imagens/logos/brothers.jpeg'
        ]);

         
    }
}

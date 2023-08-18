<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NoCaprichoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $slug = 'nocapricholanches';
            $idTenant = DB::table('users')->insertGetid([
                'name' => "No Capricho Lanches",
                'email' => "nocapricho@gmail.com",
                'password' => Hash::make('123'),
                'role' => 2,
                'telefone' => '35-99912-2008',
                'logradouro' =>'Av. Cel. Francisco Braz,372',
                'bairro' => 'Centro',
                'cidade_id' => 1,
                'cor_fundo' => '#000000',
                'cor_texto' => '#ffdc14',
                'tempo_espera' => '15 a 30min',
                'slug' => $slug,
                'logotipo' => 'imagens/'.$slug.'/logo/nocapricholanches.png'
            ]);
    }
}

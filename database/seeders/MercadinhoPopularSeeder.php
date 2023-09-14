<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MercadinhoPopularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = 'mercadinhopopular';
            $idTenant = DB::table('users')->insertGetid([
                'name' => "Mercadinho Popular",
                'email' => "merc.saojudastadeu@hotmail.com",
                'password' => Hash::make('delivroo123'),
                'role' => 2,
                'telefone' => '35-99866-1342',
                'logradouro' =>'Av. Tancredo Neves',
                'bairro' => 'Alto da Glória',
                'cidade_id' => 1,
                'cor_fundo' => '#ee1d23',
                'cor_texto' => '#ffffff',
                'chave_pix' => '',
                'favorecido_pix' => '',
                'tempo_espera' => '15 a 30min',
                'slug' => $slug,
                'logotipo' => 'imagens/'.$slug.'/logo/mercadinho-popular.png'
            ]);

                // taxas
                DB::table('taxas')->insert([
                    'user_id' => $idTenant,
                    'bairro' => 'Centro',
                    'valor' => 3.00
                ]);
                DB::table('taxas')->insert([
                    'user_id' => $idTenant,
                    'bairro' => 'Horizonte Azul',
                    'valor' => 3.00
                ]);
                DB::table('taxas')->insert([
                    'user_id' => $idTenant,
                    'bairro' => 'Frei Orestes',
                    'valor' => 3.00
                ]);
                DB::table('taxas')->insert([
                    'user_id' => $idTenant,
                    'bairro' => 'São Francisco',
                    'valor' => 3.00
                ]);
                // pagamentos
                DB::table('pagamentos')->insert([
                    'user_id' => $idTenant,
                    'nome' => 'Dinheiro'
                ]);
                DB::table('pagamentos')->insert([
                    'user_id' => $idTenant,
                    'nome' => 'Cartão de Débito'
                ]);
                DB::table('pagamentos')->insert([
                    'user_id' => $idTenant,
                    'nome' => 'Cartão de Crédito'
                ]);
                DB::table('pagamentos')->insert([
                    'user_id' => $idTenant,
                    'nome' => 'Pix'
                ]);
                // horarios
                DB::table('horarios')->insert([
                    'user_id' => $idTenant,
                    'dia' => 0,
                    'horario' => '19h as 23h'
                ]);
                DB::table('horarios')->insert([
                    'user_id' => $idTenant,
                    'dia' => 1,
                    'horario' => '19h as 23h'
                ]);
                DB::table('horarios')->insert([
                    'user_id' => $idTenant,
                    'dia' => 2,
                    'horario' => '19h as 23h'
                ]);
                DB::table('horarios')->insert([
                    'user_id' => $idTenant,
                    'dia' => 3,
                    'horario' => '19h as 23h'
                ]);
                DB::table('horarios')->insert([
                    'user_id' => $idTenant,
                    'dia' => 4,
                    'horario' => '19h as 23h'
                ]);
                DB::table('horarios')->insert([
                    'user_id' => $idTenant,
                    'dia' => 5,
                    'horario' => '19h as 23h'
                ]);
                DB::table('horarios')->insert([
                    'user_id' => $idTenant,
                    'dia' => 6,
                    'horario' => '19h as 23h'
                ]);
    }
}

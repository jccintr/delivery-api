<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SakuraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = 'sakura';
        $idTenant = DB::table('users')->insertGetid([
        'name' => "Sakura Sushi Express",
        'email' => "sakura@gmail.com",
        'password' => Hash::make('delivroo123'),
        'role' => 2,
        'telefone' => '35-98423-1236',
        'logradouro' =>'Praça do Mercado, 22',
        'bairro' => 'Centro',
        'cidade_id' => 1,
        //'chave_pix' => 'jccintr@gmail.com',
        //'favorecido_pix' => 'Julio Cesar',
        'cor_fundo' => '#23211f',
        'cor_texto' => '#ffffff',
        'tempo_espera' => '15 a 30min',
        'slug' => $slug,
        'aberto' => true,
        'logotipo' => 'imagens/'.$slug.'/logo/sakura-logo.png'
     ]);
     // Mensagens
    DB::table('mensagens')->insert([
        'user_id' => $idTenant
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Alto da Glória',
        'valor' => 3.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Aparecida',
        'valor' => 3.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Can-Can',
        'valor' => 5.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Centro',
        'valor' => 3.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Estação',
        'valor' => 3.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Estação Dias',
        'valor' => 10.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Frei Orestes',
        'valor' => 5.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Horizonte Azul',
        'valor' => 3.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'N. S. Aparecida',
        'valor' => 3.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'São Francisco',
        'valor' => 3.00
    ]);
    
    //fim das taxas
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
     // Obrigatorios
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class CasadopastelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = 'casadopastel';
            $idTenant = DB::table('users')->insertGetid([
                'name' => "Casa do Pastel",
                'email' => "casadopastel@gmail.com",
                'password' => Hash::make('123'),
                'role' => 2,
                'telefone' => '35-99912-2008',
                'logradouro' =>'Av. Cel. Francisco Braz,372',
                'bairro' => 'Centro',
                'cidade_id' => 1,
                'cor_fundo' => '#fdb813',
                'cor_texto' => '#000000',
                'chave_pix' => 'jccintr@gmail.com',
                'favorecido_pix' => 'Julio Cesar de Oliveira',
                'tempo_espera' => '10 a 15min',
                'slug' => $slug,
                'logotipo' => 'imagens/'.$slug.'/logo/casadopastel.png'
            ]);
             // taxas
             DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Centro',
                'valor' => 2.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Horizonte Azul',
                'valor' => 2.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Frei Orestes',
                'valor' => 2.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'São Francisco',
                'valor' => 2.00
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
                'horario' => 'Fechado'
            ]);
            DB::table('horarios')->insert([
                'user_id' => $idTenant,
                'dia' => 1,
                'horario' => '8h as 18h'
            ]);
            DB::table('horarios')->insert([
                'user_id' => $idTenant,
                'dia' => 2,
                'horario' => '8h as 18h'
            ]);
            DB::table('horarios')->insert([
                'user_id' => $idTenant,
                'dia' => 3,
                'horario' => '8h as 18h'
            ]);
            DB::table('horarios')->insert([
                'user_id' => $idTenant,
                'dia' => 4,
                'horario' => '8h as 18h'
            ]);
            DB::table('horarios')->insert([
                'user_id' => $idTenant,
                'dia' => 5,
                'horario' => '8h as 18h'
            ]);
            DB::table('horarios')->insert([
                'user_id' => $idTenant,
                'dia' => 6,
                'horario' => '8h as 18h'
            ]);
            $idCategoria = DB::table('categorias')->insertGetid([
                'nome' => "Pastéis",
                'user_id' => $idTenant
            ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Pastél de Carne",
                    'descricao' => 'Pastél de carne com batata.',
                    'preco' => 6.00,
                    'ativo' => true,
                    'imagem' => 'imagens/'.$slug.'/produtos/pastel-carne.png'
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Pastél de Queijo",
                    'descricao' => 'Pastél de queijo mineiro e orégano.',
                    'preco' => 5.00,
                    'ativo' => true,
                    'imagem' => 'imagens/'.$slug.'/produtos/pastel-queijo.png'
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Pastél de Pizza",
                    'descricao' => 'Pastél de queijo mussarela, presunto e tomate.',
                    'preco' => 8.00,
                    'ativo' => true,
                    'imagem' => 'imagens/'.$slug.'/produtos/pastel-pizza.png'
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Pastél de Calabresa",
                    'descricao' => 'Pastél de Calabresa com queijo',
                    'preco' => 6.00,
                    'ativo' => true,
                    'imagem' => 'imagens/'.$slug.'/produtos/pastel-calabresa.png'
                ]);

                $idCategoria = DB::table('categorias')->insertGetid([
                    'nome' => "Bebidas",
                    'user_id' => $idTenant
                ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Coca-cola lata",
                        'descricao' => 'Refrigerante Coca-cola lata 350ml.',
                        'preco' => 5.00,
                        'ativo' => true,
                        'imagem' => 'imagens/'.$slug.'/produtos/coca-cola-lata.jpg'
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Coca-cola 600ml",
                        'descricao' => 'Refrigerante Coca-cola 600ml.',
                        'preco' => 8.00,
                        'ativo' => true,
                        'imagem' => 'imagens/'.$slug.'/produtos/coca-cola-600.png'
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Coca-cola 2 Litros",
                        'descricao' => 'Refrigerante Coca-cola 2 litros.',
                        'preco' => 8.00,
                        'ativo' => true,
                        'imagem' => 'imagens/'.$slug.'/produtos/coca-cola-2litros.jpg'
                    ]);
    }
}

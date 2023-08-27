<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LucigasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = 'lucigas';
            $idTenant = DB::table('users')->insertGetid([
                'name' => "Luci Gás e Água",
                'email' => "lucigas@gmail.com",
                'password' => Hash::make('123'),
                'role' => 2,
                'telefone' => '35-99912-2008',
                'logradouro' =>'Av. Cel. Francisco Braz,372',
                'bairro' => 'Centro',
                'cidade_id' => 1,
                'cor_fundo' => '#0099dd',
                'cor_texto' => '#ffffff',
                'chave_pix' => 'jccintr@gmail.com',
                'favorecido_pix' => 'Julio Cesar de Oliveira',
                'tempo_espera' => '15min',
                'slug' => $slug,
                'logotipo' => 'imagens/'.$slug.'/logo/lucigas.png'
            ]);
             // taxas
             DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Centro',
                'valor' => 1.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Horizonte Azul',
                'valor' => 1.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Frei Orestes',
                'valor' => 1.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'São Francisco',
                'valor' => 1.00
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
                'horario' => '9h as 13h'
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
                'nome' => "Gás",
                'user_id' => $idTenant
            ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Botijão Supergasbras 13kg",
                    'descricao' => 'Botijão de GLP Supergasbras 13kg',
                    'preco' => 89.90,
                    'ativo' => true,
                    'imagem' => 'imagens/'.$slug.'/produtos/gas13.png'
                ]);
            $idCategoria = DB::table('categorias')->insertGetid([
                'nome' => "Água Mineral",
                'user_id' => $idTenant
            ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Lindoya 20L",
                    'descricao' => 'Água mineral Lindoya galão 20L',
                    'preco' => 9.90,
                    'ativo' => true,
                    'imagem' => 'imagens/'.$slug.'/produtos/lindoya20.png'
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Minalba 10L",
                    'descricao' => 'Água mineral Minalba galão 10L',
                    'preco' => 8.90,
                    'ativo' => true,
                    'imagem' => 'imagens/'.$slug.'/produtos/minalba10.png'
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Minalba 5L",
                    'descricao' => 'Água mineral Minalba galão 5L',
                    'preco' => 5.90,
                    'ativo' => true,
                    'imagem' => 'imagens/'.$slug.'/produtos/minalba5.png'
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Passa Quatro Gasosa 2L",
                    'descricao' => 'Água mineral Passa Quatro Gasosa 2L',
                    'preco' => 3.00,
                    'ativo' => true,
                    'imagem' => 'imagens/'.$slug.'/produtos/p4gas2.png'
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Passa Quatro Gasosa 510ml",
                    'descricao' => 'Água mineral Passa Quatro Gasosa 12x510ml',
                    'preco' => 3.00,
                    'ativo' => true,
                    'imagem' => 'imagens/'.$slug.'/produtos/p4gas510.png'
                ]);

    }
}

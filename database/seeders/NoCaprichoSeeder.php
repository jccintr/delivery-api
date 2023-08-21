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
                'chave_pix' => 'jccintr@gmail.com',
                'favorecido_pix' => 'Julio Cesar de Oliveira',
                'tempo_espera' => '15 a 30min',
                'slug' => $slug,
                'logotipo' => 'imagens/'.$slug.'/logo/nocapricholanches.png'
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
                // Obrigatorios
                $carne = DB::table('obrigatorios')->insertGetid([
                    'user_id' => $idTenant,
                    'nome' => 'Ponto da Carne',
                    'opcoes' => 'Mal Passada;Bem Passada;Ao Ponto'
                ]);
                $sabor_esfiha = DB::table('obrigatorios')->insertGetid([
                    'user_id' => $idTenant,
                    'nome' => 'Sabor da Esfiha',
                    'opcoes' => 'Carne;Queijo;Calabresa'
                ]);
                 // adicionais
                $ovo = DB::table('adicionais')->insertGetid([
                    'user_id' => $idTenant,
                    'nome' => 'Ovo',
                    'valor' => 2.00
                ]);
                $hamburguer = DB::table('adicionais')->insertGetid([
                    'user_id' => $idTenant,
                    'nome' => 'Hambúrguer',
                    'valor' => 2.00
                ]);
                // categorias
                $idCategoria = DB::table('categorias')->insertGetid([
                    'nome' => "Lanches",
                    'user_id' => $idTenant
                ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Cheese Bacon",
                        'descricao' => 'Pão brioche, hambúrguer, queijo, bacon, alface, tomate e molho especial.',
                        'preco' => 15.00,
                        'ativo' => true,
                        'imagem' => 'imagens/'.$slug.'/produtos/xbacon.png'
                    ]);
                        // ProdutoObrigatorios
                        DB::table('produto_obrigatorios')->insert([
                            'produto_id' => $produto,
                            'obrigatorio_id' => $carne
                        ]);
                         // ProdutoAdicional
                         DB::table('produto_adicionais')->insert([
                            'produto_id' => $produto,
                            'adicional_id' => $hamburguer
                        ]);
                         // ProdutoAdicional
                         DB::table('produto_adicionais')->insert([
                            'produto_id' => $produto,
                            'adicional_id' => $ovo
                        ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Cheese Salada",
                        'descricao' => 'Pão brioche, hambúrguer, queijo, alface, tomate e molho especial.',
                        'preco' => 15.00,
                        'ativo' => true,
                        'imagem' => 'imagens/'.$slug.'/produtos/xsalada.png'
                    ]);
                        // ProdutoObrigatorios
                        DB::table('produto_obrigatorios')->insert([
                            'produto_id' => $produto,
                            'obrigatorio_id' => $carne
                        ]);
                        // ProdutoAdicional
                        DB::table('produto_adicionais')->insert([
                            'produto_id' => $produto,
                            'adicional_id' => $hamburguer
                        ]);
                        // ProdutoAdicional
                        DB::table('produto_adicionais')->insert([
                            'produto_id' => $produto,
                            'adicional_id' => $ovo
                        ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Triplo Burger",
                        'descricao' => 'Pão brioche, 3 hambúrgueres, queijo, alface, tomate e molho especial.',
                        'preco' => 20.00,
                        'ativo' => true,
                        'imagem' => 'imagens/'.$slug.'/produtos/triplo.png'
                    ]);
                        // ProdutoObrigatorios
                        DB::table('produto_obrigatorios')->insert([
                            'produto_id' => $produto,
                            'obrigatorio_id' => $carne
                        ]);
                        // ProdutoAdicional
                        DB::table('produto_adicionais')->insert([
                            'produto_id' => $produto,
                            'adicional_id' => $hamburguer
                        ]);
                        // ProdutoAdicional
                        DB::table('produto_adicionais')->insert([
                            'produto_id' => $produto,
                            'adicional_id' => $ovo
                        ]);
                $idCategoria = DB::table('categorias')->insertGetid([
                    'nome' => "Hot Dogs",
                    'user_id' => $idTenant
                ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Hot Dog Simples",
                        'descricao' => 'Pão, salsicha, catchup e mostarda.',
                        'preco' => 5.00,
                        'ativo' => true,
                        'imagem' => 'imagens/'.$slug.'/produtos/hotdog.png'
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Hot Dog Especial",
                        'descricao' => 'Pão, purê de batata, molho, salsicha, batata-palha, catchup e mostarda.',
                        'preco' => 8.00,
                        'ativo' => true,
                        'imagem' => 'imagens/'.$slug.'/produtos/hotdogespecial.png'
                    ]);
                $idCategoria = DB::table('categorias')->insertGetid([
                    'nome' => "Esfihas Abertas",
                    'user_id' => $idTenant
                ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Esfihas Abertas",
                        'descricao' => 'Esfihas abertas diversos sabores.',
                        'preco' => 5.00,
                        'ativo' => true,
                        'imagem' => 'imagens/'.$slug.'/produtos/esfihaaberta.jpg'
                    ]);
                        // ProdutoObrigatorios
                        DB::table('produto_obrigatorios')->insert([
                            'produto_id' => $produto,
                            'obrigatorio_id' => $sabor_esfiha
                        ]);
                $idCategoria = DB::table('categorias')->insertGetid([
                    'nome' => "Pizzas",
                    'user_id' => $idTenant
                ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Calabresa",
                        'descricao' => 'Molho, queijo, calabresa e cebola',
                        'preco' => 35.00,
                        'ativo' => true,
                        'imagem' => 'imagens/'.$slug.'/produtos/pizza-calabresa.jpeg'
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Peperoni",
                        'descricao' => 'Molho, queijo, peperoni e cebola',
                        'preco' => 35.00,
                        'ativo' => true,
                        'imagem' => 'imagens/'.$slug.'/produtos/pizza-peperoni.jpeg'
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Napolitana",
                        'descricao' => 'Molho, queijo, tomate e azeitona',
                        'preco' => 35.00,
                        'ativo' => true,
                        'imagem' => 'imagens/'.$slug.'/produtos/pizza-napolitana.jpeg'
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
                $idCategoria = DB::table('categorias')->insertGetid([
                    'nome' => "Sobremesas",
                    'user_id' => $idTenant
                ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pudim Chocolate",
                        'descricao' => 'Pudim de Chocolate com granulado.',
                        'preco' => 10.00,
                        'ativo' => true,
                        'imagem' => 'imagens/'.$slug.'/produtos/pudim-chocolate.jpg'
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pudim Leite Condensado",
                        'descricao' => 'Pudim de Leite Condensado com calda.',
                        'preco' => 10.00,
                        'ativo' => true,
                        'imagem' => 'imagens/'.$slug.'/produtos/pudim-leite.jpeg'
                    ]);

        
    }
}

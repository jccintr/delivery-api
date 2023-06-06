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
            'name' => "Brothers Burger",
            'email' => "brothers@gmail.com",
            'password' => Hash::make('123'),
            'logotipo' => 'imagens/logos/brothers.jpeg'
        ]);

                DB::table('taxas')->insert([
                    'user_id' => $idTenant,
                    'bairro' => 'Centro',
                    'valor' => 3.00
                ]);
                DB::table('taxas')->insert([
                    'user_id' => $idTenant,
                    'bairro' => 'Alto da Glória',
                    'valor' => 3.50
                ]);
                DB::table('taxas')->insert([
                    'user_id' => $idTenant,
                    'bairro' => 'Horizonte Azul',
                    'valor' => 4.00
                ]);
                DB::table('taxas')->insert([
                    'user_id' => $idTenant,
                    'bairro' => 'Frei Orestes',
                    'valor' => 5.00
                ]);
                DB::table('taxas')->insert([
                    'user_id' => $idTenant,
                    'bairro' => 'São Francisco',
                    'valor' => 5.00
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
                DB::table('pagamentos')->insert([
                    'user_id' => $idTenant,
                    'nome' => 'PicPay'
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
                    'horario' => 'Fechado'
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
                $molho = DB::table('obrigatorios')->insertGetid([
                    'user_id' => $idTenant,
                    'nome' => 'Molho',
                    'opcoes' => 'Molho de Ervas;Molho Defumado;Molho Especial;Molho Barbacue;Sem Molho'
                ]);
                $carne = DB::table('obrigatorios')->insertGetid([
                    'user_id' => $idTenant,
                    'nome' => 'Carne',
                    'opcoes' => 'Bem passada;Mal passada;Ao ponto'
                ]);
                // categorias
                $idCategoria = DB::table('categorias')->insertGetid([
                    'nome' => "Burgers Artesanais",
                    'user_id' => $idTenant
                ]);
                        $produto = DB::table('produtos')->insertGetid([
                            'user_id' => $idTenant,
                            'categoria_id' => $idCategoria,
                            'nome' => "Burger",
                            'descricao' => 'Pão brioche, hambúrguer 180g, queijo prato e molho.',
                            'preco' => 15.99,
                            'ativo' => true,
                            'imagem' => 'imagens/1/produtos/burguer.jpeg'
                        ]);
                        // ProdutoObrigatorios
                        DB::table('produto_obrigatorios')->insert([
                            'produto_id' => $produto,
                            'obrigatorio_id' => $molho
                        ]);
                        DB::table('produto_obrigatorios')->insert([
                            'produto_id' => $produto,
                            'obrigatorio_id' => $carne
                        ]);
                        $produto = DB::table('produtos')->insertGetid([
                            'user_id' => $idTenant,
                            'categoria_id' => $idCategoria,
                            'nome' => "Salada",
                            'descricao' => 'Pão brioche, hambúrguer 180g, queijo prato, alface, tomate, cebola roxa e molho.',
                            'preco' => 16.99,
                            'ativo' => true,
                            'imagem' => 'imagens/1/produtos/salada.jpeg'
                        ]);
                        // ProdutoObrigatorios
                        DB::table('produto_obrigatorios')->insert([
                            'produto_id' => $produto,
                            'obrigatorio_id' => $molho
                        ]);
                        DB::table('produtos')->insert([
                            'user_id' => $idTenant,
                            'categoria_id' => $idCategoria,
                            'nome' => "Cheddar",
                            'descricao' => 'Pão brioche, hambúrguer 180g, cheddar, cebola caramelizada e molho.',
                            'preco' => 17.99,
                            'ativo' => true,
                            'imagem' => 'imagens/1/produtos/cheddar.jpeg'
                        ]);
                        DB::table('produtos')->insert([
                            'user_id' => $idTenant,
                            'categoria_id' => $idCategoria,
                            'nome' => "Cream",
                            'descricao' => 'Pão brioche, hambúrguer 180g, bacon, cream cheese e molho.',
                            'preco' => 17.99,
                            'ativo' => true,
                            'imagem' => 'imagens/1/produtos/cream.jpeg'
                        ]);
                        DB::table('produtos')->insert([
                            'user_id' => $idTenant,
                            'categoria_id' => $idCategoria,
                            'nome' => "Gorgon",
                            'descricao' => 'Pão australiano, hambúrguer 180g, creme de gorgonzola, geleia de abacaxi com pimenta, bacon e molho.',
                            'preco' => 18.99,
                            'ativo' => true,
                            'imagem' => 'imagens/1/produtos/gorgon.jpeg'
                        ]);
                        DB::table('produtos')->insert([
                            'user_id' => $idTenant,
                            'categoria_id' => $idCategoria,
                            'nome' => "Smash",
                            'descricao' => 'Pão brioche, 2 hambúrguer smash, bacon, ovo, cheddar e molho.',
                            'preco' => 19.99,
                            'ativo' => true,
                            'imagem' => 'imagens/1/produtos/smash.jpeg'
                        ]);
                        DB::table('produtos')->insert([
                            'user_id' => $idTenant,
                            'categoria_id' => $idCategoria,
                            'nome' => "Triplo Smash",
                            'descricao' => 'Pão brioche, 3 hambúrguers smash, triplo queijo, cebola caramelizada, bacon e molho.',
                            'preco' => 21.99,
                            'ativo' => true,
                            'imagem' => 'imagens/1/produtos/triplosmash.jpeg'
                        ]);

                $idCategoria = DB::table('categorias')->insertGetid([
                    'nome' => "Porções",
                    'user_id' => $idTenant
                ]);
                        DB::table('produtos')->insert([
                            'user_id' => $idTenant,
                            'categoria_id' => $idCategoria,
                            'nome' => "Batata Palito",
                            'descricao' => '500g de batatas-palito fritas.',
                            'preco' => 17.90,
                            'ativo' => true,
                            'imagem' => 'imagens/1/produtos/batatapalito.jpeg'
                        ]);
                        DB::table('produtos')->insert([
                            'user_id' => $idTenant,
                            'categoria_id' => $idCategoria,
                            'nome' => "Batata Rústica",
                            'descricao' => '500g de batatas rústicas fritas.',
                            'preco' => 17.90,
                            'ativo' => true,
                            'imagem' => 'imagens/1/produtos/batatarustica.jpeg'
                        ]);
                        DB::table('produtos')->insert([
                            'user_id' => $idTenant,
                            'categoria_id' => $idCategoria,
                            'nome' => "Bolinho de Carne",
                            'descricao' => '10 unidades de bolinho de carne frito.',
                            'preco' => 17.90,
                            'ativo' => true,
                            'imagem' => 'imagens/1/produtos/bolinho.jpeg'
                        ]);
                $idCategoria = DB::table('categorias')->insertGetid([
                    'nome' => "Bebidas",
                    'user_id' => $idTenant
                ]);
                        DB::table('produtos')->insert([
                            'user_id' => $idTenant,
                            'categoria_id' => $idCategoria,
                            'nome' => "Coca-Cola 2L",
                            'descricao' => 'Refrigerante Coca-cola 2 Litros',
                            'preco' => 11.00,
                            'ativo' => true,
                            'imagem' => 'imagens/1/produtos/cocacola2litros.jpeg'
                        ]);
                        DB::table('produtos')->insert([
                            'user_id' => $idTenant,
                            'categoria_id' => $idCategoria,
                            'nome' => "Coca-Cola Lata",
                            'descricao' => 'Refrigerante Coca-cola Lata 350ml',
                            'preco' => 5.00,
                            'ativo' => true,
                            'imagem' => 'imagens/1/produtos/cocacolalata.png'
                        ]);
                        DB::table('produtos')->insert([
                            'user_id' => $idTenant,
                            'categoria_id' => $idCategoria,
                            'nome' => "Guaraná 2L",
                            'descricao' => 'Refrigerante Guaraná Antarctica 2 Litros',
                            'preco' => 11.00,
                            'ativo' => true,
                            'imagem' => 'imagens/1/produtos/guaranaantarctica2litros.jpeg'
                        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BrothersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $slug = 'brothersburger';
            $idTenant = DB::table('users')->insertGetid([
                'name' => "Brothers Burger",
                'email' => "brothers@gmail.com",
                'password' => Hash::make('123'),
                'role' => 2,
                'telefone' => '35-98477-2578',
                'logradouro' =>'Rua Benjamin Constant,50',
                'bairro' => 'Tijuco Preto',
                'cidade_id' => 1,
                'cor_fundo' => '#23211f',
                'cor_texto' => '#ffffff',
                'tempo_espera' => '15 a 30min',
                'slug' => $slug,
                'logotipo' => 'imagens/'.$slug.'/logo/brothers.jpeg'
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
                        'horario' => '19h as 23h'
                    ]);
                    DB::table('horarios')->insert([
                        'user_id' => $idTenant,
                        'dia' => 2,
                        'horario' => 'Fechado'
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
                    $tipo_refri_lata = DB::table('obrigatorios')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Tipo refrigerante',
                        'opcoes' => 'Coca-Cola;Coca-Cola Zero;Fanta Laranja;Fanta Uva;Guaraná Antárctica;Guaraná Antárctica Zero;Schweppes Citrus;Schweppes Tônica'
                    ]);
                    $tipo_refri_600 = DB::table('obrigatorios')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Tipo regrigerante',
                        'opcoes' => 'Coca-Cola;Coca-Cola Zero;Guaraná Antárctica;Guaraná Antárctica Zero'
                    ]);
                    $tipo_refri_1litro = DB::table('obrigatorios')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Tipo regrigerante',
                        'opcoes' => 'Coca-Cola;Guaraná Antárctica'
                    ]);
                     // adicionais
                    $pao_australiano = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Pão Australiano',
                        'valor' => 1.50
                    ]);
                    $ovo = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Ovo',
                        'valor' => 2.00
                    ]);
                    $salada = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Salada',
                        'valor' => 2.00
                    ]);
                    $queijo_prato = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Queijo Prato',
                        'valor' => 3.00
                    ]);
                    $calabresa = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Calabresa',
                        'valor' => 3.00
                    ]);
                    $cebola_caramelizada = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Cebola Caramelizada',
                        'valor' => 2.00
                    ]);
                    $cream_cheese = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Cream Cheese',
                        'valor' => 4.00
                    ]);
                    $cheddar = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Cheddar',
                        'valor' => 4.00
                    ]);
                    $bacon = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Bacon',
                        'valor' => 4.00
                    ]);
                    $creme_gorgonzola = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Creme de Gorgonzola',
                        'valor' => 5.00
                    ]);
                    $frango = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Frango',
                        'valor' => 5.00
                    ]);
                    $hamburguer_smash = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Hambúrguer Smash',
                        'valor' => 7.00
                    ]);
                    $molho_barbacue = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Molho Barbacue',
                        'valor' => 2.00
                    ]);
                    $molho_ervas = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Molho de Ervas',
                        'valor' => 2.00
                    ]);
                    $molho_defumado = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Molho Defumado',
                        'valor' => 2.00
                    ]);
                    $molho_especial = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Molho Especial',
                        'valor' => 2.00
                    ]);
                    $geleia = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Geléia Abacaxi c/ Pimenta',
                        'valor' => 1.50
                    ]);
                    $catupiry_empanado = DB::table('adicionais')->insertGetid([
                        'user_id' => $idTenant,
                        'nome' => 'Catupiry Empanado',
                        'valor' => 7.00
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
                                'imagem' => 'imagens/'.$slug.'/produtos/burguer.jpeg'
                            ]);
                                // ProdutoObrigatorios
                                DB::table('produto_obrigatorios')->insert([
                                    'produto_id' => $produto,
                                    'obrigatorio_id' => $molho
                                ]);
                                // ProdutoAdicional
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $pao_australiano
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $ovo
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $salada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $queijo_prato
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $calabresa
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cebola_caramelizada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cream_cheese
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cheddar
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $bacon
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $creme_gorgonzola
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $frango
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $hamburguer_smash
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_barbacue
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_ervas
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_defumado
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_especial
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $geleia
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $catupiry_empanado
                                ]);
                            
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Salada",
                                'descricao' => 'Pão brioche, hambúrguer 180g, queijo prato, alface, tomate, cebola roxa e molho.',
                                'preco' => 16.99,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/salada.jpeg'
                            ]);
                                // ProdutoObrigatorios
                                DB::table('produto_obrigatorios')->insert([
                                    'produto_id' => $produto,
                                    'obrigatorio_id' => $molho
                                ]);
                                // ProdutoAdicional
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $pao_australiano
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $ovo
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $salada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $queijo_prato
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $calabresa
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cebola_caramelizada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cream_cheese
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cheddar
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $bacon
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $creme_gorgonzola
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $frango
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $hamburguer_smash
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_barbacue
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_ervas
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_defumado
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_especial
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $geleia
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $catupiry_empanado
                                ]);
        
    
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Cheddar",
                                'descricao' => 'Pão brioche, hambúrguer 180g, cheddar, cebola caramelizada e molho.',
                                'preco' => 17.99,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/cheddar.jpeg'
                            ]);
                                DB::table('produto_obrigatorios')->insert([
                                    'produto_id' => $produto,
                                    'obrigatorio_id' => $molho
                                ]);
                                // ProdutoAdicional
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $pao_australiano
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $ovo
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $salada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $queijo_prato
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $calabresa
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cebola_caramelizada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cream_cheese
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cheddar
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $bacon
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $creme_gorgonzola
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $frango
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $hamburguer_smash
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_barbacue
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_ervas
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_defumado
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_especial
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $geleia
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $catupiry_empanado
                                ]);
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Calabrinho",
                                'descricao' => 'Pão brioche, hambúrguer 180g, calabresa, cream cheese, cebola roxa e molho.',
                                'preco' => 17.99,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/calabrinho.jpeg'
                                
                            ]);
                                // ProdutoObrigatorios
                                DB::table('produto_obrigatorios')->insert([
                                    'produto_id' => $produto,
                                    'obrigatorio_id' => $molho
                                ]);
                                // ProdutoAdicional
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $pao_australiano
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $ovo
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $salada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $queijo_prato
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $calabresa
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cebola_caramelizada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cream_cheese
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cheddar
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $bacon
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $creme_gorgonzola
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $frango
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $hamburguer_smash
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_barbacue
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_ervas
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_defumado
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_especial
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $geleia
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $catupiry_empanado
                                ]);
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Cream",
                                'descricao' => 'Pão brioche, hambúrguer 180g, bacon, cream cheese e molho.',
                                'preco' => 17.99,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/cream.jpeg'
                            ]);
                                DB::table('produto_obrigatorios')->insert([
                                    'produto_id' => $produto,
                                    'obrigatorio_id' => $molho
                                ]);
                                // ProdutoAdicional
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $pao_australiano
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $ovo
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $salada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $queijo_prato
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $calabresa
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cebola_caramelizada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cream_cheese
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cheddar
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $bacon
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $creme_gorgonzola
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $frango
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $hamburguer_smash
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_barbacue
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_ervas
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_defumado
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_especial
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $geleia
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $catupiry_empanado
                                ]);
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Big Chicken",
                                'descricao' => 'Pão brioche, frango, queijo prato, bacon, salada e molho.',
                                'preco' => 17.99,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/bigchicken.jpeg'
                                
                            ]);
                                // ProdutoObrigatorios
                                DB::table('produto_obrigatorios')->insert([
                                    'produto_id' => $produto,
                                    'obrigatorio_id' => $molho
                                ]);
                                // ProdutoAdicional
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $pao_australiano
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $ovo
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $salada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $queijo_prato
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $calabresa
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cebola_caramelizada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cream_cheese
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cheddar
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $bacon
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $creme_gorgonzola
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $frango
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $hamburguer_smash
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_barbacue
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_ervas
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_defumado
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_especial
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $geleia
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $catupiry_empanado
                                ]);
                            
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Gorgon",
                                'descricao' => 'Pão australiano, hambúrguer 180g, creme de gorgonzola, geleia de abacaxi com pimenta, bacon e molho.',
                                'preco' => 18.99,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/gorgon.jpeg'
                            ]);
                                DB::table('produto_obrigatorios')->insert([
                                    'produto_id' => $produto,
                                    'obrigatorio_id' => $molho
                                ]);
                                // ProdutoAdicional
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $pao_australiano
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $ovo
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $salada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $queijo_prato
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $calabresa
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cebola_caramelizada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cream_cheese
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cheddar
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $bacon
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $creme_gorgonzola
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $frango
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $hamburguer_smash
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_barbacue
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_ervas
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_defumado
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_especial
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $geleia
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $catupiry_empanado
                                ]);
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Brother's",
                                'descricao' => 'Pão brioche, duplo hambúrguer, duplo queijo, bacon, cebola caramelizada de molho.',
                                'preco' => 22.99,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/brothers-lanche.jpeg'
                                
                            ]);
                                // ProdutoObrigatorios
                                DB::table('produto_obrigatorios')->insert([
                                    'produto_id' => $produto,
                                    'obrigatorio_id' => $molho
                                ]); 
                                // ProdutoAdicional
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $pao_australiano
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $ovo
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $salada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $queijo_prato
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $calabresa
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cebola_caramelizada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cream_cheese
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cheddar
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $bacon
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $creme_gorgonzola
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $frango
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $hamburguer_smash
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_barbacue
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_ervas
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_defumado
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_especial
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $geleia
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $catupiry_empanado
                                ]);
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Smash",
                                'descricao' => 'Pão brioche, 2 hambúrguer smash, bacon, ovo, cheddar e molho.',
                                'preco' => 19.99,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/smash.jpeg'
                            ]);
                                DB::table('produto_obrigatorios')->insert([
                                    'produto_id' => $produto,
                                    'obrigatorio_id' => $molho
                                ]);
                                // ProdutoAdicional
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $pao_australiano
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $ovo
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $salada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $queijo_prato
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $calabresa
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cebola_caramelizada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cream_cheese
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cheddar
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $bacon
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $creme_gorgonzola
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $frango
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $hamburguer_smash
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_barbacue
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_ervas
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_defumado
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_especial
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $geleia
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $catupiry_empanado
                                ]);
                               
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Triplo Smash",
                                'descricao' => 'Pão brioche, 3 hambúrguers smash, triplo queijo, cebola caramelizada, bacon e molho.',
                                'preco' => 21.99,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/triplosmash.jpeg'
                            ]);
                                DB::table('produto_obrigatorios')->insert([
                                    'produto_id' => $produto,
                                    'obrigatorio_id' => $molho
                                ]);
                                // ProdutoAdicional
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $pao_australiano
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $ovo
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $salada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $queijo_prato
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $calabresa
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cebola_caramelizada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cream_cheese
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cheddar
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $bacon
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $creme_gorgonzola
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $frango
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $hamburguer_smash
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_barbacue
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_ervas
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_defumado
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_especial
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $geleia
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $catupiry_empanado
                                ]);
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Crispy",
                                'descricao' => 'Pão brioche, hambúrguer, queijo, catupiry empanado, bacon e molho.',
                                'preco' => 22.99,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/crispy.jpeg'
                                
                            ]);
                                DB::table('produto_obrigatorios')->insert([
                                    'produto_id' => $produto,
                                    'obrigatorio_id' => $molho
                                ]);
                                // ProdutoAdicional
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $pao_australiano
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $ovo
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $salada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $queijo_prato
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $calabresa
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cebola_caramelizada
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cream_cheese
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $cheddar
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $bacon
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $creme_gorgonzola
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $frango
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $hamburguer_smash
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_barbacue
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_ervas
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_defumado
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $molho_especial
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $geleia
                                ]);
                                DB::table('produto_adicionais')->insert([
                                    'produto_id' => $produto,
                                    'adicional_id' => $catupiry_empanado
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
                                'imagem' => 'imagens/'.$slug.'/produtos/batatapalito.jpeg'
                            ]);
                            DB::table('produtos')->insert([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Batata Palito porção individual",
                                'descricao' => 'Batatas-palito porção individual.',
                                'preco' => 5.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/batatapequena.jpeg'
                                
                            ]);
                            DB::table('produtos')->insert([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Batata Rústica",
                                'descricao' => '500g de batatas rústicas fritas.',
                                'preco' => 17.90,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/batatarustica.jpeg'
                            ]);
                            DB::table('produtos')->insert([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Bolinho de Carne",
                                'descricao' => '10 unidades de bolinho de carne frito.',
                                'preco' => 17.90,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/bolinho.jpeg'
                            ]);
                            DB::table('produtos')->insert([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Búffalo Wings",
                                'descricao' => '500g de búffalo wings.',
                                'preco' => 25.90,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/buffalowings.png'
                                
                            ]);
                            DB::table('produtos')->insert([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Onion Rings",
                                'descricao' => 'Anéis de cebola empanados.',
                                'preco' => 19.90,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/onions.jpeg'
                                
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
                                'preco' => 15.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/cocacola2litros.jpeg'
                            ]);
                            DB::table('produtos')->insert([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Fanta Laranja 2L",
                                'descricao' => 'Refrigerante Fanta Laranja 2 Litros',
                                'preco' => 12.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/fanta-laranja-2litros.png'
                            ]);
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Refrigerante Lata",
                                'descricao' => 'Refrigerante lata 350ml diversos sabores',
                                'preco' => 5.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/refri-lata-brothers.png'
                            ]);
                                // ProdutoObrigatorios
                                DB::table('produto_obrigatorios')->insert([
                                    'produto_id' => $produto,
                                    'obrigatorio_id' => $tipo_refri_lata
                                ]);
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Refrigerante 600ml",
                                'descricao' => 'Refrigerante 600ml diversos sabores',
                                'preco' => 7.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/refri-600-brothers.png'
                            ]);
                                // ProdutoObrigatorios
                                DB::table('produto_obrigatorios')->insert([
                                    'produto_id' => $produto,
                                    'obrigatorio_id' => $tipo_refri_600
                                ]);    
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Refrigerante 1L",
                                'descricao' => 'Refrigerante 1L diversos sabores',
                                'preco' => 8.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/refri-1litro-brothers.png'
                            ]);
                                // ProdutoObrigatorios
                                DB::table('produto_obrigatorios')->insert([
                                    'produto_id' => $produto,
                                    'obrigatorio_id' => $tipo_refri_1litro
                                ]);    
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Energético Red Bull Lata",
                                'descricao' => 'Bebida energética Red Bull Lata 250ml',
                                'preco' => 12.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/red-bull.png'
                            ]);
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Água sem gás",
                                'descricao' => 'Água sem gás 510ml',
                                'preco' => 3.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/agua510ml.jpeg'
                            ]);
                            $produto = DB::table('produtos')->insertGetid([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Água com gás",
                                'descricao' => 'Água com gás 510ml',
                                'preco' => 3.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/aguagasosa510ml.jpeg'
                            ]);
                    $idCategoria = DB::table('categorias')->insertGetid([
                        'nome' => "Cervejas",
                        'user_id' => $idTenant
                    ]);
                            DB::table('produtos')->insert([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Skol Lata",
                                'descricao' => 'Cerveja Skol lata 350ml',
                                'preco' => 5.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/skol-lata.jpeg'
                            ]);
                            DB::table('produtos')->insert([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Brahma Lata",
                                'descricao' => 'Cerveja Brahma lata 350ml',
                                'preco' => 5.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/brahma-lata.jpeg'
                            ]);
                            DB::table('produtos')->insert([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Brahma Duplo Malte Lata",
                                'descricao' => 'Cerveja Brahma Duplo Malte lata 350ml',
                                'preco' => 6.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/duplo-malte.jpeg'
                            ]);
                            DB::table('produtos')->insert([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Stella Long Neck",
                                'descricao' => 'Cerveja Stella Long Neck',
                                'preco' => 7.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/stella.png'
                            ]);
                            DB::table('produtos')->insert([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Budweiser Long Neck",
                                'descricao' => 'Cerveja Budweiser Long Neck',
                                'preco' => 6.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/budweiser-ln.png'
                            ]);
                            DB::table('produtos')->insert([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Corona Long Neck",
                                'descricao' => 'Cerveja Corona Long Neck',
                                'preco' => 8.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/corona.jpg'
                            ]);
                            DB::table('produtos')->insert([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Spaten Long Neck",
                                'descricao' => 'Cerveja Spaten Long Neck',
                                'preco' => 7.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/spaten.png'
                            ]);
                            DB::table('produtos')->insert([
                                'user_id' => $idTenant,
                                'categoria_id' => $idCategoria,
                                'nome' => "Original 600ml",
                                'descricao' => 'Cerveja Original 600ml',
                                'preco' => 12.00,
                                'ativo' => true,
                                'imagem' => 'imagens/'.$slug.'/produtos/original600ml.png'
                            ]);
                            
        
    }
}

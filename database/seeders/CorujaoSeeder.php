<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CorujaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idTenant = DB::table('users')->insertGetid([
            'name' => "Corujão Lanches",
            'email' => "corujao@gmail.com",
            'password' => Hash::make('123'),
            'role' => 2,
            'telefone' => '35-98468-5854',
            'logradouro' =>'Av. Cel. Francisco Braz,34',
            'bairro' => 'Centro',
            'cor_fundo' => '#f6a426',
            'cor_texto' => '#ac3d43',
            'tempo_espera' => '15 a 30min',
            'logotipo' => 'imagens/logos/corujao.png'
        ]);
         // taxas
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
            'horario' => 'Fechado'
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
        $refrigerante_200ml = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo Ref. 200ml',
            'opcoes' => 'Coca-Cola;Guaraná Antárctica'
        ]);
        $refrigerante_lata = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo Ref. lata',
            'opcoes' => 'Coca-Cola;Guaraná Antárctica;Fanta Laranja;Fanta Uva'
        ]);
        $refrigerante_600ml = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo Ref. 600ml',
            'opcoes' => 'Coca-Cola;Guaraná Antárctica;Fanta Laranja;Fanta Uva'
        ]);
        $refrigerante_2l = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo Ref. 2L',
            'opcoes' => 'Coca-Cola;Fanta Laranja;Fanta Uva'
        ]);
        $suco_del_valle_290ml = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Sabor Suco',
            'opcoes' => 'Uva;Pêssego;Goiaba'
        ]);
        // adicionais
        $hamburguer = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Hambúrguer',
            'valor' => 2.00
        ]);
        $queijo = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Queijo',
            'valor' => 2.00
        ]);
        $presunto = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Presunto',
            'valor' => 2.00
        ]);
        $ovo = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Ovo',
            'valor' => 2.00
        ]);
        $bacon = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Bacon',
            'valor' => 2.00
        ]);
        $calabresa = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Calabresa',
            'valor' => 2.00
        ]);
        $tomate = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tomate',
            'valor' => 1.00
        ]);
        $alface = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Alface',
            'valor' => 1.00
        ]);
        $salada = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Salada',
            'valor' => 2.00
        ]);
        $frango = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Frango',
            'valor' => 3.00
        ]);
        // categorias
        $idCategoria = DB::table('categorias')->insertGetid([
            'nome' => "Lanches",
            'user_id' => $idTenant
        ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Burguinho",
                'descricao' => 'Pão, hambúrguer, milho e batata-palha.',
                'preco' => 6.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Salada",
                'descricao' => 'Pão, hambúrguer, presunto, queijo, salada, milho e batata-palha.',
                'preco' => 12.00,
                'ativo' => true,
                'imagem' => 'imagens/corujao-xsalada.jpeg'
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Egg",
                'descricao' => 'Pão, hambúrguer, presunto, queijo, ovo, milho, salada e batata-palha.',
                'preco' => 13.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Crock",
                'descricao' => 'Pão, hambúrguer, presunto, queijo, bacon, ovo, tomate, catupiry, milho e batata-palha.',
                'preco' => 16.00,
                'ativo' => true,
                'imagem' => 'imagens/corujao-crock.jpeg'
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Rango",
                'descricao' => 'Pão, hambúrguer, presunto, queijo, bacon, ovo, milho e batata-palha.',
                'preco' => 15.00,
                'ativo' => true,
                'imagem' => 'imagens/corujao-rango.jpeg'
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Calabresa",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, calabresa, milho, salada e batata-palha.',
                'preco' => 14.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Frango",
                'descricao' => 'Pão, frango, salada, catupiry, milho e batata-palha.',
                'preco' => 14.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Bacon",
                'descricao' => 'Pão, hambúrguer, bacon, queijo, presunto, alface, milho, tomate e batata-palha.',
                'preco' => 15.00,
                'ativo' => true,
                'imagem' => 'imagens/corujao-xbacon.jpeg'
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Frango c/ Bacon",
                'descricao' => 'Pão, frango, bacon, salada, catupiry, milho e batata-palha.',
                'preco' => 16.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Frango Egg",
                'descricao' => 'Pão, frango, queijo, ovo, bacon, milho e batata-palha',
                'preco' => 14.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Americano c/ Bacon",
                'descricao' => 'Pão, presunto, queijo, ovo, bacon, tomate e batata-palha.',
                'preco' => 13.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Tudo",
                'descricao' => 'Pão, hambúrguer, bacon, calabresa, ovo, alface, tomate, presunto, queijo, milho e batata-palha.',
                'preco' => 18.00,
                'ativo' => true,
                'imagem' => 'imagens/corujao-xtudo.jpeg'
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Vegetariano",
                'descricao' => 'Pão, alface, tomate, milho, ovo, queijo e batata-palha.',
                'preco' => 8.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Big Burguer",
                'descricao' => 'Pão, 2 hambúrgueres, queijo, presunto, milho e batata-palha.',
                'preco' => 12.00,
                'ativo' => true,
                'imagem' => 'imagens/corujao-bigburguer.jpeg'
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Americano",
                'descricao' => 'Pão, Presunto, Queijo, Ovo, Tomate e Batata Palha.',
                'preco' => 11.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Misto c/ Bacon",
                'descricao' => 'Pão, presunto, queijo, tomate, bacon, milho e batata-palha.',
                'preco' => 11.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Mistão",
                'descricao' => 'Pão, presunto, queijo, tomate, orégano, milho e batata-palha.',
                'preco' => 10.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Bauru",
                'descricao' => 'Pão, presunto, queijo e tomate.',
                'preco' => 9.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Burguer",
                'descricao' => 'Pão, hambúrguer, presunto, queijo, milho e batata-palha',
                'preco' => 9.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Saladinha",
                'descricao' => 'Pão, hambúrguer, salada e queijo',
                'preco' => 7.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
            

        $idCategoria = DB::table('categorias')->insertGetid([
            'nome' => "Macarrão na Chapa",
            'user_id' => $idTenant
        ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Espaguete À Moda",
                'descricao' => 'Macarrão, bacon, calabresa, alho, cebolinha e queijo ralado.',
                'preco' => 15.00,
                'ativo' => true
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Espaguete Filé de Frango",
                'descricao' => 'Macarrão, filé de frango, alho, cebola, cebolinha e queijo ralado.',
                'preco' => 15.00,
                'ativo' => true
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Espaguete À Bolonhesa",
                'descricao' => 'Macarrão, carne moída, molho, alho, cebola, cebolinha e queijo ralado.',
                'preco' => 16.00,
                'ativo' => true,
                'imagem' => 'imagens/corujao-espaguete-bolonhesa.jpeg'
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Espaguete À Mineira",
                'descricao' => 'Macarrão, linguiça de porco, tomate, cebola, mussarela, alho, cebolinha e queijo ralado.',
                'preco' => 16.00,
                'ativo' => true,
                'imagem' => 'imagens/corujao-espaguete-amineira.jpeg'
            ]);
          
        $idCategoria = DB::table('categorias')->insertGetid([
            'nome' => "Bebidas",
            'user_id' => $idTenant
        ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Refrigerante Lata",
                'descricao' => 'Refrigerante lata 350ml',
                'preco' => 5.00,
                'ativo' => true,
                'imagem' => 'imagens/corujao-refrigerantelata.jpeg'
            ]);
                // ProdutoObrigatorios
                DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $refrigerante_lata
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Refrigerante 2 litros",
                'descricao' => 'Refrigerante 2 litros',
                'preco' => 12.00,
                'ativo' => true,
                'imagem' => 'imagens/corujao-refrigerante2litros.jpeg'
            ]);
                // ProdutoObrigatorios
                DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $refrigerante_2l
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Refrigerante 600ml",
                'descricao' => 'Refrigerante 600ml',
                'preco' => 7.00,
                'ativo' => true,
                'imagem' => 'imagens/corujao-refrigerante600ml.jpeg'
            ]);
                // ProdutoObrigatorios
                DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $refrigerante_600ml
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Refrigerante 200ml",
                'descricao' => 'Refrigerante 200ml',
                'preco' => 2.00,
                'ativo' => true,
                'imagem' => 'imagens/corujao-refrigerante200ml.jpeg'
            ]);
                // ProdutoObrigatorios
                DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $refrigerante_200ml
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Suco Del Valle",
                'descricao' => 'Suco Del Valle 290ml',
                'preco' => 5.00,
                'ativo' => true,
                'imagem' => 'imagens/corujao-sucodelvalle290ml.jpeg'
            ]);
                // ProdutoObrigatorios
                DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $suco_del_valle_290ml
                ]);
            $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Água sem gás",
            'descricao' => 'Água mineral sem gás 510ml',
            'preco' => 2.00,
            'ativo' => true,
            'imagem' => 'imagens/corujao-agua.jpeg'
           ]);
           $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Água com gás",
            'descricao' => 'Água mineral com gás 510ml',
            'preco' => 2.50,
            'ativo' => true,
            'imagem' => 'imagens/corujao-agua_com_gas.jpeg'
           ]);
           
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FatinhaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = 'fatinhalanches';
        $idTenant = DB::table('users')->insertGetid([
            'name' => "Fatinha Lanches",
            'email' => "elizettemorais@hotmail.com",
            'password' => Hash::make('123'),
            'role' => 2,
            'telefone' => '35-99128-6258',
            'logradouro' =>'Av. Cel. Francisco Braz,35',
            'bairro' => 'Centro',
            'cidade_id' => 1,
            //'chave_pix' => 'jccintr@gmail.com',
            //'favorecido_pix' => 'Julio Cesar',
            'cor_fundo' => '#d6aa4b',
            'cor_texto' => '#723034',
            'tempo_espera' => '15 a 30min',
            'slug' => $slug,
            'logotipo' => 'imagens/'.$slug.'/logo/fatinha-lanches.png'
        ]);
        // Mensagens
        DB::table('mensagens')->insert([
            'user_id' => $idTenant
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
        $refrigerante_lata = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo ref. lata',
            'opcoes' => 'Coca-Cola;Guaraná Antárctica;Fanta Laranja;Fanta Uva'
        ]);
        $refrigerante_600ml = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo ref. 600ml',
            'opcoes' => 'Coca-Cola;Guaraná Antárctica;Fanta Laranja;Fanta Uva'
        ]);
        $refrigerante_2l = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo ref. 2L',
            'opcoes' => 'Coca-Cola;Guaraná Antárctica;Fanta Laranja'
        ]);
        // adicionais
        $bacon = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Bacon',
            'valor' => 2.00
        ]);
        $batata_palha = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Batata-Palha',
            'valor' => 2.00
        ]);
        $calabresa = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Calabresa',
            'valor' => 2.00
        ]);
        $catupiry = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Catupiry',
            'valor' => 2.00
        ]);
        $frango = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Frango',
            'valor' => 2.00
        ]);
        $hamburguer = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Hambúrguer',
            'valor' => 2.00
        ]);
        $milho = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Milho',
            'valor' => 2.00
        ]);
        $molho = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Molho',
            'valor' => 2.00
        ]);
        $ovo = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Ovo',
            'valor' => 2.00
        ]);
        $presunto = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Presunto',
            'valor' => 2.00
        ]);
        $queijo = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Queijo',
            'valor' => 2.00
        ]);
        $salada = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Salada',
            'valor' => 2.00
        ]);
        $salsicha = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Salsicha',
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
                'nome' => "Burguinho",
                'descricao' => 'Pão, hambúrguer, milho e batata-palha.',
                'preco' => 8.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Burguer",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, milho e batata-palha.',
                'preco' => 12.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Misto",
                'descricao' => 'Pão, queijo, presunto, tomate, milho e batata-palha.',
                'preco' => 12.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Salada",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, alface, tomate, milho e batata-palha.',
                'preco' => 13.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Americano",
                'descricao' => 'Pão, queijo, presunto, ovo, alface, tomate, milho e batata-palha.',
                'preco' => 13.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Egg Salada",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, ovo, alface, tomate, milho e batata-palha.',
                'preco' => 14.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Calabresa",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, calabresa, alface, tomate, milho e batata-palha.',
                'preco' => 15.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Bacon",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, bacon, alface, tomate, milho e batata-palha.',
                'preco' => 15.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Rango",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, bacon, ovo, milho e batata-palha.',
                'preco' => 15.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Egg Bacon",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, bacon, ovo, alface, tomate, milho e batata-palha.',
                'preco' => 16.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Frango",
                'descricao' => 'Pão, frango, queijo, presunto, alface, tomate, milho e batata-palha.',
                'preco' => 16.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Tudo",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, bacon, ovo, catupiry, alface, tomate, milho e batata-palha.',
                'preco' => 17.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Especial",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, bacon, calabresa, ovo, catupiry, alface, tomate, milho e batata-palha.',
                'preco' => 18.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salada
                ]);

        $idCategoria = DB::table('categorias')->insertGetid([
            'nome' => "Hot-Dogs",
            'user_id' => $idTenant
        ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Hot Dog Simples",
                'descricao' => 'Pão, salsicha, molho, milho e batata-palha.',
                'preco' => 7.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Hot Dog Completo",
                'descricao' => 'Pão, salsicha, molho, alface, tomate, milho e batata-palha.',
                'preco' => 8.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $bacon
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $calabresa
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
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
                'ativo' => true
            ]);
                // ProdutoObrigatorios
                DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $refrigerante_lata
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Refrigerante 600ml",
                'descricao' => 'Refrigerante pet 600ml',
                'preco' => 7.00,
                'ativo' => true
            ]);
                // ProdutoObrigatorios
                DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $refrigerante_600ml
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Refrigerante 2L",
                'descricao' => 'Refrigerante pet 2L',
                'preco' => 7.00,
                'ativo' => true
            ]);
                // ProdutoObrigatorios
                DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $refrigerante_2l
                ]);
    }
}

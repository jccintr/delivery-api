<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BrazPizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = 'brazpizza';
        $idTenant = DB::table('users')->insertGetid([
            'name' => "Braz Pizza Delivery",
            'email' => "brazpizza@gmail.com",
            'password' => Hash::make('123'),
            'role' => 2,
            'telefone' => '35-99128-6796',
            'logradouro' =>'Av. Dr. Pedro Rosas,377',
            'bairro' => 'Centro',
            'cor_fundo' => '#fcc73b',
            'cor_texto' => '#472f2b',
            'tempo_espera' => '30 a 45min',
            'slug' => $slug,
            'logotipo' => 'imagens/'.$slug.'/logo/brazpizza.png'
        ]);
         // taxas
         DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Centro',
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
            'horario' => '18h30 as 23h'
        ]);
        DB::table('horarios')->insert([
            'user_id' => $idTenant,
            'dia' => 1,
            'horario' => 'Fechado'
        ]);
        DB::table('horarios')->insert([
            'user_id' => $idTenant,
            'dia' => 2,
            'horario' => '18h30 as 22h30'
        ]);
        DB::table('horarios')->insert([
            'user_id' => $idTenant,
            'dia' => 3,
            'horario' => '18h30 as 22h30'
        ]);
        DB::table('horarios')->insert([
            'user_id' => $idTenant,
            'dia' => 4,
            'horario' => '18h30 as 22h30'
        ]);
        DB::table('horarios')->insert([
            'user_id' => $idTenant,
            'dia' => 5,
            'horario' => '18h30 as 23h30'
        ]);
        DB::table('horarios')->insert([
            'user_id' => $idTenant,
            'dia' => 6,
            'horario' => '18h30 as 23h30'
        ]);
        // Obrigatorios
        $refrigerante_lata = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo Ref. lata',
            'opcoes' => 'Coca-Cola;Guaraná Antárctica;Fanta Laranja;Fanta Uva'
        ]);
        $sukita_2l = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo Ref. 2L',
            'opcoes' => 'Coca-Cola;Fanta Laranja;Fanta Uva'
        ]);
        $fanta_2l = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo Ref. 2L',
            'opcoes' => 'Coca-Cola;Fanta Laranja;Fanta Uva'
        ]);
        $suco_del_valle_1000ml = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Sabor Suco',
            'opcoes' => 'Laranja;Uva;Pêssego'
        ]);
        // adicionais
        $borda_catupiry = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Borda Catupiry',
            'valor' => 11.00
        ]);
        $borda_cheddar = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Borda Cheddar',
            'valor' => 11.00
        ]);
        $borda_chocolate = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Borda Chocolate',
            'valor' => 11.00
        ]);
        $borda_caracol = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Borda Caracol',
            'valor' => 16.00
        ]);
        $bacon = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Bacon',
            'valor' => 10.00
        ]);
        $calabresa = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Calabresa',
            'valor' => 10.00
        ]);
        $catupiry = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Catupiry',
            'valor' => 10.00
        ]);
        $cheddar = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Cheddar',
            'valor' => 10.00
        ]);
        $creme_especial = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Creme Especial',
            'valor' => 10.00
        ]);
        $frango = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Frango',
            'valor' => 10.00
        ]);
        $mussarela = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Mussarela',
            'valor' => 10.00
        ]);
        $palmito = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Palmito',
            'valor' => 10.00
        ]);
        // categorias  ==> Bebidas, Pizzas Doces, Pizzas 
        $idCategoria = DB::table('categorias')->insertGetid([
            'nome' => "Pizzas Grandes",
            'user_id' => $idTenant
        ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Alho",
                'descricao' => 'Alho e mussarela.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Bacon",
                'descricao' => 'Bacon e mussarela.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Bacon Especial",
                'descricao' => 'Bacon, mussarela, catupiry, ervilha e cebola.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);
                
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Baiana",
                'descricao' => 'Ovo, calabresa, pimenta e cebola.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Bauru",
                'descricao' => 'Mussarela, presunto e tomate.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Brócolis Especial",
                'descricao' => 'Alho, mussarela, bacon e brócolis.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Brócolis Simples",
                'descricao' => 'mussarela e brócolis.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Caipira",
                'descricao' => 'Frango, mussarela e milho.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Calabresa",
                'descricao' => 'Calebresa e cebola.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Cinco Queijos",
                'descricao' => 'Mussarela, parmesão, gorgonzola, provolone e catupiry.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Dois Queijos",
                'descricao' => 'Mussarela e catupiry.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Franbacon",
                'descricao' => 'Bacon e frango.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Francheddar",
                'descricao' => 'Cheddar, Bacon e frango.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Frango",
                'descricao' => 'Frango e catupiry.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Lombo Canadense",
                'descricao' => 'Mussarela e lombo canadense.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Marguerita",
                'descricao' => 'Mussarela, manjericão e tomate.',
                'preco' => 48.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_caracol
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
                    'adicional_id' => $catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cheddar
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $palmito
                ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Milho Verde",
                    'descricao' => 'Mussarela e milho verde.',
                    'preco' => 48.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Moda da Casa",
                    'descricao' => 'Mussarela, presunto, palmito, cebola, milho, ervilha e tomate.',
                    'preco' => 48.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Mussarela",
                    'descricao' => 'Mussarela, tomate e azeitona.',
                    'preco' => 48.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Napolitana",
                    'descricao' => 'Mussarela, parmesão e tomate.',
                    'preco' => 48.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Palmito",
                    'descricao' => 'Palmito e mussarela.',
                    'preco' => 48.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Peito de Peru",
                    'descricao' => 'Peito de Peru.',
                    'preco' => 48.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Pepperonni",
                    'descricao' => 'Pepperonni e mussarela.',
                    'preco' => 48.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Peruna",
                    'descricao' => 'Peito de Peru e mussarela.',
                    'preco' => 48.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Portuguesa",
                    'descricao' => 'Mussarela, presunto, ovo, bacon, cebola, milho e ervilha.',
                    'preco' => 48.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Quatro Queijos",
                    'descricao' => 'Mussarela, parmesão, gorgonzola e catupiry.',
                    'preco' => 48.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Seis Queijos",
                    'descricao' => 'Cheddar, mussarela, parmesão, gorgonzola, provolone e catupiry.',
                    'preco' => 48.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Siciliana",
                    'descricao' => 'Mussarela, champignon, bacon e palmito.',
                    'preco' => 48.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Toscana",
                    'descricao' => 'Mussarela, calabresa e cebola.',
                    'preco' => 48.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "TrÊs Queijos",
                    'descricao' => 'Mussarela, parmesão e catupiry.',
                    'preco' => 48.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Calabresa Top",
                    'descricao' => 'Mussarela, calabresa, catupiry e cebola.',
                    'preco' => 53.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Frango Especial",
                    'descricao' => 'Mussarela, bacon, frango, catupiry e milho.',
                    'preco' => 50.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Atum",
                    'descricao' => 'Atum e cebola.',
                    'preco' => 51.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);


                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Atum Especial",
                    'descricao' => 'Atum, catupiry e cebola.',
                    'preco' => 51.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Atum Especial 2",
                    'descricao' => 'Atum e mussarela.',
                    'preco' => 51.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Calabresa Especial",
                    'descricao' => 'Calabresa, catupiry e cebola.',
                    'preco' => 51.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Brasileirinha",
                    'descricao' => 'Mussarela, atum, palmito, cebola e ervilha.',
                    'preco' => 53.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);

                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Entulho",
                    'descricao' => 'Mussarela, ovo, bacon, lombo, frango, catupiry, cebola, milho, ervilha e tomate.',
                    'preco' => 59.00,
                    'ativo' => true
                ]);
                    // ProdutoAdicional
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_chocolate
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $borda_caracol
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
                        'adicional_id' => $catupiry
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $cheddar
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $creme_especial
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $frango
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $mussarela
                    ]);
                    DB::table('produto_adicionais')->insert([
                        'produto_id' => $produto,
                        'adicional_id' => $palmito
                    ]);
// pizzas doces
        $idCategoria = DB::table('categorias')->insertGetid([
            'nome' => "Pizzas Doces",
            'user_id' => $idTenant
        ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Chocolate",
                'descricao' => 'Chocolate.',
                'preco' => 48.00,
                'ativo' => true
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Chocolate Granulado",
                'descricao' => 'Chocolate e chocolate granulado.',
                'preco' => 48.00,
                'ativo' => true
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Chocolate com M&Ms",
                'descricao' => 'Chocolate e M&Ms.',
                'preco' => 48.00,
                'ativo' => true
            ]);
// bebidas
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
            'nome' => "Refrigerante Sukita 2L",
            'descricao' => 'Refrigerante Sukita 2L',
            'preco' => 10.00,
            'ativo' => true
        ]);
            // ProdutoObrigatorios
            DB::table('produto_obrigatorios')->insert([
                'produto_id' => $produto,
                'obrigatorio_id' => $sukita_2l
            ]);

        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Refrigerante Fanta 2L",
            'descricao' => 'Refrigerante Fanta 2L',
            'preco' => 10.00,
            'ativo' => true
        ]);
            // ProdutoObrigatorios
            DB::table('produto_obrigatorios')->insert([
                'produto_id' => $produto,
                'obrigatorio_id' => $fanta_2l
            ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Refrigerante Coca-Cola 2L",
            'descricao' => 'Refrigerante Coca-Cola 2L',
            'preco' => 13.00,
            'ativo' => true
        ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Refrigerante Guaraná Antárctica 2L",
            'descricao' => 'Refrigerante Guaraná Antárctica 2L',
            'preco' => 12.00,
            'ativo' => true
        ]);

        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Suco Del Valle 1L",
            'descricao' => 'Suco Del Valle 1L',
            'preco' => 10.00,
            'ativo' => true
        ]);
            // ProdutoObrigatorios
            DB::table('produto_obrigatorios')->insert([
                'produto_id' => $produto,
                'obrigatorio_id' => $suco_del_valle_1000ml
            ]);



    }

}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class PizzaciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = 'pizzacia';
        $idTenant = DB::table('users')->insertGetid([
            'name' => "Braz Pizza Delivery",
            'email' => "pizzacia@gmail.com",
            'password' => Hash::make('123'),
            'role' => 2,
            'telefone' => '35-99968-5219',
            'logradouro' =>'Rua Floriano Peixoto,175',
            'bairro' => 'Centro',
            'cidade_id' => 1,
            //'chave_pix' => 'jccintr@gmail.com',
            //'favorecido_pix' => 'Julio Cesar',
            'cor_fundo' => '#060057',
            'cor_texto' => '#FFFFFF',
            'tempo_espera' => '30 a 45min',
            'slug' => $slug,
            'logotipo' => 'imagens/'.$slug.'/logo/pizzacia.jpg'
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
            'horario' => '18h30 as 23h15'
        ]);
        DB::table('horarios')->insert([
            'user_id' => $idTenant,
            'dia' => 1,
            'horario' => '18h30 as 23h15'
        ]);
        DB::table('horarios')->insert([
            'user_id' => $idTenant,
            'dia' => 2,
            'horario' => '18h30 as 23h15'
        ]);
        DB::table('horarios')->insert([
            'user_id' => $idTenant,
            'dia' => 3,
            'horario' => '18h30 as 23h15'
        ]);
        DB::table('horarios')->insert([
            'user_id' => $idTenant,
            'dia' => 4,
            'horario' => '18h30 as 23h15'
        ]);
        DB::table('horarios')->insert([
            'user_id' => $idTenant,
            'dia' => 5,
            'horario' => '18h30 as 23h15'
        ]);
        DB::table('horarios')->insert([
            'user_id' => $idTenant,
            'dia' => 6,
            'horario' => '18h30 as 23h20'
        ]);
        // adicionais
        $borda_catupiry = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Borda Catupiry',
            'valor' => 2.00
        ]);
        $borda_cheddar = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Borda Cheddar',
            'valor' => 2.00
        ]);
        $borda_frango_catupiry = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Borda Frango Catupiry',
            'valor' => 10.00
        ]);
        $borda_mussarela = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Borda Mussarela',
            'valor' => 10.00
        ]);
        $borda_presunto = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Borda Presunto',
            'valor' => 10.00
        ]);
        $borda_chocolate = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Borda Chocolate',
            'valor' => 10.00
        ]);
        $borda_doce_leite = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Borda Doce de Leite',
            'valor' => 10.00
        ]);
        $borda_creme_especial = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Borda Creme Especial',
            'valor' => 10.00
        ]);
        $borda_cream_cheese = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Borda Cream Cheese',
            'valor' => 10.00
        ]);
        //CATEGORIAS
        $idCategoria = DB::table('categorias')->insertGetid([
            'nome' => "Pizzas Grandes",
            'user_id' => $idTenant
        ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Alcaparra",
                'descricao' => 'Mussarela, tomate, alcaparra e parmesão.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Alho",
                'descricao' => 'Mussarela, tomate, parmesão e alho.',
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
                'adicional_id' => $borda_frango_catupiry
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $borda_mussarela
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $borda_presunto
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $borda_cream_cheese
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $borda_creme_especial
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $borda_chocolate
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $borda_doce_leite
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Atum",
                'descricao' => 'Atum, mussarela,tomate e cebola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "A Moda",
                'descricao' => 'Mussarela, presunto, milho, ervilha, ovo, palmito e cebola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Angolana",
                'descricao' => 'Atum, palmito, bacon, mussarela e cebola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Bacon",
                'descricao' => 'Mussarela, bacon e tomate.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Baiacatu",
                'descricao' => 'Mussarela, calabresa, catupiry e cebola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Baiana",
                'descricao' => 'Mussarela, calabresa, ovo, pimenta e cebola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Brasileira",
                'descricao' => 'Mussarela, calabresa, palmito, bacon e cebola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Brócolis",
                'descricao' => 'Mussarela, brócolis, bacon e alho.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Brócolis c/ Catupiry",
                'descricao' => 'Brócolis, bacon, catupiry e alho.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Califórnia",
                'descricao' => 'Lombo, mussarela, abacaxi e bacon.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Da Roça",
                'descricao' => 'Frango, milho e catupiry.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Caipirão",
                'descricao' => 'Mussarela, frango, bacon, milho e catipiry.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Calabresa",
                'descricao' => 'Calabresa e Cebola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Calabresa c/ Catupiry",
                'descricao' => 'Calabresa e Catupiry.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Calabresa c/ Cheddar",
                'descricao' => 'Calabresa e cheddar.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Calafrango",
                'descricao' => 'Mussarela, frango, calabresa e cebola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Champignon",
                'descricao' => 'Mussarela, champignon e bacon.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Do Chefe",
                'descricao' => 'Mussarela, presunto, milho, palmito e creme especial.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Ecobraz",
                'descricao' => 'Mussarela, brócolis, tomate, palmito e tomate seco.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Famosinha",
                'descricao' => 'Mussarela, peito de peru, tomate e cebola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Frango c/ Batata",
                'descricao' => 'Mussarela, frango, catupiry e batata.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Frango c/ Palmito",
                'descricao' => 'Mussarela, frango e palmito.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Frango c/ Catupiry",
                'descricao' => 'Mussarela, frango e catupiry.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Frango Especial",
                'descricao' => 'Mussarela, frango e creme especial.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Frango c/ Mussarela",
                'descricao' => 'Mussarela e Frango.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Frango c/ Cheddar",
                'descricao' => 'Mussarela, frango e cheddar.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Gorgonzola",
                'descricao' => 'Mussarela e gorgonzola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Gostosona",
                'descricao' => 'Mussarela, frango, milho, bacon, cebola e cebolinha.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Havaiana",
                'descricao' => 'Mussarela, lombo, pêssego, abacaxi e figo.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Italiana",
                'descricao' => 'Mussarela, milho, presunto, ervilha e cebola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Lombinho",
                'descricao' => 'Mussarela e lombo.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Lombinho c/ Catupiry",
                'descricao' => 'Lombo com catupiry.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Marguerita",
                'descricao' => 'Mussarela, tomate, parmesão, e manjericão.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Mexicana",
                'descricao' => 'Mussarela, frango, milho, bacon, pimenta e cebola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Mineira",
                'descricao' => 'Mussarela, presunto, palmito, champignon e bacon.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Mista",
                'descricao' => 'Mussarela, presunto e tomate.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Mussarela",
                'descricao' => 'Mussarela e tomate.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Namorados",
                'descricao' => 'Mussarela, palmito, catupiry, tomate e parmesão.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Palmito",
                'descricao' => 'Mussarela, palmito e tomate.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Peito de Peru",
                'descricao' => 'Mussarela, peito de peru e catupiry.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Peperoni",
                'descricao' => 'Mussarela e peperoni.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Peperoni c/ Cheddar",
                'descricao' => 'Mussarela, peperoni, cheddar e cebola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Portuguesa",
                'descricao' => 'Mussarela, presunto, ovo, ervilha e cebola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Polonesa",
                'descricao' => 'Mussarela, lombo, catupiry, ovo e bacon.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Portuguesa c/ Calabresa",
                'descricao' => 'Mussarela, calabresa, ovo, ervilha e cebola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Strogonoff",
                'descricao' => 'Strogonoff de frango, milho, champignon e batata palha.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Quatro Queijos",
                'descricao' => 'Mussarela, provolone, catupiry e parmesão.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Cinco Queijos",
                'descricao' => 'Mussarela, provolone, catupiry, parmesão e gorgonzola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Toscana",
                'descricao' => 'Mussarela, tomate, calabresa e cebola.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Vegetariana",
                'descricao' => 'Mussarela, brócolis, ervilha, milho, palmito, champignon e tomate.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Bis Branco",
                'descricao' => 'chocolate ao leite c/ bis branco e leite condensado.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Brigadeiro",
                'descricao' => 'Brigadeiro e granulado.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Confete",
                'descricao' => 'Chocolate e confete.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Doce de Leita",
                'descricao' => 'Doce de leite e mussarela.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Prestígio",
                'descricao' => 'Chocolate, coco ralado e leite condensado.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Romeu e Julieta",
                'descricao' => 'Mussarela e goiabada.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Calabresa Cream Cheese",
                'descricao' => 'Calabresa e cream cheese.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Franco Cream Cheese",
                'descricao' => 'Frango e cream cheese.',
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
                    'adicional_id' => $borda_frango_catupiry
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_mussarela
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_cream_cheese
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_creme_especial
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_chocolate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $borda_doce_leite
                ]);
//FIM CATEGORIA PIZZAS GRANDES */

            
    }
}

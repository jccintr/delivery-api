<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BencatiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = 'bencatia';
        $idTenant = DB::table('users')->insertGetid([
            'name' => "Bença Tia",
            'email' => "bencatia@gmail.com",
            'password' => Hash::make('delivroo123'),
            'role' => 2,
            'telefone' => '11-99025-3651',
            'logradouro' =>'Praça x, 12',
            'bairro' => 'Horizonte Azul',
            'cidade_id' => 1,
            //'chave_pix' => 'jccintr@gmail.com',
            //'favorecido_pix' => 'Julio Cesar',
            'cor_fundo' => '#23211f',
            'cor_texto' => '#ffffff',
            'tempo_espera' => '15 a 30min',
            'slug' => $slug,
            'aberto' => true,
            'logotipo' => 'imagens/'.$slug.'/logo/bencatia.jpg'
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
        $molho_da_casa = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Molho',
            'opcoes' => 'Molho Tare;Molho Vermelho;Molho Branco'
        ]);
        $sabor_macarrao = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Sabor',
            'opcoes' => 'Calabresa e molho especial com queijo;Carne e molho especial com queijo;Joelho de porco e molho especial com queijo'
        ]);
        // adicionais
        // categorias
        $idCategoria = DB::table('categorias')->insertGetid([
            'nome' => "Pratos Diversos",
            'user_id' => $idTenant
        ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Yakissoba Misto tradicional",
                'descricao' => 'Carne patinho, filé de peito de frango, brócolis, acelga, cenoura, repolho e molho especial de shoyo. Porção 400g (serve uma pessoa).',
                'preco' => 35.00,
                'ativo' => true
                //'imagem' => 'imagens/'.$slug.'/produtos/burguer.jpeg'
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Yakissoba Misto tradicional",
                'descricao' => 'Carne patinho, filé de peito de frango, brócolis, acelga, cenoura, repolho e molho especial de shoyo. Porção 850g (serve duas pessoas).',
                'preco' => 65.00,
                'ativo' => true
                //'imagem' => 'imagens/'.$slug.'/produtos/burguer.jpeg'
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Yakissoba Misto tradicional",
                'descricao' => 'Carne patinho, filé de peito de frango, brócolis, acelga, cenoura, repolho e molho especial de shoyo. Porção 1950g (serve quatro pessoas).',
                'preco' => 125.00,
                'ativo' => true
                //'imagem' => 'imagens/'.$slug.'/produtos/burguer.jpeg'
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Yakissoba Misto tradicional",
                'descricao' => 'Carne patinho, filé de peito de frango, brócolis, acelga, cenoura, repolho e molho especial de shoyo. Porção 4kg (serve seis pessoas).',
                'preco' => 170.00,
                'ativo' => true
                //'imagem' => 'imagens/'.$slug.'/produtos/burguer.jpeg'
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Guioza de Porco",
                'descricao' => 'Carne de porco temperada. Acompanha molho da casa. Porção 300g (serve uma pessoa)',
                'preco' => 25.00,
                'ativo' => true
                //'imagem' => 'imagens/'.$slug.'/produtos/burguer.jpeg'
            ]);
                 // ProdutoObrigatorios
                 DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $molho_da_casa
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Macarrão na pressão defumado",
                'descricao' => 'Porção 350g (serve uma pessoa)',
                'preco' => 25.00,
                'ativo' => true
                //'imagem' => 'imagens/'.$slug.'/produtos/burguer.jpeg'
            ]);
                      // ProdutoObrigatorios
                 DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $sabor_macarrao
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Macarrão na pressão defumado",
                'descricao' => 'Porção 850g (serve duas pessoas)',
                'preco' => 47.00,
                'ativo' => true
                //'imagem' => 'imagens/'.$slug.'/produtos/burguer.jpeg'
            ]);
                        // ProdutoObrigatorios
                    DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $sabor_macarrao
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Macarrão na pressão defumado",
                'descricao' => 'Porção tamanho família (serve cinco pessoas)',
                'preco' => 80.00,
                'ativo' => true
                //'imagem' => 'imagens/'.$slug.'/produtos/burguer.jpeg'
            ]);
                        // ProdutoObrigatorios
                    DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $sabor_macarrao
                ]);
    }
}

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
        $idTenant = DB::table('users')->insertGetid([
            'name' => "Fatinha Lanches",
            'email' => "fatinha@gmail.com",
            'password' => Hash::make('123'),
            'role' => 2,
            'telefone' => '35-98477-1500',
            'logradouro' =>'Av. Cel. Francisco Braz,35',
            'bairro' => 'Centro',
            'cor_fundo' => '#d6aa4b',
            'cor_texto' => '#723034',
            'logotipo' => 'imagens/logos/fatinha-lanches.png'
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
            'nome' => 'Tipo',
            'opcoes' => 'Coca-Cola;Guaraná Antárctica;Fanta Laranja;Fanta Uva'
        ]);
        $refrigerante_600ml = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo',
            'opcoes' => 'Coca-Cola;Guaraná Antárctica;Fanta Laranja;Fanta Uva'
        ]);
        $refrigerante_2l = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo',
            'opcoes' => 'Coca-Cola;Guaraná Antárctica;Fanta Laranja'
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
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Burguer",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, milho e batata-palha.',
                'preco' => 12.00,
                'ativo' => true
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Misto",
                'descricao' => 'Pão, queijo, presunto, tomate, milho e batata-palha.',
                'preco' => 12.00,
                'ativo' => true
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Salada",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, alface, tomate, milho e batata-palha.',
                'preco' => 13.00,
                'ativo' => true
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Americano",
                'descricao' => 'Pão, queijo, presunto, ovo, alface, tomate, milho e batata-palha.',
                'preco' => 13.00,
                'ativo' => true
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Egg Salada",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, ovo, alface, tomate, milho e batata-palha.',
                'preco' => 14.00,
                'ativo' => true
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Calabresa",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, calabresa, alface, tomate, milho e batata-palha.',
                'preco' => 15.00,
                'ativo' => true
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Bacon",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, bacon, alface, tomate, milho e batata-palha.',
                'preco' => 15.00,
                'ativo' => true
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Rango",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, bacon, ovo, milho e batata-palha.',
                'preco' => 15.00,
                'ativo' => true
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Egg Bacon",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, bacon, ovo, alface, tomate, milho e batata-palha.',
                'preco' => 16.00,
                'ativo' => true
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Frango",
                'descricao' => 'Pão, frango, queijo, presunto, alface, tomate, milho e batata-palha.',
                'preco' => 16.00,
                'ativo' => true
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Tudo",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, bacon, ovo, catupiry, alface, tomate, milho e batata-palha.',
                'preco' => 17.00,
                'ativo' => true
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Especial",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, bacon, calabresa, ovo, catupiry, alface, tomate, milho e batata-palha.',
                'preco' => 18.00,
                'ativo' => true
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
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Hot Dog Completo",
                'descricao' => 'Pão, salsicha, molho, alface, tomate, milho e batata-palha.',
                'preco' => 8.00,
                'ativo' => true
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

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AcaiDaPraiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $slug = 'acaidapraia';
       $idTenant = DB::table('users')->insertGetid([
        'name' => "Acai da Praia",
        'email' => "acaidapraia@gmail.com",
        'password' => Hash::make('delivroo123'),
        'role' => 2,
        'telefone' => '12-99653-3500',
        'logradouro' =>'Rua da Praia, 123',
        'bairro' => 'Centro',
        'cidade_id' => 1,
        //'chave_pix' => 'jccintr@gmail.com',
        //'favorecido_pix' => 'Julio Cesar',
        'cor_fundo' => '#23211f',
        'cor_texto' => '#ffffff',
        'tempo_espera' => '15 a 30min',
        'slug' => $slug,
        'aberto' => true,
        'logotipo' => 'imagens/'.$slug.'/logo/logo-acai-na-praia.png'
     ]);
     // Mensagens
    DB::table('mensagens')->insert([
        'user_id' => $idTenant
    ]);
    // taxas
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Alto da Glória',
        'valor' => 3.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Aparecida',
        'valor' => 3.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Can-Can',
        'valor' => 5.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Centro',
        'valor' => 3.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Estação',
        'valor' => 3.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Estação Dias',
        'valor' => 10.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Frei Orestes',
        'valor' => 5.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'Horizonte Azul',
        'valor' => 3.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'N. S. Aparecida',
        'valor' => 3.00
    ]);
    DB::table('taxas')->insert([
        'user_id' => $idTenant,
        'bairro' => 'São Francisco',
        'valor' => 3.00
    ]);
    
    //fim das taxas
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
    $combo_extra1 = DB::table('obrigatorios')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Extra 1',
        'opcoes' => 'Granola;Banana;Morango;Leite em Pó;Nutella;Ovomaltine;Paçoca;Chantilly;Côco Ralado;Chocolate Granulado;Whey Protein'
    ]);
    // Obrigatorios
    $combo_extra2 = DB::table('obrigatorios')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Extra 2',
        'opcoes' => 'Granola;Banana;Morango;Leite em Pó;Nutella;Ovomaltine;Paçoca;Chantilly;Côco Ralado;Chocolate Granulado;Whey Protein'
    ]);
    // adicionais
    $granola = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Granola',
        'valor' => 2.50
    ]);
    $banana = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Banana',
        'valor' => 2.00
    ]);
    $morango = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Morango',
        'valor' => 3.00
    ]);
    $leitepo = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Leite em Pó',
        'valor' => 2.50
    ]);
    $nutella = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Nutella',
        'valor' => 5.00
    ]);
    $ovomaltine = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Ovomaltine',
        'valor' => 4.00
    ]);
    $pacoca = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Paçoca',
        'valor' => 3.00
    ]);
    $chantilly = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Chantilly',
        'valor' => 3.50
    ]);
    $cocoralado = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Côco Ralado',
        'valor' => 2.50
    ]);
    $chocolate_granulado = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Chocolate Granulado',
        'valor' => 3.00
    ]);
    $whey = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Whey Protein',
        'valor' => 4.00
    ]);
    // fim adicionais
    // categorias
    $idCategoria = DB::table('categorias')->insertGetid([
        'nome' => "Açaí na Tigela",
        'user_id' => $idTenant
    ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Açaí 300ml",
            'descricao' => 'Açaí tradicional na tigela de 300ml',
            'preco' => 14.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/acai-na-tigela.png'
        ]);
            // ProdutoAdicional
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $granola
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $banana
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $morango
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $leitepo
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $nutella
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovomaltine
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $pacoca
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $chantilly
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cocoralado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $chocolate_granulado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $whey
            ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Açaí 500ml",
            'descricao' => 'Açaí tradicional na tigela de 500ml',
            'preco' => 19.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/acai-na-tigela.png'
        ]);
            // ProdutoAdicional
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $granola
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $banana
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $morango
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $leitepo
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $nutella
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovomaltine
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $pacoca
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $chantilly
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cocoralado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $chocolate_granulado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $whey
            ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Açaí 700ml",
            'descricao' => 'Açaí tradicional na tigela de 700ml',
            'preco' => 24.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/acai-na-tigela.png'
        ]);
            // ProdutoAdicional
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $granola
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $banana
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $morango
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $leitepo
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $nutella
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovomaltine
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $pacoca
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $chantilly
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cocoralado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $chocolate_granulado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $whey
            ]);

    $idCategoria = DB::table('categorias')->insertGetid([
        'nome' => "Açaí Premium",
        'user_id' => $idTenant
    ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Açaí com Banana e Morango",
            'descricao' => 'Açaí 500ml com Banana e Morango',
            'preco' => 24.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/acai-banana-morango.jpg'
        ]);
            // ProdutoAdicional
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $granola
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $banana
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $morango
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $leitepo
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovomaltine
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $pacoca
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $chantilly
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cocoralado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $chocolate_granulado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $whey
            ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Açaí com Nutella",
            'descricao' => 'Açaí 500ml com Nutella',
            'preco' => 17.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/acai-nutella.jpg'
        ]);
            // ProdutoAdicional
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $granola
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $banana
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $morango
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $leitepo
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovomaltine
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $pacoca
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $chantilly
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cocoralado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $chocolate_granulado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $whey
            ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Açaí com Ovomaltine",
            'descricao' => 'Açaí 500ml com Ovomaltine',
            'preco' => 19.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/acai-ovomaltine.jpg'
        ]);
            // ProdutoAdicional
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $granola
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $banana
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $morango
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $leitepo
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $nutella
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $pacoca
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $chantilly
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cocoralado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $chocolate_granulado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $whey
            ]);

            
    $idCategoria = DB::table('categorias')->insertGetid([
        'nome' => "Combos Especiais",
        'user_id' => $idTenant
    ]);
         $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Combo Fitness",
            'descricao' => 'Açaí 500ml, whey protein, banana e granola',
            'preco' => 27.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/acai-fitness.jpg'
        ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Combo Casal",
            'descricao' => '2 Açaís 500ml + dois ingredientes extras',
            'preco' => 44.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/acai-combo-casal.jpg'
        ]);
            // ProdutoObrigatorios
            DB::table('produto_obrigatorios')->insert([
                'produto_id' => $produto,
                'obrigatorio_id' => $combo_extra1
            ]);
            DB::table('produto_obrigatorios')->insert([
                'produto_id' => $produto,
                'obrigatorio_id' => $combo_extra2
            ]);
    $idCategoria = DB::table('categorias')->insertGetid([
        'nome' => "Sanduíches",
        'user_id' => $idTenant
    ]);
         $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Sanduíche Natural de Frango",
            'descricao' => 'Pão de forma, frango desfiado,milho,cenoura ralada,maionese e requeijão',
            'preco' => 14.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/sanduiche-frango.jpg'
        ]);
         $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Sanduíche Natural de Atum",
            'descricao' => 'Pão de forma, atum desfiado,milho,cenoura ralada,maionese e requeijão',
            'preco' => 15.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/sanduiche-atum.jpg'
        ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Wrap Natural de Frango",
            'descricao' => 'Massa de wrap integral,frango desfiado,cream cheese,alface ecenoura ralada',
            'preco' => 8.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/wrap-frango.jpg'
        ]);
    $idCategoria = DB::table('categorias')->insertGetid([
        'nome' => "Bebidas",
        'user_id' => $idTenant
    ]);
          $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Suco de Laranja Natural",
            'descricao' => 'Suco de laranja 100% natural (300ml)',
            'preco' => 8.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/suco-laranja.jpg'
        ]);
         $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Suco de Acerola Natural",
            'descricao' => 'Suco de acerola 100% natural (300ml)',
            'preco' => 8.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/suco-acerola.jpg'
        ]);
         $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Suco Detox Natural",
            'descricao' => 'Couve, Maçã e Limão (300ml)',
            'preco' => 11.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/suco-detox.jpg'
        ]);
         $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Vitamina de Frutas",
            'descricao' => 'Leite batido com banana, morango e aveia (300ml)',
            'preco' =>13.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/vitamina-frutas.jpg'
        ]);
         $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Água de Côco Natural",
            'descricao' => 'Água de côco 100% natural (500ml)',
            'preco' => 9.90,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/agua-coco.jpeg'
        ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Água Mineral Natural",
            'descricao' => 'Água mineral natural 510ml',
            'preco' => 2.50,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/agua-natural.png'
         ]);
          $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Água Mineral Gasosa",
            'descricao' => 'Água mineral gasosa 510ml',
            'preco' => 3.00,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/agua-gasosa.png'
         ]);

    }
}

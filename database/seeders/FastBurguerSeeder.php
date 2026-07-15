<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FastBurguerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $slug = 'fastburguer';
       $idTenant = DB::table('users')->insertGetid([
        'name' => "Fast Burguer",
        'email' => "fastburguer@gmail.com",
        'password' => Hash::make('9462zodiac2649'),
        'role' => 2,
        'telefone' => '35-98452-2324',
        'logradouro' =>'Av. Cel. Fco Braz,372',
        'bairro' => 'Centro',
        'cidade_id' => 1,
        //'chave_pix' => 'jccintr@gmail.com',
        //'favorecido_pix' => 'Julio Cesar',
        'cor_fundo' => '#23211f',
        'cor_texto' => '#ffffff',
        'tempo_espera' => '15 a 30min',
        'slug' => $slug,
        'aberto' => true,
        'logotipo' => 'imagens/'.$slug.'/logo/logo-fast-burguer1.png'
     ]);
     // Mensagens
    DB::table('mensagens')->insert([
        'user_id' => $idTenant
    ]);
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
     $tipo_refri_200 = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo ref. 200ml',
            'opcoes' => 'Coca-Cola;Coca-Cola Zero;Pepsi;Fanta Laranja;Fanta Uva;Guaraná Antárctica;Sprite'
    ]); 
    $tipo_refri_lata = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo ref. lata',
            'opcoes' => 'Coca-Cola;Coca-Cola Zero;Pepsi;Fanta Laranja;Fanta Uva;Guaraná Antárctica;Sprite'
    ]);
    $tipo_refri_600 = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo ref. 600ml',
            'opcoes' => 'Coca-Cola;Coca-Cola Zero;Fanta Laranja;Sprite'
    ]);
    $tipo_refri_2L = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo ref. 2L',
            'opcoes' => 'Coca-Cola;Coca-Cola Zero;Fanta Laranja;Sprite'
    ]);
     // Adicionais
     $ovo = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Ovo',
        'valor' => 2.00
     ]);
     $picles = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Picles',
        'valor' => 3.00
     ]);
     $cheddar = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Cheddar',
        'valor' => 4.00
    ]);
    $queijo_prato = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Queijo Prato',
        'valor' => 4.00
     ]);

    $bacon = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Bacon',
        'valor' => 4.00
    ]);
    $frango_empanado = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Frango Empanado',
        'valor' => 5.00
     ]);
     $hamburguer = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Hamburguer 160g',
        'valor' => 6.00
     ]);
     $hamburguer_smash = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Hamburguer Smash 80g',
        'valor' => 4.00
     ]);
     $cebola_roxa = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Cebola Roxa',
        'valor' => 2.00
     ]);
     $cebola_caramelizada = DB::table('adicionais')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Cebola Caramelizada',
        'valor' => 2.00
     ]);
     // categorias
    $idCategoria = DB::table('categorias')->insertGetid([
        'nome' => "Hamburgueres",
        'user_id' => $idTenant
    ]);
         $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Fast Classic",
            'descricao' => 'Pão brioche, blend bovino de 160g, queijo cheddar derretido, alface americana fresca, tomate fatiado, cebola roxa e molho especial da casa.',
            'preco' => 15.99,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/fast-classic.jpg'
        ]);
            // produto adicionais
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
            ]);
             DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $picles
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cheddar
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_prato
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $bacon
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango_empanado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer_smash
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_caramelizada
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_roxa
            ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Fast Bacon",
            'descricao' => 'Pão brioche, blend bovino de 160g, uma camada generosa de bacon crocante, cheddar duplo, cebola caramelizada no shoyu e maionese defumada.',
            'preco' => 15.99,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/fast-bacon.jpg'
        ]);
            // produto adicionais
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
            ]);
             DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $picles
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cheddar
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_prato
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $bacon
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango_empanado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer_smash
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_caramelizada
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_roxa
            ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Fast Smash Duplo",
            'descricao' => 'Pão brioche, dois hamburgueres smash de 80g, crosta crocante, muito cheddar, picles e molho especial da casa.',
            'preco' => 15.99,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/fast-smash.png'
        ]);
            // produto adicionais
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
            ]);
             DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $picles
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cheddar
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_prato
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $bacon
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango_empanado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer_smash
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_caramelizada
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_roxa
            ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Fast Onion",
            'descricao' => 'Pão brioche, blend bovino de 160g, dois anéis de cebola empanados, queijo prato, bacon e molho barbecue artesanal.',
            'preco' => 15.99,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/fast-onion.jpg'
        ]);
            // produto adicionais
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
            ]);
             DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $picles
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cheddar
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_prato
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $bacon
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango_empanado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer_smash
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_caramelizada
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_roxa
            ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Fast Gorgonzola",
            'descricao' => 'Pão brioche, blend bovino de 160g, creme de gorgonzola suave, rúcula fresca e geleia de pimenta levemente picante.',
            'preco' => 15.99,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/fast-gorgonzola.png'
        ]);
            // produto adicionais
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
            ]);
             DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $picles
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cheddar
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_prato
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $bacon
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango_empanado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer_smash
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_caramelizada
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_roxa
            ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Fast Chicken Crispy",
            'descricao' => 'Pão brioche, peito de frango empanado, alface, tomate, queijo muçarela e maionese de ervas finas.',
            'preco' => 15.99,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/fast-chicken.png'
        ]);
            // produto adicionais
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
            ]);
             DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $picles
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cheddar
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_prato
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $bacon
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango_empanado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer_smash
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_caramelizada
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_roxa
            ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Fast Egg",
            'descricao' => 'Pão brioche, blend bovino de 160g, ovo frito com gema mole, queijo prato, bacon, alface e maionese tradicional.',
            'preco' => 15.99,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/fast-egg.png'
        ]);
            // produto adicionais
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
            ]);
             DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $picles
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cheddar
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_prato
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $bacon
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango_empanado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer_smash
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_caramelizada
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_roxa
            ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Fast Duplo Bacon",
            'descricao' => 'Pão brioche, dois blends bovinos de 160g cada, fatia dupla de cheddar, fatias de bacon e maionese da casa.',
            'preco' => 15.99,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/fast-duplo.png'
        ]);
            // produto adicionais
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
            ]);
             DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $picles
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cheddar
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_prato
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $bacon
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango_empanado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer_smash
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_caramelizada
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_roxa
            ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Fast Jalapeño ",
            'descricao' => 'Pão brioche, blend bovino de 160g, fatias de pimenta jalapeño, cheddar, bacon picado e maionese de limão para equilibrar o picante.',
            'preco' => 15.99,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/fast-jalapeno.png'
        ]);
            // produto adicionais
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
            ]);
             DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $picles
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cheddar
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_prato
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $bacon
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango_empanado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer_smash
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_caramelizada
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola_roxa
            ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Fast Veggie ",
            'descricao' => 'Pão australiano, hambúrguer artesanal de grão-de-bico com especiarias, queijo prato, tomate confitado, alface e molho de iogurte com hortelã.',
            'preco' => 15.99,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/fast-veggie.png'
        ]);
    $idCategoria = DB::table('categorias')->insertGetid([
        'nome' => "Porções",
        'user_id' => $idTenant
    ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Onion Rings",
            'descricao' => '10 unidades de anéis de cebola empanados com molho barbecue.',
            'preco' => 15.99,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/porcao-onion-rings.png'
        ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Nuggets de Frango",
            'descricao' => '6 unidades de nuggets de frango fritos acompanhadas de molho mostarda e mel.',
            'preco' => 15.99,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/porcao-nuggets.png'
        ]);
    $idCategoria = DB::table('categorias')->insertGetid([
        'nome' => "Bebidas",
        'user_id' => $idTenant
    ]);
         $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Refrigerante 200ml",
            'descricao' => 'Refrigerante lata 200ml diversos sabores',
            'preco' => 3.00,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/refrigerantes-200ml.png'
         ]);
            // ProdutoObrigatorios
            DB::table('produto_obrigatorios')->insert([
                'produto_id' => $produto,
                'obrigatorio_id' => $tipo_refri_200
            ]);
         $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Refrigerante lata 350ml",
            'descricao' => 'Refrigerante lata 350ml diversos sabores',
            'preco' => 6.00,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/refrigerantes-lata.png'
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
            'descricao' => 'Refrigerante lata 600ml diversos sabores',
            'preco' => 8.00,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/refrigerantes-600ml.png'
         ]);
            // ProdutoObrigatorios
            DB::table('produto_obrigatorios')->insert([
                'produto_id' => $produto,
                'obrigatorio_id' => $tipo_refri_600
            ]);
         $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Refrigerante 2L",
            'descricao' => 'Refrigerante lata 2L diversos sabores',
            'preco' => 15.00,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/refrigerantes-2L.png'
         ]);
            // ProdutoObrigatorios
            DB::table('produto_obrigatorios')->insert([
                'produto_id' => $produto,
                'obrigatorio_id' => $tipo_refri_2L
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
    $idCategoria = DB::table('categorias')->insertGetid([
        'nome' => "Sobremesas",
        'user_id' => $idTenant
    ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Pudim de Leite Condensado",
            'descricao' => 'Pudim de leite condensado cremoso com calda de caramelo.',
            'preco' => 8.99,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/pudim-leite-condensado.png'
        ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Pudim Brigadeiro",
            'descricao' => 'Pudim de leite condensado com brigadeiro.',
            'preco' => 8.99,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/pudim-brigadeiro.png'
        ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Bolo de Chocolate",
            'descricao' => 'Bolo de chocolate no pote.',
            'preco' => 9.99,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/bolo-chocolate-pote.png'
        ]);
    }
}

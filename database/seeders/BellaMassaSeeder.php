<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BellaMassaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = 'bellamassa';
        $idTenant = DB::table('users')->insertGetid([
        'name' => "Bella Massa Pizzaria",
        'email' => "bellamassa@gmail.com",
        'password' => Hash::make('delivroo123'),
        'role' => 2,
        'telefone' => '35-98452-2324',
        'logradouro' =>'Rua D. Ana Chaves, 44',
        'bairro' => 'Centro',
        'cidade_id' => 1,
        //'chave_pix' => 'jccintr@gmail.com',
        //'favorecido_pix' => 'Julio Cesar',
        'cor_fundo' => '#23211f',
        'cor_texto' => '#ffffff',
        'tempo_espera' => '15 a 30min',
        'slug' => $slug,
        'aberto' => true,
        'logotipo' => 'imagens/'.$slug.'/logo/bella-massa-logo2.jpg'
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
    // bordas pizza
    $borda_nula = DB::table('bordas')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Sem borda',
        'broto' => 0.00,
        'grande' => 0.00,
    ]);
    $borda_catupiry = DB::table('bordas')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Catupiry',
        'broto' => 2.00,
        'grande' => 4.00,
    ]);
    $borda_cheddar = DB::table('bordas')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Cheddar',
        'broto' => 2.00,
        'grande' => 4.00,
    ]);
    $borda_mussarela = DB::table('bordas')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Mussarela',
        'broto' => 3.00,
        'grande' => 6.00,
    ]);
    // adicionais pizza
        $adicional_cheddar = DB::table('adicionais_pizza')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Cheddar',
        'broto' => 3.00,
        'grande' => 6.00,
    ]);
    $adicional_mussarela = DB::table('adicionais_pizza')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Mussarela',
        'broto' => 2.00,
        'grande' => 6.00,
    ]);
    $adicional_catupiry = DB::table('adicionais_pizza')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Catupiry',
        'broto' => 3.00,
        'grande' => 6.00,
    ]);
    $adicional_calabresa = DB::table('adicionais_pizza')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Calabresa',
        'broto' => 3.50,
        'grande' => 6.50,
    ]);
    $adicional_frango = DB::table('adicionais_pizza')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Frango',
        'broto' => 4.50,
        'grande' => 7.50,
    ]);
    $adicional_bacon = DB::table('adicionais_pizza')->insertGetid([
        'user_id' => $idTenant,
        'nome' => 'Bacon',
        'broto' => 3.00,
        'grande' => 5.00,
    ]);
    // pizzas
    $pizza = DB::table('pizzas')->insertGetid([
        'user_id' => $idTenant,
        'nome' => "Atum",
        'descricao' => 'Mussarela, atum e cebola.',
        'grande' => 60,
        'broto' => 40
    ]);
    $pizza = DB::table('pizzas')->insertGetid([
        'user_id' => $idTenant,
        'nome' => "Portuguesa",
        'descricao' => 'Mussarela, presunto, ovo e cebola.',
        'grande' => 58,
        'broto' => 40
    ]);
    $pizza = DB::table('pizzas')->insertGetid([
        'user_id' => $idTenant,
        'nome' => "Peperonni",
        'descricao' => 'Mussarela, peperoni e cebola.',
        'grande' => 62,
        'broto' => 42
    ]);
    $pizza = DB::table('pizzas')->insertGetid([
        'user_id' => $idTenant,
        'nome' => "Napolitana",
        'descricao' => 'Mussarela, presunto, tomate e cebola.',
        'grande' => 60.00,
        'broto' => 40
    ]);
    $pizza = DB::table('pizzas')->insertGetid([
        'user_id' => $idTenant,
        'nome' => "Frango Catupiry",
        'descricao' => 'Mussarela, frango desfiado e catupiry.',
        'grande' => 60.00,
        'broto' => 40
    ]);
    $pizza = DB::table('pizzas')->insertGetid([
        'user_id' => $idTenant,
        'nome' => "Quatro queijos",
        'descricao' => 'Mussarela, provolone, parmesão e catupiry.',
        'grande' => 62.00,
        'broto' => 42.00
    ]);
    $pizza = DB::table('pizzas')->insertGetid([
        'user_id' => $idTenant,
        'nome' => "Calabresa",
        'descricao' => 'Mussarela, calabresa e cebola.',
        'grande' => 64.00,
        'broto' => 44.00
    ]);
    $pizza = DB::table('pizzas')->insertGetid([
        'user_id' => $idTenant,
        'nome' => "Marguerita",
        'descricao' => 'Mussarela, tomate, parmesão, e manjericão.',
        'grande' => 60.00,
        'broto' => 40.00
    ]);
    //CATEGORIAS
    $idCategoria = DB::table('categorias')->insertGetid([
        'nome' => "Pizzas",
        'user_id' => $idTenant
    ]);
        $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Pizza",
            'descricao' => 'Escolha o tamanho e o sabor de sua pizza.',
            'preco' => 40.00,
            'ativo' => true,
            'pizza' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/pizza-da-bella-massa.png'
        ]);
    $idCategoria = DB::table('categorias')->insertGetid([
        'nome' => "Bebidas",
        'user_id' => $idTenant
    ]);
         $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Refrigerante 200ml",
            'descricao' => 'Refrigerante pet 200ml diversos sabores',
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
            'descricao' => 'Refrigerante pet 600ml diversos sabores',
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
            'descricao' => 'Refrigerante pet 2L diversos sabores',
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

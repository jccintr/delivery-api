<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class PizzamasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = 'pizzamaster';
        $idTenant = DB::table('users')->insertGetid([
            'name' => "Pizza Master",
            'email' => "pizzamaster@gmail.com",
            'password' => Hash::make('123'),
            'role' => 2,
            'telefone' => '35-99912-2008',
            'logradouro' =>'Av. Cel Braz,375',
            'bairro' => 'Centro',
            'cidade_id' => 1,
            //'chave_pix' => 'jccintr@gmail.com',
            //'favorecido_pix' => 'Julio Cesar',
            'cor_fundo' => '#060057',
            'cor_texto' => '#FFFFFF',
            'tempo_espera' => '30 a 45min',
            'slug' => $slug,
            'aberto' => true,
            'logotipo' => 'imagens/'.$slug.'/logo/pizza-master-logo.png'
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
            'grande' => 40.00,
            'broto' => 20.00
        ]);
        $pizza = DB::table('pizzas')->insertGetid([
            'user_id' => $idTenant,
            'nome' => "Portuguesa",
            'descricao' => 'Mussarela, presunto, ovo e cebola.',
            'grande' => 40.00,
            'broto' => 20.00
        ]);
        $pizza = DB::table('pizzas')->insertGetid([
            'user_id' => $idTenant,
            'nome' => "Peperonni",
            'descricao' => 'Mussarela, peperoni e cebola.',
            'grande' => 40.00,
            'broto' => 20.00
        ]);
        $pizza = DB::table('pizzas')->insertGetid([
            'user_id' => $idTenant,
            'nome' => "Napolitana",
            'descricao' => 'Mussarela, presunto, tomate e cebola.',
            'grande' => 40.00,
            'broto' => 20.00
        ]);
        $pizza = DB::table('pizzas')->insertGetid([
            'user_id' => $idTenant,
            'nome' => "Frango Catupiry",
            'descricao' => 'Mussarela, frango desfiado e catupiry.',
            'grande' => 40.00,
            'broto' => 20.00
        ]);
        $pizza = DB::table('pizzas')->insertGetid([
            'user_id' => $idTenant,
            'nome' => "Quatro queijos",
            'descricao' => 'Mussarela, provolone, parmesão e catupiry.',
            'grande' => 42.00,
            'broto' => 22.00
        ]);
        $pizza = DB::table('pizzas')->insertGetid([
            'user_id' => $idTenant,
            'nome' => "Calabresa",
            'descricao' => 'Mussarela, calabresa e cebola.',
            'grande' => 40.00,
            'broto' => 20.00
        ]);
        $pizza = DB::table('pizzas')->insertGetid([
            'user_id' => $idTenant,
            'nome' => "Marguerita",
            'descricao' => 'Mussarela, tomate, parmesão, e manjericão.',
            'grande' => 40.00,
            'broto' => 20.00
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
                'descricao' => 'Escolha o tamanho e sabor da sua pizza',
                'preco' => 0.00,
                'ativo' => true,
                'pizza' => true
                //'imagem' => 'imagens/'.$slug.'/produtos/coca-cola-lata.jpg'
            ]);
        $idCategoria = DB::table('categorias')->insertGetid([
            'nome' => "Bebidas",
            'user_id' => $idTenant
        ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Coca-cola lata",
                'descricao' => 'Refrigerante Coca-cola lata 350ml.',
                'preco' => 5.00,
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/coca-cola-lata.jpg'
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Coca-cola 600ml",
                'descricao' => 'Refrigerante Coca-cola 600ml.',
                'preco' => 8.00,
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/coca-cola-600.png'
            ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Coca-cola 2 Litros",
                'descricao' => 'Refrigerante Coca-cola 2 litros.',
                'preco' => 8.00,
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/coca-cola-2litros.jpg'
            ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class VillasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = 'villas';
        $idTenant = DB::table('users')->insertGetid([
            'name' => "Villas Hamburgueria",
            'email' => "villas@gmail.com",
            'password' => Hash::make('123'),
            'role' => 2,
            'telefone' => '35-99970-9878',
            'logradouro' =>'Av. Cel. Francisco Braz,372',
            'bairro' => 'Centro',
            'cidade_id' => 1,
            'cor_fundo' => '#100f0d',
            'cor_texto' => '#f9b60d',
            'chave_pix' => 'villas@gmail.com',
            'favorecido_pix' => 'Favorecido',
            'tempo_espera' => '15 a 30min',
            'slug' => $slug,
            'logotipo' => 'imagens/'.$slug.'/logo/villas-logotipo.png'
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
            // inicio categorias
            $idCategoria = DB::table('categorias')->insertGetid([
                'nome' => "Burguers Artesanais",
                'user_id' => $idTenant
            ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "American's",
                    'descricao' => 'Pão brioche, maionese da casa, salada, cebola roxa, calabresa e hambúrguer 150g.',
                    'preco' => 19.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Alabama",
                    'descricao' => 'Pão brioche, barbacue, bacon, cebola caramelizada, cream cheese, queijo prato e hambúrguer 150g.',
                    'preco' => 20.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Bull",
                    'descricao' => 'Pão brioche, maionese da casa, bacon, ovo, cheddar, queijo prato e hambúrguer 150g.',
                    'preco' => 19.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Chicken",
                    'descricao' => 'Pão brioche, maionese da casa, salada, frango empanado e queijo prato.',
                    'preco' => 18.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Colorado",
                    'descricao' => 'Pão brioche, maionese da casa, salada, mussarela empanada e hambúrguer 150g.',
                    'preco' => 22.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Dalla's",
                    'descricao' => 'Pão brioche, maionese da casa, bacon, batata frita, cheddar empanado e hambúrguer 150g.',
                    'preco' => 21.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Doritos",
                    'descricao' => 'Pão brioche, maionese da casa, bacon, doritos, cheddar, queijo prato e hambúrguer 150g.',
                    'preco' => 20.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Filadelphia",
                    'descricao' => 'Pão brioche, maionese da casa, salada, vinagrete, cebola roxa, costela bovina desfiada e mussarela.',
                    'preco' => 18.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Mega Braz",
                    'descricao' => 'Pão brioche, maionese da casa, salada, doritos, calabresa, bacon, cheddar, mussarela e hambúrguer de picanha.',
                    'preco' => 19.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Onion Texas",
                    'descricao' => 'Pão brioche, maionese da casa, bacon, anéis de cebola empanado, queijo prato e hambúrguer 150g.',
                    'preco' => 18.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Salada Texas",
                    'descricao' => 'Pão brioche, maionese da casa, salada, cebola roxa, calabresa e hambúrguer 150g.',
                    'preco' => 18.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Smash Bonzinho",
                    'descricao' => 'Pão brioche, maionese da casa, 3 hambúrgueres smash, bacon e queijo prato.',
                    'preco' => 20.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Smash Malvado",
                    'descricao' => 'Pão brioche, maionese da casa, 3 hambúrgueres smash, catupiry scala, bacon e queijo prato.',
                    'preco' => 23.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Veg",
                    'descricao' => 'Pão brioche, maionese da casa, salada, cebola roxa, hambúrguer vegetariano e queijo prato.',
                    'preco' => 20.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Vulcano",
                    'descricao' => 'Pão brioche, maionese da casa, 2 hambúrgueres smash e molho de cheddar cremoso.',
                    'preco' => 23.00,
                    'ativo' => true
                ]);
            $idCategoria = DB::table('categorias')->insertGetid([
                'nome' => "Burguers Tradicionais",
                'user_id' => $idTenant
            ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Misto",
                    'descricao' => 'Pão, mussarela, presunto e tomate.',
                    'preco' => 8.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Americano",
                    'descricao' => 'Pão, maionese, batata palha, milho, salada, ovo, presunto e mussarela.',
                    'preco' => 13.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "X Burguer",
                    'descricao' => 'Pão, maionese, batata palha, milho, hambúrguer, presunto e mussarela.',
                    'preco' => 11.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "X Bacon",
                    'descricao' => 'Pão, maionese, batata palha, milho, salada, hambúrguer, presunto e mussarela.',
                    'preco' => 16.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "X Egg",
                    'descricao' => 'Pão, maionese, batata palha, milho, salada, ovo, hambúrguer e mussarela.',
                    'preco' => 14.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "X Egg Bacon",
                    'descricao' => 'Pão, maionese, batata palha, milho, salada, ovo, bacon, hambúrguer e mussarela.',
                    'preco' => 17.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "X Calabresa",
                    'descricao' => 'Pão, maionese, batata palha, milho, salada, calabresa, cebola, presunto, hambúrguer e mussarela.',
                    'preco' => 16.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "X Calabacon",
                    'descricao' => 'Pão, maionese, batata palha, milho, salada, calabresa, cebola, presunto, hambúrguer, bacon e mussarela.',
                    'preco' => 17.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "X Egg Calabresa",
                    'descricao' => 'Pão, maionese, batata palha, milho, salada, calabresa, cebola, presunto, hambúrguer, ovo e mussarela.',
                    'preco' => 17.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "X Salada",
                    'descricao' => 'Pão, maionese, batata palha, milho, salada, hambúrguer e mussarela.',
                    'preco' => 14.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "X Rango",
                    'descricao' => 'Pão, maionese, batata palha, milho, ovo, bacon, presunto, hambúrguer e mussarela.',
                    'preco' => 16.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Picanha Salada",
                    'descricao' => 'Pão brioche, batata palha, salada, hambúrguer de picanha e queijo prato.',
                    'preco' => 17.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Picanha Premium",
                    'descricao' => 'Pão brioche, batata palha, bacon, ovo, cheddar, hambúrguer de picanha e queijo prato.',
                    'preco' => 19.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "Picanha Fries",
                    'descricao' => 'Pão, maionese, batata palha, hambúrguer de picanha e queijo prato.',
                    'preco' => 19.00,
                    'ativo' => true
                ]);
                $produto = DB::table('produtos')->insertGetid([
                    'user_id' => $idTenant,
                    'categoria_id' => $idCategoria,
                    'nome' => "X Tudo Big",
                    'descricao' => 'Pão, maionese, batata palha, milho, salada, ovo, calabresa, bacon, presunto, 2 hambúrgueres e mussarela.',
                    'preco' => 21.00,
                    'ativo' => true
                ]);
                $idCategoria = DB::table('categorias')->insertGetid([
                    'nome' => "Panquecas",
                    'user_id' => $idTenant
                ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Panqueca Calabresa",
                        'descricao' => 'Calabresa, cebola, tomate picado, batata palha e molho de tomate.',
                        'preco' => 26.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Panqueca Mista",
                        'descricao' => 'Mussarela, presunto, batata palha e molho de tomate.',
                        'preco' => 22.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Panqueca Bolonhesa",
                        'descricao' => 'Carne moída, mussarela, batata palha e molho de tomate.',
                        'preco' => 33.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Panqueca Brócolis",
                        'descricao' => 'Bacon, brócolis, mussarela, batata palha e molho de tomate.',
                        'preco' => 28.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Panqueca Bolonhesa Cream",
                        'descricao' => 'Carne moída, mussarela, catupiry, batata palha e molho de tomate.',
                        'preco' => 35.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Panqueca Bolonhesa com Milho",
                        'descricao' => 'Carne moída, mussarela, milho, batata palha e molho de tomate.',
                        'preco' => 31.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Panqueca Especial",
                        'descricao' => 'Carne moída, bacon, calabresa, mussarela, milho, batata palha e molho de tomate.',
                        'preco' => 35.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Panqueca Frango com Bacon",
                        'descricao' => 'Mussarela, bacon, frango, catupiry, milho, batata palha e molho de tomate.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Panqueca Caipira",
                        'descricao' => 'Mussarela, bacon, frango, calabresa, milho, batata palha e molho de tomate.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Panqueca Frango com Cheddar",
                        'descricao' => 'Mussarela, frango, batata palha e molho de tomate.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Panqueca Contra Filé",
                        'descricao' => 'Tiras de contra filé, mussarela, cream cheese, batata palha e molho de tomate.',
                        'preco' => 50.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Panqueca Strogonoff de Frango",
                        'descricao' => 'Strogonoff de frango, milho, champignon, batata palha e molho de tomate.',
                        'preco' => 40.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Panqueca Romeu e Julieta",
                        'descricao' => 'Goiabada e queijo.',
                        'preco' => 35.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Panqueca Confete",
                        'descricao' => 'Creme de avelã, confete e leite condensado.',
                        'preco' => 38.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Panqueca Doce de Leita",
                        'descricao' => 'Doce de leite e canela.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);


    }
}

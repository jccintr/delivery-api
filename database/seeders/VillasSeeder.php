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
            'aberto' => true,
            'logotipo' => 'imagens/'.$slug.'/logo/villas-logotipo.png'
        ]);
            //taxas
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Açude',
                'valor' => 10.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Alegre de Baixo',
                'valor' => 15.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Alegre de Cima',
                'valor' => 18.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Alegre Pé do Morro',
                'valor' => 20.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Alto da Glória',
                'valor' => 3.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Alvorada',
                'valor' => 3.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Anhumas',
                'valor' => 15.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Anhumas (depois do banhado)',
                'valor' => 18.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Anzol',
                'valor' => 12.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Aparecida',
                'valor' => 3.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Araújo',
                'valor' => 15.50
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Arrozal',
                'valor' => 15.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Avenida',
                'valor' => 3.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Banhado',
                'valor' => 10.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Bengalal',
                'valor' => 10.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Boa Vitória',
                'valor' => 15.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Boa Vitória (Bar da Camila)',
                'valor' => 15.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Boa Vitória (Gessinho)',
                'valor' => 15.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Bom Sucesso',
                'valor' => 12.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Bom Sucesso (até no final)',
                'valor' => 15.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Cachoeirinha',
                'valor' => 12.00
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
                'bairro' => 'Chácara Abel Pinheiro',
                'valor' => 3.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Colibri',
                'valor' => 10.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Cruz Vera',
                'valor' => 15.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Estação',
                'valor' => 3.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Estação Dias',
                'valor' => 12.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Farias',
                'valor' => 12.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Ferroviários',
                'valor' => 3.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Floresta',
                'valor' => 20.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Frei Orestes',
                'valor' => 5.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Gomeiras',
                'valor' => 17.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Horizonte Azul',
                'valor' => 3.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Hotél Fazenda Santa Helena',
                'valor' => 10.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Hotél São Gabriel',
                'valor' => 5.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Japão',
                'valor' => 25.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Jardim Vargem Grande',
                'valor' => 3.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Lagos da Serra',
                'valor' => 8.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Loba',
                'valor' => 5.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Luminosa',
                'valor' => 25.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'N. S. Aparecida',
                'valor' => 3.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Paiól Velho',
                'valor' => 15.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Parque de Exposições',
                'valor' => 4.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Portão',
                'valor' => 20.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Poses',
                'valor' => 20.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Praça da Estação',
                'valor' => 3.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Prainha',
                'valor' => 15.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Retiro das Anhumas',
                'valor' => 20.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Rodovia',
                'valor' => 3.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Santa Luzia',
                'valor' => 6.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'São Francisco',
                'valor' => 3.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'São Gabriel',
                'valor' => 12.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'São Gabriel BA',
                'valor' => 3.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'São Gabriel (Bar da Lúcia)',
                'valor' => 15.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'São Gabriel (Piraquara)',
                'valor' => 10.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'São Gabriel (Vale Girassol)',
                'valor' => 8.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'São Rafael',
                'valor' => 20.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Serra dos Mendonça',
                'valor' => 8.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Serra dos Torres',
                'valor' => 10.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Serrinha',
                'valor' => 10.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Teodoros',
                'valor' => 12.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Tijuco Preto',
                'valor' => 3.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Tronco',
                'valor' => 20.00
            ]);
            DB::table('taxas')->insert([
                'user_id' => $idTenant,
                'bairro' => 'Vargem Grande',
                'valor' => 3.00
            ]);
            // fim das taxas
            
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
                $idCategoria = DB::table('categorias')->insertGetid([
                    'nome' => "Porções",
                    'user_id' => $idTenant
                ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Porção Anéis de Cebola",
                        'descricao' => 'Porção de Anéis de Cebola.',
                        'preco' => 28.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Porção Batata frita Simples",
                        'descricao' => 'Porção de Batatas fritas.',
                        'preco' => 18.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Porção Batata frita com Queijo e Bacon",
                        'descricao' => 'Porção de Batatas fritas com queijo e bacon.',
                        'preco' => 25.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Porção Bolinho Mineiro",
                        'descricao' => 'Porção de Bolinho Mineiro.',
                        'preco' => 22.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Porção Calabresa",
                        'descricao' => 'Porção de Calabresa com Cebola.',
                        'preco' => 20.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Porção Contre Filé",
                        'descricao' => 'Porção de Contra Filé Acebolado.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Porção Contra Filé com Fritas",
                        'descricao' => 'Porção de Contra Filé com Fritas.',
                        'preco' => 65.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Porção Filé de Tilápia",
                        'descricao' => 'Porção Filé de Tilápia.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Porção Frango à Passarinho",
                        'descricao' => 'Porção de Frango à Passarinho.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Porção Frango Empanado",
                        'descricao' => 'Porção de Frango Empanado.',
                        'preco' => 32.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Porção Frios",
                        'descricao' => 'Porção de Frios.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Porção Linguiça Toscana",
                        'descricao' => 'Porção de Linguiça Toscana.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Porção Pastél de Milho",
                        'descricao' => 'Porção de Pastél de Milho.',
                        'preco' => 22.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => " Porção Provolone à Milanesa",
                        'descricao' => 'Porção de Provolone à Milanesa.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Porção Salame",
                        'descricao' => 'Porção de Salame fatiado.',
                        'preco' => 25.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Porção Torresmo",
                        'descricao' => 'Porção de Torresmo.',
                        'preco' => 28.00,
                        'ativo' => true
                    ]);

                // INICIO PIZZAS GRANDES    
                $idCategoria = DB::table('categorias')->insertGetid([
                    'nome' => "Pizzas Grandes",
                    'user_id' => $idTenant
                ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Alho e Óleo",
                        'descricao' => 'Molho, mussarela, alho, óleo e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Americana",
                        'descricao' => 'Molho, mussarela, ovo, bacon, milho e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza À Moda da Casa",
                        'descricao' => 'Molho, mussarela, calabresa, bacon, catupiry e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Atum",
                        'descricao' => 'Molho, mussarela, atum, cebola, azeitona, catupiry e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Bacon",
                        'descricao' => 'Molho, mussarela, bacon e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Batata",
                        'descricao' => 'Molho, mussarela, frango, batata palha, catupiry e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Brócolis",
                        'descricao' => 'Molho, mussarela, brócolis, azeitona e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Caipira",
                        'descricao' => 'Molho, mussarela, frango, milho e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Calabresa",
                        'descricao' => 'Molho, mussarela, calabresa, cebola e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Calabresa com Catupiry",
                        'descricao' => 'Molho, mussarela, calabresa, catupiry e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Calabresa com Cheddar",
                        'descricao' => 'Molho, mussarela, calabresa, cheddar e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Calabresa com Cebola Roxa",
                        'descricao' => 'Molho, mussarela, calabresa, cebola roxa e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Calabresa Mineira",
                        'descricao' => 'Molho, mussarela, calabresa, milho, bacon e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => " Pizza Carioca (Brasileira)",
                        'descricao' => 'Molho, mussarela, atum, parmesão, cebola, pimentão, cheiro verde e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Cinco Queijos",
                        'descricao' => 'Molho, mussarela, provolone, parmesão, gorgonzola, catupiry e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Champignon",
                        'descricao' => 'Molho, mussarela, bacon, champignon e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Crock",
                        'descricao' => 'Molho, mussarela, presunto, bacon, champignon e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Fazendeira",
                        'descricao' => 'Molho, mussarela, frango, milho, bacon, catupiry e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Francesa",
                        'descricao' => 'Molho, mussarela, presunto, bacon e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Frango com Mussarela",
                        'descricao' => 'Molho, mussarela, frango, catupiry e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Frango com Cheddar",
                        'descricao' => 'Molho, mussarela, frango, milho, calabresa, cheddar e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Frango Caipira",
                        'descricao' => 'Molho, mussarela, peito de peru, palmito, tomate e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Gorgonzola",
                        'descricao' => 'Molho, mussarela, gorgonzola e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Grega",
                        'descricao' => 'Molho, mussarela, lombo, palmito, cebola e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Italiana",
                        'descricao' => 'Molho, mussarela, presunto, cebola, milho, ervilha e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Lombo com Mussarela",
                        'descricao' => 'Molho, mussarela, lombo e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Lombo com Catupiry",
                        'descricao' => 'Molho, mussarela, lombo, catupiry e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Lombo com Champignon",
                        'descricao' => 'Molho, mussarela, lombo, champignon e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Lombo com Cheddar",
                        'descricao' => 'Molho, mussarela, lombo, cheddar e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Marguerita",
                        'descricao' => 'Molho, mussarela, parmesão, manjericão, alho e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Maiale",
                        'descricao' => 'Molho, mussarela, bacon, lombo, calabresa, catupiry e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Marina",
                        'descricao' => 'Molho, mussarela, provolone, atum, tomate e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Mexicana",
                        'descricao' => 'Molho, mussarela, ovo, calabresa, pimenta, cebola e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Mista",
                        'descricao' => 'Molho, mussarela, presunto, tomate e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Mussarela",
                        'descricao' => 'Molho, mussarela, tomate e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Napolitana",
                        'descricao' => 'Molho, mussarela, parmesão, aolho, tomate e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Palmito",
                        'descricao' => 'Molho, mussarela, palmito e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Palmito Especial",
                        'descricao' => 'Molho, mussarela, bacon, milho, palmito e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Paulista",
                        'descricao' => 'Molho, mussarela, palmito, ervilha e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Paulista Especial",
                        'descricao' => 'Molho, mussarela, calabresa, bacon, palmito, ervilha, milho e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Peruana",
                        'descricao' => 'Molho, mussarela, atum, cebola, ervilha e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Portuguesa",
                        'descricao' => 'Molho, mussarela, presunto, ovo, ervilha, cebola e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Portuguesa com Calabresa",
                        'descricao' => 'Molho, mussarela, calabresa, ovo, ervilha, cebola e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Portuguesa Especial",
                        'descricao' => 'Molho, mussarela, presunto, ovo, ervilha, milho, cebola e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Laranjinha",
                        'descricao' => 'Molho, mussarela, bacon, cheddar, doritos e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Light",
                        'descricao' => 'Molho, mussarela, palmito, champignon, tomate e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Provolone",
                        'descricao' => 'Molho, mussarela, provolone, tomate e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Quatro Queijos",
                        'descricao' => 'Molho, mussarela, provolone, parmesão, catupiry e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Romana",
                        'descricao' => 'Molho, mussarela, ovo, bacon, tomate e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Siciliana",
                        'descricao' => 'Molho, mussarela, presunto, milho, ervilha e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Suiça",
                        'descricao' => 'Molho, mussarela, gorgonzola, palmito e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Toscana",
                        'descricao' => 'Molho, mussarela, calabresa, cebola, tomate e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Texana",
                        'descricao' => 'Molho, mussarela, bacon, frango, calabresa e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Vegetariana",
                        'descricao' => 'Molho, mussarela, brócolis, palmito, champignon, tomate e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Viena",
                        'descricao' => 'Molho, mussarela, lombo, champignon, catupiry, tomate e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Tomate Seco",
                        'descricao' => 'Molho, mussarela, tomate seco, bacon e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Peito de Peru",
                        'descricao' => 'Molho, mussarela, peito de peru, palmito, tomate e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Peperoni",
                        'descricao' => 'Molho, mussarela, peperoni, cheddar, cebola, pimentão e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Nordestina",
                        'descricao' => 'Molho, mussarela, carne seca, tomate, cebola e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Hot Dog",
                        'descricao' => 'Molho, mussarela, salsicha, batata palha, milho e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Sardinha",
                        'descricao' => 'Molho, mussarela, sardinha, cheiro verde e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Quatro Queijos com Frango e Bacon",
                        'descricao' => 'Molho, mussarela, provolone, parmesão, catupiry, frango, bacon e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Strogonoff",
                        'descricao' => 'Molho, mussarela, frango, milho, champignon, batata palha e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Salame",
                        'descricao' => 'Molho, mussarela, salame, provolone e orégano.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Quatro estações",
                        'descricao' => 'Escolha QUATRO ingredientes de seu desejo.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Villas",
                        'descricao' => 'Escolha CINCO ingredientes de seu desejo.',
                        'preco' => 45.00,
                        'ativo' => true
                    ]);
                    // FIM PIZZAS GRANDES
                    // INICIO PIZZAS BROTO    
                $idCategoria = DB::table('categorias')->insertGetid([
                    'nome' => "Pizzas Broto",
                    'user_id' => $idTenant
                ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Alho e Óleo (broto)",
                        'descricao' => 'Molho, mussarela, alho, óleo e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Americana (broto)",
                        'descricao' => 'Molho, mussarela, ovo, bacon, milho e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza À Moda da Casa (broto)",
                        'descricao' => 'Molho, mussarela, calabresa, bacon, catupiry e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Atum (broto)",
                        'descricao' => 'Molho, mussarela, atum, cebola, azeitona, catupiry e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Bacon (broto)",
                        'descricao' => 'Molho, mussarela, bacon e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Batata (broto)",
                        'descricao' => 'Molho, mussarela, frango, batata palha, catupiry e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Brócolis (broto)",
                        'descricao' => 'Molho, mussarela, brócolis, azeitona e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Caipira (broto)",
                        'descricao' => 'Molho, mussarela, frango, milho e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Calabresa (broto)",
                        'descricao' => 'Molho, mussarela, calabresa, cebola e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Calabresa com Catupiry (broto)",
                        'descricao' => 'Molho, mussarela, calabresa, catupiry e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Calabresa com Cheddar (broto)",
                        'descricao' => 'Molho, mussarela, calabresa, cheddar e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Calabresa com Cebola Roxa (broto)",
                        'descricao' => 'Molho, mussarela, calabresa, cebola roxa e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Calabresa Mineira (broto)",
                        'descricao' => 'Molho, mussarela, calabresa, milho, bacon e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Carioca Brasileira (broto)",
                        'descricao' => 'Molho, mussarela, atum, parmesão, cebola, pimentão, cheiro verde e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Cinco Queijos (broto)",
                        'descricao' => 'Molho, mussarela, provolone, parmesão, gorgonzola, catupiry e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Champignon (broto)",
                        'descricao' => 'Molho, mussarela, bacon, champignon e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Crock (broto)",
                        'descricao' => 'Molho, mussarela, presunto, bacon, champignon e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Fazendeira (broto)",
                        'descricao' => 'Molho, mussarela, frango, milho, bacon, catupiry e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Francesa (broto)",
                        'descricao' => 'Molho, mussarela, presunto, bacon e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Frango com Mussarela (broto)",
                        'descricao' => 'Molho, mussarela, frango, catupiry e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Frango com Cheddar (broto)",
                        'descricao' => 'Molho, mussarela, frango, milho, calabresa, cheddar e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Frango Caipira (broto)",
                        'descricao' => 'Molho, mussarela, peito de peru, palmito, tomate e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Gorgonzola (broto)",
                        'descricao' => 'Molho, mussarela, gorgonzola e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Grega (broto)",
                        'descricao' => 'Molho, mussarela, lombo, palmito, cebola e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Italiana (broto)",
                        'descricao' => 'Molho, mussarela, presunto, cebola, milho, ervilha e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Lombo com Mussarela (broto)",
                        'descricao' => 'Molho, mussarela, lombo e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Lombo com Catupiry (broto)",
                        'descricao' => 'Molho, mussarela, lombo, catupiry e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Lombo com Champignon (broto)",
                        'descricao' => 'Molho, mussarela, lombo, champignon e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Lombo com Cheddar (broto)",
                        'descricao' => 'Molho, mussarela, lombo, cheddar e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Marguerita (broto)",
                        'descricao' => 'Molho, mussarela, parmesão, manjericão, alho e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Maiale (broto)",
                        'descricao' => 'Molho, mussarela, bacon, lombo, calabresa, catupiry e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Marina (broto)",
                        'descricao' => 'Molho, mussarela, provolone, atum, tomate e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Mexicana (broto)",
                        'descricao' => 'Molho, mussarela, ovo, calabresa, pimenta, cebola e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Mista (broto)",
                        'descricao' => 'Molho, mussarela, presunto, tomate e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Mussarela (broto)",
                        'descricao' => 'Molho, mussarela, tomate e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Napolitana (broto)",
                        'descricao' => 'Molho, mussarela, parmesão, aolho, tomate e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Palmito (broto)",
                        'descricao' => 'Molho, mussarela, palmito e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Palmito Especial (broto)",
                        'descricao' => 'Molho, mussarela, bacon, milho, palmito e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Paulista (broto)",
                        'descricao' => 'Molho, mussarela, palmito, ervilha e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Paulista Especial (broto)",
                        'descricao' => 'Molho, mussarela, calabresa, bacon, palmito, ervilha, milho e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Peruana (broto)",
                        'descricao' => 'Molho, mussarela, atum, cebola, ervilha e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Portuguesa (broto)",
                        'descricao' => 'Molho, mussarela, presunto, ovo, ervilha, cebola e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Portuguesa com Calabresa (broto)",
                        'descricao' => 'Molho, mussarela, calabresa, ovo, ervilha, cebola e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Portuguesa Especial (broto)",
                        'descricao' => 'Molho, mussarela, presunto, ovo, ervilha, milho, cebola e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Laranjinha (broto)",
                        'descricao' => 'Molho, mussarela, bacon, cheddar, doritos e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Light (broto)",
                        'descricao' => 'Molho, mussarela, palmito, champignon, tomate e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Provolone (broto)",
                        'descricao' => 'Molho, mussarela, provolone, tomate e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Quatro Queijos (broto)",
                        'descricao' => 'Molho, mussarela, provolone, parmesão, catupiry e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Romana (broto)",
                        'descricao' => 'Molho, mussarela, ovo, bacon, tomate e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Siciliana (broto)",
                        'descricao' => 'Molho, mussarela, presunto, milho, ervilha e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Suiça (broto)",
                        'descricao' => 'Molho, mussarela, gorgonzola, palmito e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Toscana (broto)",
                        'descricao' => 'Molho, mussarela, calabresa, cebola, tomate e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Texana (broto)",
                        'descricao' => 'Molho, mussarela, bacon, frango, calabresa e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Vegetariana (broto)",
                        'descricao' => 'Molho, mussarela, brócolis, palmito, champignon, tomate e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Viena (broto)",
                        'descricao' => 'Molho, mussarela, lombo, champignon, catupiry, tomate e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Tomate Seco (broto)",
                        'descricao' => 'Molho, mussarela, tomate seco, bacon e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Peito de Peru (broto)",
                        'descricao' => 'Molho, mussarela, peito de peru, palmito, tomate e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Peperoni (broto)",
                        'descricao' => 'Molho, mussarela, peperoni, cheddar, cebola, pimentão e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Nordestina (broto)",
                        'descricao' => 'Molho, mussarela, carne seca, tomate, cebola e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Hot Dog (broto)",
                        'descricao' => 'Molho, mussarela, salsicha, batata palha, milho e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Sardinha (broto)",
                        'descricao' => 'Molho, mussarela, sardinha, cheiro verde e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Quatro Queijos com Frango e Bacon (broto)",
                        'descricao' => 'Molho, mussarela, provolone, parmesão, catupiry, frango, bacon e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Strogonoff (broto)",
                        'descricao' => 'Molho, mussarela, frango, milho, champignon, batata palha e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Salame (broto)",
                        'descricao' => 'Molho, mussarela, salame, provolone e orégano.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Quatro estações (broto)",
                        'descricao' => 'Escolha QUATRO ingredientes de seu desejo.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    $produto = DB::table('produtos')->insertGetid([
                        'user_id' => $idTenant,
                        'categoria_id' => $idCategoria,
                        'nome' => "Pizza Villas (broto)",
                        'descricao' => 'Escolha CINCO ingredientes de seu desejo.',
                        'preco' => 30.00,
                        'ativo' => true
                    ]);
                    // FIM PIZZAS BROTO

                    


    }
}

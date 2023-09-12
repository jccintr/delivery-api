<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CorujaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slug = 'corujao';
        $idTenant = DB::table('users')->insertGetid([
            'name' => "Corujão Lanches",
            'email' => "corujao@gmail.com",
            'password' => Hash::make('123'),
            'role' => 2,
            'telefone' => '35-98468-5854',
            'logradouro' =>'Av. Cel. Francisco Braz,34',
            'bairro' => 'Centro',
            'cidade_id' => 1,
            //'chave_pix' => 'jccintr@gmail.com',
            //'favorecido_pix' => 'Julio Cesar',
            'cor_fundo' => '#f6a426',
            'cor_texto' => '#ac3d43',
            'tempo_espera' => '15 a 30min',
            'slug' => $slug,
            'aberto' => true,
            'logotipo' => 'imagens/'.$slug.'/logo/corujao.png'
        ]);
         // taxas
         DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Alegre de Baixo',
            'valor' => 15.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Alegre de Cima',
            'valor' => 20.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Alegre Pé do Morro',
            'valor' => 15.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Alto da Glória',
            'valor' => 2.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Alvorada',
            'valor' => 2.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Anhumas',
            'valor' => 15.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Anhumas (depois do banhado)',
            'valor' => 20.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Anzol',
            'valor' => 15.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Aparecida',
            'valor' => 2.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Araújo',
            'valor' => 20.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Arrozal',
            'valor' => 10.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Avenida',
            'valor' => 2.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Banhado',
            'valor' => 15.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Bengalal',
            'valor' => 8.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Boa Vitória',
            'valor' => 10.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Boa Vitória (Bar da Camila)',
            'valor' => 10.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Boa Vitória (Gessinho)',
            'valor' => 12.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Bom Sucesso (até no final)',
            'valor' => 20.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Can-Can',
            'valor' => 7.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Centro',
            'valor' => 2.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Cruz Vera',
            'valor' => 18.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Estação',
            'valor' => 2.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Estação Dias',
            'valor' => 15.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Farias',
            'valor' => 18.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Ferroviários',
            'valor' => 2.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Frei Orestes',
            'valor' => 6.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Horizonte Azul',
            'valor' => 2.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Hotél São Gabriel',
            'valor' => 7.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Japão',
            'valor' => 25.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Jardim Vargem Grande',
            'valor' => 2.00
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
            'bairro' => 'N. S. Aparecida',
            'valor' => 2.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Parque de Exposições',
            'valor' => 5.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Praça da Estação',
            'valor' => 2.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Prainha',
            'valor' => 10.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'São Francisco',
            'valor' => 2.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'São Gabriel',
            'valor' => 8.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'São Gabriel BA',
            'valor' => 8.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'São Gabriel (Bar da Lúcia)',
            'valor' => 9.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'São Gabriel (Piraquara)',
            'valor' => 9.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'São Gabriel (Vale Girassol)',
            'valor' => 8.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'São Rafael',
            'valor' => 10.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Serra dos Mendonça',
            'valor' => 8.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Tijuco Preto',
            'valor' => 2.00
        ]);
        DB::table('taxas')->insert([
            'user_id' => $idTenant,
            'bairro' => 'Vargem Grande',
            'valor' => 2.00
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
            'horario' => 'Fechado'
        ]);
        DB::table('horarios')->insert([
            'user_id' => $idTenant,
            'dia' => 3,
            'horario' => 'Fechado'
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
        $refrigerante_200ml = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo ref. 200ml',
            'opcoes' => 'Coca-Cola;Guaraná Antárctica'
        ]);
        $refrigerante_lata = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo ref. lata',
            'opcoes' => 'Coca-Cola;Guaraná Antárctica;Fanta Laranja;Fanta Uva'
        ]);
        $refrigerante_600ml = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo ref. 600ml',
            'opcoes' => 'Coca-Cola;Guaraná Antárctica;Fanta Laranja;Fanta Uva'
        ]);
        $refrigerante_2l = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tipo ref. 2L',
            'opcoes' => 'Coca-Cola;Fanta Laranja;Fanta Uva'
        ]);
        $suco_del_valle_290ml = DB::table('obrigatorios')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Sabor Suco',
            'opcoes' => 'Uva;Pêssego;Goiaba'
        ]);
        // adicionais
        $hamburguer = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Hambúrguer',
            'valor' => 3.00
        ]);
        $queijo = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Mussarela',
            'valor' => 2.00
        ]);
        $presunto = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Presunto',
            'valor' => 2.00
        ]);
        $ovo = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Ovo',
            'valor' => 2.00
        ]);
        $bacon = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Bacon',
            'valor' => 4.00
        ]);
        $calabresa = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Calabresa',
            'valor' => 4.00
        ]);
        $tomate = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Tomate',
            'valor' => 2.00
        ]);
        $alface = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Alface',
            'valor' => 1.00
        ]);
        $linguica = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Linguiça',
            'valor' => 4.00
        ]);
        $frango = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Frango',
            'valor' => 4.00
        ]);
        $milho = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Milho',
            'valor' => 2.00
        ]);
        $salsicha = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Salsicha',
            'valor' => 3.00
        ]);
        $cheddar = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Cheddar',
            'valor' => 2.00
        ]);
        $queijo_ralado = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Queijo Ralado',
            'valor' => 2.00
        ]);
        $oregano = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Orégano',
            'valor' => 1.00
        ]);
        $molho_branco = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Molho Branco',
            'valor' => 4.00
        ]);
        $catupiry = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Catupiry',
            'valor' => 2.00
        ]);
        $cebolinha = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Cebolinha',
            'valor' => 1.00
        ]);
        $cebola = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Cebola',
            'valor' => 2.00
        ]);
        $carne_moida = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Carne Moída com molho',
            'valor' => 4.00
        ]);
        $batata_palha = DB::table('adicionais')->insertGetid([
            'user_id' => $idTenant,
            'nome' => 'Batata Palha',
            'valor' => 2.00
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
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Salada",
                'descricao' => 'Pão, hambúrguer, presunto, queijo, salada, milho e batata-palha.',
                'preco' => 14.00,
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/corujao-xsalada.jpeg'
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Egg",
                'descricao' => 'Pão, hambúrguer, presunto, queijo, ovo, milho, salada e batata-palha.',
                'preco' => 15.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Crock",
                'descricao' => 'Pão, hambúrguer, presunto, queijo, bacon, ovo, tomate, catupiry, milho e batata-palha.',
                'preco' => 18.00,
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/corujao-crock.jpeg'
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Rango",
                'descricao' => 'Pão, hambúrguer, presunto, queijo, bacon, ovo, milho e batata-palha.',
                'preco' => 17.00,
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/corujao-rango.jpeg'
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Calabresa",
                'descricao' => 'Pão, hambúrguer, queijo, presunto, calabresa, milho, salada e batata-palha.',
                'preco' => 16.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Frango",
                'descricao' => 'Pão, frango, salada, catupiry, milho e batata-palha.',
                'preco' => 14.00,
                'ativo' => true
            ]);
               // ProdutoAdicional
               DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_ralado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $presunto
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
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
                'adicional_id' => $tomate
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $alface
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $linguica
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebolinha
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $milho
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $batata_palha
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $molho_branco
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $carne_moida
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
                'adicional_id' => $oregano
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $salsicha
            ]);
            // fim produto adicional

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Bacon",
                'descricao' => 'Pão, hambúrguer, bacon, queijo, presunto, alface, milho, tomate e batata-palha.',
                'preco' => 17.00,
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/corujao-xbacon.jpeg'
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Frango c/ Bacon",
                'descricao' => 'Pão, frango, bacon, salada, catupiry, milho e batata-palha.',
                'preco' => 16.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Frango Egg",
                'descricao' => 'Pão, frango, queijo, ovo, bacon, milho e batata-palha',
                'preco' => 17.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Americano c/ Bacon",
                'descricao' => 'Pão, presunto, queijo, ovo, bacon, tomate e batata-palha.',
                'preco' => 14.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Tudo",
                'descricao' => 'Pão, hambúrguer, bacon, calabresa, ovo, alface, tomate, presunto, queijo, milho e batata-palha.',
                'preco' => 20.00,
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/corujao-xtudo.jpeg'
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Vegetariano",
                'descricao' => 'Pão, alface, tomate, milho, ovo, queijo e batata-palha.',
                'preco' => 10.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Big Burguer",
                'descricao' => 'Pão, 2 hambúrgueres, queijo, presunto, milho e batata-palha.',
                'preco' => 14.00,
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/corujao-bigburguer.jpeg'
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Americano",
                'descricao' => 'Pão, Presunto, Queijo, Ovo, Tomate e Batata Palha.',
                'preco' => 12.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Misto c/ Bacon",
                'descricao' => 'Pão, presunto, queijo, tomate, bacon, milho e batata-palha.',
                'preco' => 13.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Mistão",
                'descricao' => 'Pão, presunto, queijo, tomate, orégano, milho e batata-palha.',
                'preco' => 12.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Bauru",
                'descricao' => 'Pão, presunto, queijo e tomate.',
                'preco' => 10.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "X-Burguer",
                'descricao' => 'Pão, hambúrguer, presunto, queijo, milho e batata-palha',
                'preco' => 11.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional

            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Saladinha",
                'descricao' => 'Pão, hambúrguer, salada e queijo',
                'preco' => 9.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional
            

        $idCategoria = DB::table('categorias')->insertGetid([
            'nome' => "Macarrão na Chapa",
            'user_id' => $idTenant
        ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Macarrão à Moda",
                'descricao' => 'Macarrão espaguete, bacon, calabresa, alho, cebolinha e queijo ralado.',
                'preco' => 16.00,
                'ativo' => true
            ]);
            // ProdutoAdicional
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_ralado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $presunto
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
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
                'adicional_id' => $tomate
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $alface
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $linguica
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebolinha
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $milho
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $batata_palha
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $molho_branco
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $carne_moida
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
                'adicional_id' => $oregano
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $salsicha
            ]);
            // fim produto adicional
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Macarrão com Frango",
                'descricao' => 'Macarrão espaguete, filé de frango, alho, cebola, cebolinha e queijo ralado.',
                'preco' => 16.00,
                'ativo' => true
            ]);
            // ProdutoAdicional
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_ralado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $presunto
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
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
                'adicional_id' => $tomate
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $alface
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $linguica
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebolinha
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $milho
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $batata_palha
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $molho_branco
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $carne_moida
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
                'adicional_id' => $oregano
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $salsicha
            ]);
            // fim produto adicional
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Macarrão à Bolonhesa",
                'descricao' => 'Macarrão espaguete, carne moída, molho, alho, cebola, cebolinha e queijo ralado.',
                'preco' => 17.00,
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/corujao-espaguete-bolonhesa.jpeg'
            ]);
            // ProdutoAdicional
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_ralado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $presunto
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
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
                'adicional_id' => $tomate
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $alface
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $linguica
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebolinha
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $milho
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $batata_palha
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $molho_branco
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $carne_moida
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
                'adicional_id' => $oregano
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $salsicha
            ]);
            // fim produto adicional
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Macarrão à Mineira",
                'descricao' => 'Macarrão espaguete, linguiça de porco, tomate, cebola, mussarela, alho, cebolinha e queijo ralado.',
                'preco' => 17.00,
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/corujao-espaguete-amineira.jpeg'
            ]);
            // ProdutoAdicional
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_ralado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $presunto
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
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
                'adicional_id' => $tomate
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $alface
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $linguica
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebolinha
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $milho
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $batata_palha
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $molho_branco
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $carne_moida
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
                'adicional_id' => $oregano
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $salsicha
            ]);
            // fim produto adicional
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Macarrão ao Molho Branco com Brócolis",
                'descricao' => 'Macarrão espaguete, alho, cebola, cebolinha, brócolis e queijo mussarela ralado.',
                'preco' => 17.00,
                'ativo' => true
            ]);
            // ProdutoAdicional
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_ralado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $presunto
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
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
                'adicional_id' => $tomate
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $alface
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $linguica
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebolinha
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $milho
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $batata_palha
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $molho_branco
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $carne_moida
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
                'adicional_id' => $oregano
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $salsicha
            ]);
            // fim produto adicional
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Macarrão ao Molho Branco com Bacon",
                'descricao' => 'Macarrão espaguete, alho, cebola, cebolinha, bacon e queijo mussarela ralado.',
                'preco' => 16.00,
                'ativo' => true
            ]);
            // ProdutoAdicional
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $hamburguer
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $queijo_ralado
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $presunto
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $ovo
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
                'adicional_id' => $tomate
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $alface
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $linguica
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $frango
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebola
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $cebolinha
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $milho
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $batata_palha
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $molho_branco
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $carne_moida
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
                'adicional_id' => $oregano
            ]);
            DB::table('produto_adicionais')->insert([
                'produto_id' => $produto,
                'adicional_id' => $salsicha
            ]);
            // fim produto adicional
        $idCategoria = DB::table('categorias')->insertGetid([
            'nome' => "Cachorro Quente",
            'user_id' => $idTenant
        ]);  
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Cachorro Quente Simples",
                'descricao' => 'Pão, 1 salsicha, molho de tomate, purê de batata, milho e batata palha.',
                'preco' => 10.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Cachorro Quente Completo",
                'descricao' => 'Pão, 1 salsicha, molho de tomate, purê de batata, bacon, queijo mussarela, milho e batata palha.',
                'preco' => 13.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Cachorro Quente Especial",
                'descricao' => 'Pão, 2 salsichas, molho de tomate, purê de batata, bacon, queijo mussarela, presunto, 1 ovo, milho e batata palha.',
                'preco' => 16.00,
                'ativo' => true
            ]);
                // ProdutoAdicional
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $hamburguer
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $queijo_ralado
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $presunto
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $ovo
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
                    'adicional_id' => $tomate
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $alface
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $linguica
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $frango
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebola
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $cebolinha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $milho
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $batata_palha
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $molho_branco
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $carne_moida
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
                    'adicional_id' => $oregano
                ]);
                DB::table('produto_adicionais')->insert([
                    'produto_id' => $produto,
                    'adicional_id' => $salsicha
                ]);
                // fim produto adicional
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
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/corujao-refrigerantelata.jpeg'
            ]);
                // ProdutoObrigatorios
                DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $refrigerante_lata
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Refrigerante 2 litros",
                'descricao' => 'Refrigerante 2 litros',
                'preco' => 12.00,
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/corujao-refrigerante2litros.jpeg'
            ]);
                // ProdutoObrigatorios
                DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $refrigerante_2l
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Refrigerante 600ml",
                'descricao' => 'Refrigerante 600ml',
                'preco' => 7.00,
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/corujao-refrigerante600ml.jpeg'
            ]);
                // ProdutoObrigatorios
                DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $refrigerante_600ml
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Refrigerante 200ml",
                'descricao' => 'Refrigerante 200ml',
                'preco' => 2.00,
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/corujao-refrigerante200ml.jpeg'
            ]);
                // ProdutoObrigatorios
                DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $refrigerante_200ml
                ]);
            $produto = DB::table('produtos')->insertGetid([
                'user_id' => $idTenant,
                'categoria_id' => $idCategoria,
                'nome' => "Suco Del Valle",
                'descricao' => 'Suco Del Valle 290ml',
                'preco' => 5.00,
                'ativo' => true,
                'imagem' => 'imagens/'.$slug.'/produtos/corujao-sucodelvalle290ml.jpeg'
            ]);
                // ProdutoObrigatorios
                DB::table('produto_obrigatorios')->insert([
                    'produto_id' => $produto,
                    'obrigatorio_id' => $suco_del_valle_290ml
                ]);
            $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Água sem gás",
            'descricao' => 'Água mineral sem gás 510ml',
            'preco' => 2.00,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/corujao-agua.jpeg'
           ]);
           $produto = DB::table('produtos')->insertGetid([
            'user_id' => $idTenant,
            'categoria_id' => $idCategoria,
            'nome' => "Água com gás",
            'descricao' => 'Água mineral com gás 510ml',
            'preco' => 2.50,
            'ativo' => true,
            'imagem' => 'imagens/'.$slug.'/produtos/corujao-agua_com_gas.jpeg'
           ]);
           
    }
}

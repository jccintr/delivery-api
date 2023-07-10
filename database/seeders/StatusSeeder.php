<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $status = [
            ['descricao'=>'Pedido Recebido','descricao_curta'=>'Recebido','cor'=>'green'],
            ['descricao'=>'Pedido Entregue','descricao_curta'=>'Entregue','cor'=>'green'],
            ['descricao'=>'Pedido Retirado','descricao_curta'=>'Retirado','cor'=>'green'],

            ['descricao'=>'Pedido em Preparação','descricao_curta'=>'Em Preparação','cor'=>'orange'],
            ['descricao'=>'Pedido saiu para entrega','descricao_curta'=>'A caminho','cor'=>'orange'],
            ['descricao'=>'Pedido Pronto','descricao_curta'=>'Pronto','cor'=>'orange'],

            ['descricao'=>'Pedido Rejeitado','descricao_curta'=>'Rejeitado','cor'=>'red'],
            ['descricao'=>'Pedido Cancelado','descricao_curta'=>'Cancelado','cor'=>'red'],
            ['descricao'=>'Pedido Devolvido','descricao_curta'=>'Devolvido','cor'=>'red'],

        


        ];


        DB::table('status_pedidos')->insert($status);
    }
}

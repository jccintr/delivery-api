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
            ['descricao'=>'Pedido Recebido pelo Estabelecimento','descricao_curta'=>'Recebido','code'=> 1],
            ['descricao'=>'Pedido Entregue ao Cliente','descricao_curta'=>'Entregue','code'=> 1],
            ['descricao'=>'Pedido Retirado pelo Cliente','descricao_curta'=>'Retirado','code'=> 1],

            ['descricao'=>'Pedido em Preparação','descricao_curta'=>'Rejeitado','code'=>2],
            ['descricao'=>'Pedido saiu para entrega','descricao_curta'=>'A caminho','code'=>2],
            ['descricao'=>'Pedido pronto para retirada','descricao_curta'=>'Pronto','code'=>2],

            ['descricao'=>'Pedido Rejeitado pelo Estabelecimento','descricao_curta'=>'Rejeitado','code'=>3],
            ['descricao'=>'Pedido Cancelado pelo Estabelecimento','descricao_curta'=>'Cancelado','code'=>3],
            ['descricao'=>'Pedido Devolvido pelo Cliente','descricao_curta'=>'Devolvido','code'=>3],

        


        ];


        DB::table('status_pedidos')->insert($status);
    }
}

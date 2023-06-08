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
            ['descricao'=>'Pedido enviado'],
            ['descricao'=>'Pedido recebido pela loja'],
            ['descricao'=>'Pedido cancelado pela loja'],
            ['descricao'=>'Pedido em preparação'],
            ['descricao'=>'Pedido pronto para retirada'],
            ['descricao'=>'Saiu para entrega'],
            ['descricao'=>'Pedido entregue ao cliente'],
            ['descricao'=>'Pedido retirado pelo cliente'],
            ['descricao'=>'Pedido devolvido pelo cliente'],
            ['descricao'=>'Pedido devolvido pelo entregador'],
        ];


        DB::table('status_pedidos')->insert($status);
    }
}

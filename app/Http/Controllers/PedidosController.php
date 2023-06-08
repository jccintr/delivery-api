<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Taxa;
use App\Models\Pagamento;
use App\Models\ItemPedido;
use App\Models\User;


class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
       $delivery = $request->delivery;
       $tenant = $request->tenant_id;
       $nome = $request->nome;
       $telefone = $request->telefone;
       $endereco = $request->endereco;
       $taxa_id  =  $request->taxa_id;
       $pagamento_id =  $request->pagamento_id;
       $observacao =  $request->observacao;
       $itensPedido = $request->itensPedido;


       /*
       if(!$tenant){
         // sai
       } 
       $found_tenant = User::find($tenant)

       if(!$found_tenant){
        // sai 
       }
       if(!$nome or !$telefone or !$pagamento_id){
        // sai 
       }



       if($delivery===true and ()){

       }
       if($delivery===false and ()){

       }
*/
        $novoPedido = new Pedido();
        $novoPedido->user_id = $tenant;
        $novoPedido->token = $tenant.rand(0,999).time();

       if($delivery===true){
         
      
        $novoPedido->delivery = true;
        $novoPedido->nome = $nome;
        $novoPedido->telefone = $telefone;
        $novoPedido->endereco = $endereco;
        $taxa = Taxa::find($taxa_id);
        $novoPedido->bairro = $taxa->bairro;
        $novoPedido->taxa_entrega = $taxa->valor;
        $pagamento = Pagamento::find($pagamento_id);
        $novoPedido->forma_pagamento = $pagamento->nome;
        $novoPedido->observacao = $observacao;
        $novoPedido->save();
      
       } else {

        $novoPedido->delivery = false;
        $novoPedido->nome = $nome;
        $novoPedido->telefone = $telefone;
        //$novoPedido->endereco = $endereco; // x
        //$taxa = Taxa::find($taxa_id); // x
        //$novoPedido->bairro = $taxa->bairro; //x
        $novoPedido->taxa_entrega = 0; //x
        $pagamento = Pagamento::find($pagamento_id);
        $novoPedido->forma_pagamento = $pagamento->nome;
        $novoPedido->observacao = $observacao;
        $novoPedido->save();

       } 

       
       
       
       foreach ($itensPedido as $itemPedido){
         
         $novoItemPedido = new ItemPedido();
         $novoItemPedido->pedido_id = $novoPedido->id;
         $novoItemPedido->produto_id = $itemPedido['produto']['id'];
         $novoItemPedido->quantidade = $itemPedido['quantidade'];
         $novoItemPedido->total = $itemPedido['total'];
         $novoItemPedido->obrigatorios = $itemPedido['obrigatorios'];
         $novoItemPedido->observacao = $itemPedido['observacao'];
         $novoItemPedido->save();
       }
       
       return response()->json(['pedido'=>$novoPedido->token],201);

/*
let response = await Api.addPedido(entregar,1,nome,telefone,endereco,taxaId,pagamentoId,observacao,itensPedido);

       {
        "tenant_id": 1,
        "delivery" : true,
        "nome" : "Joyce",
        "telefone" : "35-98326-3200",
        "endereco" : "Rua Jk, 53",
        "taxa_id": 1,
        "pagamento_id": 1,$novoPedido->delivery = $delivery;
        "observacao" : "Vem me amarrar",
        "itensPedido" : [
            {
                "id": 1,
                "quantidade": 2,
                "total" : 32.99,
                "produto": {"id": 1,"nome": "Salada"},
                "observacao": "mandar maionese"
            },
            {
                "id": 2,
                "quantidade": 1,
                "total" : 10.00,
                "produto": {"id": 4,"nome": "Coca cola 2 litros"},
                "observacao": null
            }
        ]
    }
*/

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

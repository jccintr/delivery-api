<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Produto;
use App\Models\Taxa;
use App\Models\Pagamento;
use App\Models\ItemPedido;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $pedidos = Pedido::where('user_id',Auth::User()->id)->with('statusPedido')->with('itensPedido.produto')->get();
            
        //dd($pedidos);
        foreach($pedidos as $pedido):
             $total = 0;
             $pedido['data'] = date_format($pedido->created_at,"d-m-Y H:i");
             foreach($pedido->itensPedido as $itemPedido):

                 if (strlen($itemPedido->obrigatorios)>0){
                     $itemPedido['obrigatorios'] = explode(';',$itemPedido->obrigatorios);
                 } else {
                     $itemPedido['obrigatorios'] = [];
                 }

                 $total += $itemPedido->total;
                 
             endforeach;
             $pedido['total'] = round($total,2);
        endforeach;
        
        return response()->json($pedidos,200);
        
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

       //cria um novo pedido
       $novoPedido = new Pedido();
       $novoPedido->user_id = $tenant;
       $novoPedido->token = $tenant."-".time();

       
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
         $novoPedido->status_pedido_id = 1;
         $novoPedido->save();
        } 
        else { // para retirar
         $novoPedido->delivery = false;
         $novoPedido->nome = $nome;
         $novoPedido->telefone = $telefone;
         $novoPedido->taxa_entrega = 0; //x
         $pagamento = Pagamento::find($pagamento_id);
         $novoPedido->forma_pagamento = $pagamento->nome;
         $novoPedido->observacao = $observacao;
         $novoPedido->status_pedido_id = 1;
         $novoPedido->save();
        } 

       //adiciona os itens no pedido
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

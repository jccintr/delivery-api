<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Produto;
use App\Models\Taxa;
use App\Models\Pagamento;
use App\Models\ItemPedido;
use App\Models\User;
use App\Models\StatusPedidoLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $pedidos = Pedido::where('user_id',Auth::User()->id)->Where('created_at','>',Auth::User()->opened_at)->with('statusPedidoLog.statusPedido')->with('statusPedido')->with('itensPedido.produto')->orderBy('created_at','desc')->get();
            
        //dd($pedidos);
        foreach($pedidos as $pedido):
             $total = 0;
             $pedido['data'] = date_format($pedido->created_at,"d/m/Y H:i");

             foreach($pedido->statusPedidoLog as $statusPedido):
                $statusPedido['data'] = date_format($statusPedido->created_at,"d/m-H:i");
             endforeach;   
             
             foreach($pedido->itensPedido as $itemPedido):

                 if (strlen($itemPedido->obrigatorios)>0){
                     $itemPedido['obrigatorios'] = explode(';',$itemPedido->obrigatorios);
                 } else {
                     $itemPedido['obrigatorios'] = [];
                 }

                 if (strlen($itemPedido->adicionais)>0){
                    $itemPedido['adicionais'] = explode(';',$itemPedido->adicionais);
                } else {
                    $itemPedido['adicionais'] = [];
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
         $novoItemPedido->adicionais = $itemPedido['adicionais'];
         $novoItemPedido->observacao = $itemPedido['observacao'];
         $novoItemPedido->save();

       }
       
       // cria o status inicial do pedido
       $novoStatus = new StatusPedidoLog();
       $novoStatus->pedido_id = $novoPedido->id;
       $novoStatus->status_pedido_id = 1;
       $novoStatus->motivo = "";
       $novoStatus->save();

       $user = User::find($request->tenant_id);

       $response = Http::withHeaders([
        'Content-Type' => 'application/json'
        ])->post('https://exp.host/--/api/v2/push/send',[
              'to' => $user->push_token,
              'sound'=> 'default',
              'title'=> 'Novo Pedido Delivroo !',
              'body'=> 'Oba! Acabou de chegar um novo pedido para você. Bora atender mais um cliente !'
        ]);

       return response()->json($novoPedido,201);
 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        

        $pedido = Pedido::with('itensPedido.produto')->with('statusPedido')->with('statusPedidoLog.statusPedido')->find($id);

        if ($pedido->user_id !== Auth::User()->id){
            $array['erro'] = "Não Autorizado.";
            return response()->json($array,401);
        } 

        $pedido['data'] = date_format($pedido->created_at,"d/m/Y H:i");
        foreach($pedido->statusPedidoLog as $statusPedido):
                $statusPedido['data'] = date_format($statusPedido->created_at,"d/m-H:i");
        endforeach; 
        $total = 0;
        foreach($pedido->itensPedido as $itemPedido):

                 if (strlen($itemPedido->obrigatorios)>0){
                     $itemPedido['obrigatorios'] = explode(';',$itemPedido->obrigatorios);
                 } else {
                     $itemPedido['obrigatorios'] = [];
                 }

                 if (strlen($itemPedido->adicionais)>0){
                     $itemPedido['adicionais'] = explode(';',$itemPedido->adicionais);
                 } else {
                     $itemPedido['adicionais'] = [];
                 }

                 $total += $itemPedido->total;
                 
        endforeach;
        $pedido['total'] = round($total,2);  

        return response()->json($pedido,200);      
    }

    public function show2($id){

         $pedido = Pedido::with('itensPedido.produto')->with('statusPedido')->with('statusPedidoLog.statusPedido')->find($id);

        
        $pedido['data'] = date_format($pedido->created_at,"d/m/Y H:i");
        foreach($pedido->statusPedidoLog as $statusPedido):
                $statusPedido['data'] = date_format($statusPedido->created_at,"d/m-H:i");
        endforeach; 
        $total = 0;
        foreach($pedido->itensPedido as $itemPedido):

                 if (strlen($itemPedido->obrigatorios)>0){
                     $itemPedido['obrigatorios'] = explode(';',$itemPedido->obrigatorios);
                 } else {
                     $itemPedido['obrigatorios'] = [];
                 }

                 if (strlen($itemPedido->adicionais)>0){
                     $itemPedido['adicionais'] = explode(';',$itemPedido->adicionais);
                 } else {
                     $itemPedido['adicionais'] = [];
                 }

                 $total += $itemPedido->total;
                 
        endforeach;
        $pedido['total'] = round($total,2);  

        return response()->json($pedido,200);  


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

    
    public function total(Request $request){

        $pedidos = Pedido::where('user_id',Auth::User()->id)->sum('total')->get();
        
        
        return response()->json($pedidos,200);  

    }

    public function resumo(){

        $recebidos = Pedido::where('user_id',Auth::User()->id)->Where('created_at','>',Auth::User()->opened_at)->count();
        $entregues = Pedido::where('user_id',Auth::User()->id)->Where('created_at','>',Auth::User()->opened_at)->where('status_pedido_id',2)->count();
        $retirados = Pedido::where('user_id',Auth::User()->id)->Where('created_at','>',Auth::User()->opened_at)->where('status_pedido_id',3)->count();
        $pedidos   = Pedido::where('user_id',Auth::User()->id)->Where('created_at','>',Auth::User()->opened_at)->where('status_pedido_id',2)->orWhere('status_pedido_id',3)->with('itensPedido')->get();

        $total_pedidos = 0;
        foreach($pedidos as $pedido):
            $total = 0;
            $total_pedido = 0;
            foreach($pedido->itensPedido as $itemPedido):
                $total += $itemPedido->total;
            endforeach;
            $total_pedido = $total + $pedido->taxa_entrega;
            $total_pedidos = $total_pedidos + $total_pedido;
       endforeach;

        $resposta['recebidos'] = $recebidos;
        $resposta['entregues'] = $entregues;
        $resposta['retirados'] = $retirados;
        $resposta['faturamento'] = round($total_pedidos,2);
        
        return response()->json($resposta,200);
    }

   public function historico($ano,$mes) {

    $pedidos = Pedido::where('user_id',Auth::User()->id)->whereYear('created_at',$ano)->whereMonth('created_at',$mes)->with('statusPedidoLog.statusPedido')->with('statusPedido')->with('itensPedido.produto')->orderBy('created_at','desc')->get();
            
    
    foreach($pedidos as $pedido):
         $total = 0;
         $pedido['data'] = date_format($pedido->created_at,"d/m/Y H:i");

         foreach($pedido->statusPedidoLog as $statusPedido):
            $statusPedido['data'] = date_format($statusPedido->created_at,"d/m-H:i");
         endforeach;   
         
         foreach($pedido->itensPedido as $itemPedido):

             if (strlen($itemPedido->obrigatorios)>0){
                 $itemPedido['obrigatorios'] = explode(';',$itemPedido->obrigatorios);
             } else {
                 $itemPedido['obrigatorios'] = [];
             }

             if (strlen($itemPedido->adicionais)>0){
                $itemPedido['adicionais'] = explode(';',$itemPedido->adicionais);
            } else {
                $itemPedido['adicionais'] = [];
            }

             $total += $itemPedido->total;
             
         endforeach;
         $pedido['total'] = round($total,2);
    endforeach;
    
    return response()->json($pedidos,200);
    

   }
}

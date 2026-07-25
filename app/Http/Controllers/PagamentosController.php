<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;
use Illuminate\Support\Facades\Auth;

class PagamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagamentos = Pagamento::where('user_id',Auth::User()->id)->orderBy('nome')->get();
        return response()->json($pagamentos,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nome = $request->nome;
        $ativo = $request->ativo;

        if (!$nome){
            $array['erro'] = "Campo nome é obrigatório.";
            return response()->json($array,400);
        }

        $newPagamento = new Pagamento();
        $newPagamento->user_id = Auth::User()->id;
        $newPagamento->nome = $nome;
        if($ativo !== null){
            $newPagamento->ativo = $ativo;
        }
        $newPagamento->save();

        return response()->json($newPagamento,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$id){
            $array['erro'] = "Requisição mal formatada.";
            return response()->json($array,400);
        }
        $pagamento = Pagamento::find($id);
        if (!$pagamento){
             $array['erro'] = "Forma de Pagamento não encontrada. Id: " . $id;
            return response()->json($array,404);
        }
        return response()->json($pagamento,200);
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
        if (!$id){
            $array['erro'] = "Requisição mal formatada.";
            return response()->json($array,400);
        }
        $nome = $request->nome;
        $ativo = $request->ativo;
        if (!$nome) {
            $array['erro'] = "Campo nome é obrigatório.";
            return response()->json($array,400);
        }
        $pagamento = Pagamento::find($id);
        
        if (!$pagamento){
            $array['erro'] = "Forma de Pagamento não encontrada. Id: " . $id;
            return response()->json($array,404);
        }
        if ($pagamento->user_id !== Auth::User()->id){
            $array['erro'] = "Acesso não permitido.";
            return response()->json($array,401);
        }
        $pagamento->nome = $nome;
        if($ativo !== null){
            $pagamento->ativo = $ativo;
        }
        $pagamento->save();
        return response()->json($pagamento,200);
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

     public function toggleAtivo($id){

        if (!$id){
            $array['erro'] = "Id do pagamento não informado.";
            return response()->json($array,400);
        }

        $pagamento = Pagamento::find($id);

        if (!$pagamento) {
            return response()->json(['erro' => "Pagamento não encontrado. ID: {$id}"], 404);
        }
        if ($pagamento->user_id !== Auth::User()->id){
            $array['erro'] = "Acesso não Autorizado.";
            return response()->json($array,401);
        }

        $pagamento->ativo = !$pagamento->ativo;
        $pagamento->save();
        return response()->json($pagamento,200);

      }
}

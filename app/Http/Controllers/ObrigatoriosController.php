<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obrigatorio;
use Illuminate\Support\Facades\Auth;
use App\Models\ProdutoObrigatorio;


class ObrigatoriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obrigatorios = Obrigatorio::where('user_id',Auth::User()->id)->orderBy('nome')->get();
       
        
        foreach ($obrigatorios as $obrigatorio){
            $obrigatorio['opcoes'] = explode(';',$obrigatorio->opcoes);
        }
       
        
        return response()->json($obrigatorios,200);
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
        $opcoes = $request->opcoes;
        
        if (!$nome){
             $array['erro'] = "Campo nome é obrigatório.";
            return response()->json($array,400);
        }

        if (!$opcoes){
             $array['erro'] = "Opções de seleção não informadas.";
            return response()->json($array,400);
        }

        if (count($opcoes)<2){
             $array['erro'] = "É necessário informar pelo menos duas opções.";
            return response()->json($array,400);
        }

        $newObrigatorio = new Obrigatorio();
        $newObrigatorio->nome = $nome;
        $opt_str = '';
        foreach ($opcoes as $opcao){
            $opt_str.= $opcao.';';
        }
        $opt_str = rtrim($opt_str,';');
        $newObrigatorio->user_id = Auth::User()->id;
        $newObrigatorio->opcoes = $opt_str;
        $newObrigatorio->save();
        return response()->json($newObrigatorio,201);
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
        $obrigatorio = Obrigatorio::find($id);
        if (!$obrigatorio){
            $array['erro'] = "Item não encontrado.";
            return response()->json($array,404);
        }

        if ($obrigatorio->user_id !== Auth::User()->id){
            $array['erro'] = "Não Autorizado.";
            return response()->json($array,401);
        }
        
        $obrigatorio['opcoes'] = explode(';',$obrigatorio->opcoes);
        return response()->json($obrigatorio,200);
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
        $nome = $request->nome;
        $opcoes = $request->opcoes;

        if (!$id){
            $array['erro'] = "Requisição mal formatada.";
            return response()->json($array,400);
        }
        
         if (!$nome){
             $array['erro'] = "Campo nome é obrigatório.";
            return response()->json($array,400);
        }

        if (!$opcoes){
             $array['erro'] = "Opções de seleção não informadas.";
            return response()->json($array,400);
        }

        if (count($opcoes)<2){
             $array['erro'] = "É necessário informar pelo menos duas opções.";
            return response()->json($array,400);
        }

        $obrigatorio = Obrigatorio::find($id);

        if (!$obrigatorio){
            $array['erro'] = "Obrigatorio não encontrado. Id: " . $id;
            return response()->json($array,404);
        }

        if ($obrigatorio->user_id !== Auth::User()->id){
            $array['erro'] = "Acesso não permitido.";
            return response()->json($array,401);
        }

        $obrigatorio->nome = $nome;
        $opt_str = '';
        foreach ($opcoes as $opcao){
            $opt_str.= $opcao.';';
        }
        $opt_str = rtrim($opt_str,';');
        $obrigatorio->opcoes = $opt_str;
        $obrigatorio->save();
        return response()->json($obrigatorio,201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obrigatorio = Obrigatorio::find($id);

        if (!$obrigatorio) {
            return response()->json(['erro' => "Item obrigatorio não encontrado. ID: {$id}"], 404);
        }

        if ($obrigatorio->user_id !== Auth::user()->id) {
            return response()->json(['erro' => 'Acesso não permitido.'], 403);
        }

        // verificar se está sendo utilizado em algum produto.

       if (ProdutoObrigatorio::where('obrigatorio_id', $obrigatorio->id)->count() > 0) {
           return response()->json([
          'erro' => 'Não é possível excluir: este item obrigatorio está sendo utilizado.'
           ], 422);
        }
         

        $obrigatorio->delete();

        return response()->json(null, 204);
    }
}

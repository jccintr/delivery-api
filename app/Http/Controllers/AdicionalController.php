<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adicional;
use Illuminate\Support\Facades\Auth;

class AdicionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adicionais = Adicional::where('user_id',Auth::User()->id)->orderBy('nome')->get();
       
        return response()->json($adicionais,200);
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
        $valor = $request->valor;

        if (!$nome) {
            $array['erro'] = "Campo nome é obrigatório.";
            return response()->json($array,400);
        }

         if (!$valor) {
            $array['erro'] = "Campo valor é obrigatório.";
            return response()->json($array,400);
        }

        $novoAdicional = new Adicional();
        $novoAdicional->user_id = Auth::User()->id;
        $novoAdicional->nome = $nome;
        $novoAdicional->valor = $valor;
        $novoAdicional->save();

        return response()->json($novoAdicional,201);
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

        $adicional = Adicional::find($id);
        if (!$adicional){
            $array['erro'] = "Adicional não encontrado. Id: " . $id;
            return response()->json($array,404);
        }

        if ($adicional->user_id !== Auth::User()->id){
            $array['erro'] = "Não Autorizado.";
            return response()->json($array,401);
        }

        return response()->json($adicional,200);
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
        $valor = $request->valor;
        
        if (!$nome) {
            $array['erro'] = "Campo nome é obrigatório.";
            return response()->json($array,400);
        }

        if (!$valor) {
            $array['erro'] = "Campo valor é obrigatório.";
            return response()->json($array,400);
        }

        $adicional = Adicional::find($id);
        if (!$adicional){
            $array['erro'] = "Adicional não encontrado. Id: " . $id;
            return response()->json($array,404);
        }

        if ($adicional->user_id !== Auth::User()->id){
            $array['erro'] = "Acesso não permitido.";
            return response()->json($array,401);
        }

        $adicional->nome = $nome;
        $adicional->valor = $valor;
        $adicional->save();
        return response()->json($adicional,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $adicional = Adicional::find($id);

        if (!$adicional) {
            return response()->json(['erro' => "Item adicional não encontrado. ID: {$id}"], 404);
        }

        if ($adicional->user_id !== Auth::user()->id) {
            return response()->json(['erro' => 'Acesso não permitido.'], 403);
        }

        $adicional->delete();

        return response()->json(null, 204); // 204 No Content é comum em exclusões bem-sucedidas
    
    }
}

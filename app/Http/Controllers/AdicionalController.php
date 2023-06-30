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

        if (!$nome or !$valor){
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }

        $newAdicional = new Adicional();
        $newAdicional->user_id = Auth::User()->id;
        $newAdicional->nome = $nome;
        $newAdicional->valor = $valor;
        $newAdicional->save();

        return response()->json($newAdicional,201);
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
            $array['erro'] = "Adicional não encontrado.";
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
        if (!$nome or !$valor) {
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }
        $adicional = Adicional::find($id);
        
        if (!$adicional){
            $array['erro'] = "Adicional não encontrado.";
            return response()->json($array,404);
        }
        if ($adicional->user_id !== Auth::User()->id){
            $array['erro'] = "Não Autorizado.";
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
        //
    }
}

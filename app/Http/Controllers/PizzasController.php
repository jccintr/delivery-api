<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pizza;

class PizzasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas = Pizza::where('user_id',Auth::User()->id)->orderBy('nome')->get();
        return response()->json($pizzas,200);
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
        $descricao = $request->descricao;
        $grande = $request->grande;
        $broto = $request->broto;
        
        if (!$nome or !$descricao or !$grande or !$broto) {
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }
        $newPizza = new Pizza();
        $newPizza->nome = $nome;
        $newPizza->descricao = $descricao;
        $newPizza->grande = number_format($grande, 2, '.', '');
        $newPizza->broto = number_format($broto, 2, '.', '');
        $newPizza->user_id = Auth::User()->id;
        $newPizza->ativo = $request->ativo;
        $newPizza->imagem = null;
        $newPizza->save();
        return response()->json($newPizza,201);
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
        if (!$id){
            $array['erro'] = "Requisição mal formatada.";
            return response()->json($array,400);
        }
        $nome = $request->nome;
        $descricao = $request->descricao;
        $ativo = $request->ativo;
        $grande = $request->grande;
        $broto = $request->broto;
        if (!$nome or !$descricao or !$grande or !$broto) {
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }
        $pizza = Pizza::find($id);
        
        if (!$pizza){
            $array['erro'] = "Pizza não encontrada.";
            return response()->json($array,404);
        }
        if ($pizza->user_id !== Auth::User()->id){
            $array['erro'] = "Acesso não Autorizado.";
            return response()->json($array,401);
        }
        $pizza->nome = $nome;
        $pizza->descricao = $descricao;
        $newPizza->grande = number_format($grande, 2, '.', '');
        $newPizza->broto = number_format($broto, 2, '.', '');
        $pizza->ativo = $ativo;
        $pizza->save();
        return response()->json($pizza,200);
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

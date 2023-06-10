<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Auth;

//$newTask->usuario_id = Auth::User()->id;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::where('user_id',Auth::User()->id)->with('produtos')->get();
        return response()->json($categorias,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user_id = $request->user_id;
        $nome = $request->nome;

        if (!$user_id or !$nome){
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }

        $newCategoria = new Categoria();
        $newCategoria->user_id = $user_id;
        $newCategoria->nome = $nome;
        $newCategoria->save();

        return response()->json($newCategoria,201);
  
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

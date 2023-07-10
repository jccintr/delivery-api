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
        $categorias = Categoria::where('user_id',Auth::User()->id)->with('produtos')->orderBy('nome')->get();
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

        
        $nome = $request->nome;

        if (!$nome){
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }

        $newCategoria = new Categoria();
        $newCategoria->user_id = Auth::User()->id;
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
        if (!$id){
            $array['erro'] = "Requisição mal formatada.";
            return response()->json($array,400);
        }
        $categoria = Categoria::find($id);
        if (!$categoria){
            $array['erro'] = "Categoria não encontrada.";
            return response()->json($array,404);
        }
        return response()->json($categoria,200);
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
        if (!$nome) {
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }
        $categoria = Categoria::find($id);
        
        if (!$categoria){
            $array['erro'] = "Categoria não encontrada.";
            return response()->json($array,404);
        }
        if ($categoria->user_id !== Auth::User()->id){
            $array['erro'] = "Não Autorizado.";
            return response()->json($array,401);
        }
        $categoria->nome = $nome;
        $categoria->save();
        return response()->json($categoria,200);
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

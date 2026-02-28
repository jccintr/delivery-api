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
        $categorias = Categoria::where('user_id',Auth::User()->id)->with('produtos')->orderBy('position')->get();
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
        $position = $request->position;
        if (!$nome){
             $array['erro'] = "Campo nome é obrigatório.";
            return response()->json($array,400);
        }

        $newCategoria = new Categoria();
        $newCategoria->user_id = Auth::User()->id;
        $newCategoria->nome = $nome;
        if($position !== null){
            $newCategoria->position = $position;
        }
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
             $array['erro'] = "Categoria não encontrada. Id: " . $id;
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
            $array['erro'] = "Id da categoria não informado.";
            return response()->json($array,400);
        }
        $nome = $request->nome;
        $position = $request->position;
        if (!$nome) {
            $array['erro'] = "Campos nome é obrigatório.";
            return response()->json($array,400);
        }
        $categoria = Categoria::find($id);
        
        if (!$categoria){
            $array['erro'] = "Categoria não encontrada. Id: " . $id;
            return response()->json($array,404);
        }
        if ($categoria->user_id !== Auth::User()->id){
            $array['erro'] = "Acesso não permitido.";
            return response()->json($array,401);
        }
        $categoria->nome = $nome;
        if($position !== null){
            $categoria->position = $position;
        }
        $categoria->save();
        return response()->json($categoria,200);
    }

     public function updateWithPosition(Request $request, $id){

     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id);

        if (!$categoria) {
            return response()->json(['erro' => "Categoria não encontrada. ID: {$id}"], 404);
        }

        if ($categoria->user_id !== Auth::user()->id) {
            return response()->json(['erro' => 'Acesso não permitido.'], 403);
        }

        if ($categoria->produtos()->exists()) {
            return response()->json([
                'erro' => 'Não é possível excluir: existem produtos vinculados a esta categoria.'
            ], 422);
        }

        $categoria->delete();

        return response()->json(null, 204); // 204 No Content é comum em exclusões bem-sucedidas
    }
}

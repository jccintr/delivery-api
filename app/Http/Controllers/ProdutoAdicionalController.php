<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdutoAdicional;
use Illuminate\Support\Facades\Auth;

class ProdutoAdicionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto_id = $request->produto_id;
        $adicional_id = $request->adicional_id;
        $new = new ProdutoAdicional();
        $new->produto_id = $produto_id;
        $new->adicional_id = $adicional_id;
        $new->save();
        return response()->json($new,201);
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
            $array['erro'] = "Id do produto não informado.";
            return response()->json($array,400);
        }

        $adicionais = ProdutoAdicional::where('produto_id',$id)->get();
        return response()->json($adicionais,200);
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
        
        $item = ProdutoAdicional::find($id);
        if (!$item) {
            return response()->json(['erro' => "Produto Adicional não encontrado. ID: {$id}"], 404);
        }

        $item->delete();
       
        return response()->json(null, 204);
    }
}

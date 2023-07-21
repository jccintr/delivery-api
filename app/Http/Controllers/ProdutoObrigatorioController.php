<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdutoObrigatorio;
use Illuminate\Support\Facades\Auth;


class ProdutoObrigatorioController extends Controller
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
        $obrigatorio_id = $request->obrigatorio_id;
        $new = new ProdutoObrigatorio();
        $new->produto_id = $produto_id;
        $new->obrigatorio_id = $obrigatorio_id;
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
        $item = ProdutoObrigatorio::find($id);
        $item->delete();
        $array['sucesso'] = "Item removido com sucesso";
            return response()->json($array,200);
    }
}

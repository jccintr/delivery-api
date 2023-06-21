<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taxa;
use Illuminate\Support\Facades\Auth;

class TaxasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taxas = Taxa::where('user_id',Auth::User()->id)->orderBy('bairro')->get();
        return response()->json($taxas,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bairro = $request->bairro;
        $valor = $request->valor;

        if (!$bairro or !$valor){
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }

        $newTaxa = new Taxa();
        $newTaxa->user_id = Auth::User()->id;
        $newTaxa->bairro = $bairro;
        $newTaxa->valor = $valor;
        $newTaxa->save();

        return response()->json($newTaxa,201);
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
        $taxa = Taxa::find($id);
        if (!$taxa){
            $array['erro'] = "Taxa não encontrada.";
            return response()->json($array,404);
        }
        return response()->json($taxa,200);
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
        $bairro = $request->bairro;
        $valor = $request->valor;
        if (!$bairro or !$valor) {
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }
        $taxa = Taxa::find($id);
        
        if (!$taxa){
            $array['erro'] = "Taxa de entrega não encontrada.";
            return response()->json($array,404);
        }
        if ($taxa->user_id !== Auth::User()->id){
            $array['erro'] = "Não Autorizado.";
            return response()->json($array,401);
        }
        $taxa->bairro = $bairro;
        $taxa->valor = $valor;
        $taxa->save();
        return response()->json($taxa,200);
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

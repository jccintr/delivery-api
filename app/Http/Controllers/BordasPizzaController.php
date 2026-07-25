<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Borda;
use Illuminate\Http\Request;

class BordasPizzaController extends Controller
{
    public function index()
    {
        $bordas = Borda::where('user_id',Auth::User()->id)->orderBy('nome')->get();
        return response()->json($bordas,200);
    }

    public function store(Request $request)
    {
        $nome = $request->nome;
        $grande = $request->grande;
        $broto = $request->broto;
      
        if (!$nome){
             $array['erro'] = "Campo nome é obrigatório.";
            return response()->json($array,400);
        }

        if (!$broto or $broto<=0){
             $array['erro'] = "Campo broto é obrigatório e deve ser maior do que zero.";
            return response()->json($array,400);
        }

        if (!$grande or $grande<=0){
             $array['erro'] = "Campo grande é obrigatório e deve ser maior do que zero.";
            return response()->json($array,400);
        }

        $novaBorda = new Borda();
        $novaBorda->nome = $nome;
        $novaBorda->grande = number_format($grande, 2, '.', '');
        $novaBorda->broto = number_format($broto, 2, '.', '');
        $novaBorda->ativo = true;
        $novaBorda->user_id = Auth::User()->id;
        $novaBorda->save();
        return response()->json($novaBorda,201);
    }

     public function update(Request $request, $id){

         if (!$id){
            $array['erro'] = "Id da borda da pizza não informado.";
            return response()->json($array,400);
        }

        $nome = $request->nome;
        $grande = $request->grande;
        $broto = $request->broto;

        if (!$nome){
             $array['erro'] = "Campo nome é obrigatório.";
            return response()->json($array,400);
        }

        if (!$broto or $broto<=0){
             $array['erro'] = "Campo broto é obrigatório e deve ser maior do que zero.";
            return response()->json($array,400);
        }

        if (!$grande or $grande<=0){
             $array['erro'] = "Campo grande é obrigatório e deve ser maior do que zero.";
            return response()->json($array,400);
        }

        $borda = Borda::find($id);

        if (!$borda) {
            return response()->json(['erro' => "Borda não encontrada. ID: {$id}"], 404);
        }
        if ($borda->user_id !== Auth::User()->id){
            $array['erro'] = "Acesso não Autorizado.";
            return response()->json($array,401);
        }

        $borda->nome = $nome;
        $borda->grande = number_format($grande, 2, '.', '');
        $borda->broto = number_format($broto, 2, '.', '');
        $borda->save();

        return response()->json($borda,200);


     }

      public function destroy($id){

        if (!$id){
            $array['erro'] = "Id da borda da pizza não informado.";
            return response()->json($array,400);
        }

        $borda = Borda::find($id);

        if (!$borda) {
            return response()->json(['erro' => "Borda não encontrada. ID: {$id}"], 404);
        }
        if ($borda->user_id !== Auth::User()->id){
            $array['erro'] = "Acesso não Autorizado.";
            return response()->json($array,401);
        }

        $borda->delete();

        return response()->json(null, 204);

      }

      public function toggleAtivo($id){

       if (!$id){
            $array['erro'] = "Id da borda da pizza não informado.";
            return response()->json($array,400);
        }

        $borda = Borda::find($id);

        if (!$borda) {
            return response()->json(['erro' => "Borda não encontrada. ID: {$id}"], 404);
        }
         if ($borda->user_id !== Auth::User()->id){
            $array['erro'] = "Acesso não Autorizado.";
            return response()->json($array,401);
        }

        $borda->ativo = !$borda->ativo;
        $borda->save();
        return response()->json($borda,200);

      }
  
}

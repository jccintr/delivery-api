<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pizza;
use Illuminate\Support\Facades\Storage;

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
        $imagem = $request->imagem;
        
         if (!$nome){
             $array['erro'] = "Campo nome é obrigatório.";
            return response()->json($array,400);
        }

        if (!$descricao){
             $array['erro'] = "Campo descrição é obrigatório.";
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

        if($imagem){
            $maxSizeBytes = 3 * 1024 * 1024; 
            if ( $imagem->getSize() > $maxSizeBytes) {
                return response()->json([
                    'erro' => 'A imagem é muito grande. O tamanho máximo permitido é 3MB.'
                ], 422);
            }
        }
       


        $newPizza = new Pizza();
        $newPizza->nome = $nome;
        $newPizza->descricao = $descricao;
        $newPizza->grande = number_format($grande, 2, '.', '');
        $newPizza->broto = number_format($broto, 2, '.', '');
        $newPizza->user_id = Auth::User()->id;
        if($imagem){
            $imagem_url = $imagem->store('imagens/'.$slug.'/produtos','public');
            $newProduto->imagem = $imagem_url;
        }
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
          $pizza = Pizza::find($id);

        if (!$pizza) {
            return response()->json(['erro' => "Pizza não encontrada. ID: {$id}"], 404);
        }

        if ($pizza->user_id !== Auth::user()->id) {
            return response()->json(['erro' => 'Acesso não permitido.'], 403);
        }

        
        // deleta a imagem do produto do servidor caso exista
        if($pizza->imagem){
            Storage::disk('public')->delete($pizza->imagem);
        }
        // exclui o produto
        $pizza->delete();

        return response()->json(null, 204);
    }

     public function updateImagem(Request $request, $id){

        if (!$id){
            $array['erro'] = "Id do produto não informado.";
            return response()->json($array,400);
        }
        
        $slug = Auth::User()->slug;
        $pizza = Pizza::find($id);
        $imagem = $request->file('imagem');

        if (!$pizza){
            $array['erro'] = "Sabor de pizza não encontrado. Id: " . $id;
            return response()->json($array,404);
        }

        if ($pizza->user_id !== Auth::User()->id){
            $array['erro'] = "Acesso não permitido.";
            return response()->json($array,403);
        }

        if(!$imagem){
             $array['erro'] = "Imagem não fornecida.";
             return response()->json($array,400);
        }

        $maxSizeBytes = 3 * 1024 * 1024; 
        if ($imagem->getSize() > $maxSizeBytes) {
            return response()->json([
                'erro' => 'A imagem é muito grande. O tamanho máximo permitido é 3MB.'
            ], 422);
        }

        if($pizza->imagem){
            Storage::disk('public')->delete($produto->imagem);
        }

        $imagem_url = $imagem->store('imagens/'.$slug.'/produtos','public');
        $pizza->imagem = $imagem_url;
        $pizza->save();
        return response()->json($pizza,200);
    }

    public function toggleAtivo($id){

        if (!$id){
            $array['erro'] = "Id da pizza não informado.";
            return response()->json($array,400);
        }

        $pizza = Pizza::find($id);

        if (!$pizza){
            $array['erro'] = "Pizza não encontrada. Id: " . $id;
            return response()->json($array,404);
        }

        if (Auth::User()->id !== $pizza->user_id) {
            $array['erro'] = "Acesso não permitido.";
            return response()->json($array,403);
        }
        $pizza->ativo = !$pizza->ativo;
        $pizza->save();
        return response()->json(['ativo'  => $pizza->ativo], 200);

   }
}

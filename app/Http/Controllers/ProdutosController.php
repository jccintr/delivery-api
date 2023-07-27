<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\ProdutoObrigatorio;
use App\Models\ProdutoAdicional;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProdutosController extends Controller
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

        $user_id = Auth::User()->id;
        $slug = Auth::User()->slug;
        $nome = $request->nome;
        $descricao = $request->descricao;
        $preco = $request->preco;
        $categoria_id = $request->categoria_id;
        $imagem = $request->imagem;
        
        if (!$categoria_id or !$nome or !$descricao or !$preco){
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }

        $newProduto = new Produto();
        $newProduto->user_id = $user_id;
        $newProduto->categoria_id = $categoria_id;
        $newProduto->nome = $nome;
        $newProduto->descricao = $descricao;
        $newProduto->preco = $preco;
        $newProduto->ativo = true;
        if($imagem){
            $imagem_url = $imagem->store('imagens/'.$slug.'/produtos','public');
            $newProduto->imagem = $imagem_url;
        }
        $newProduto->save();

        return response()->json($newProduto,201);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::find($id);
        $obrigatorios = ProdutoObrigatorio::where('produto_id',$produto->id)->get();
        $produto['obrigatorios'] = $obrigatorios;
        $adicionais = ProdutoAdicional::where('produto_id',$produto->id)->get();
        $produto['adicionais'] = $adicionais;
        return response()->json($produto,200);
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
        $preco = $request->preco;
        $categoria_id = $request->categoria_id;
        $ativo = $request->ativo;
           
        if (!$nome or !$preco or !is_numeric($preco)) {
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }
        $produto = Produto::find($id);
        
        if (!$produto){
            $array['erro'] = "Produto não encontrado.";
            return response()->json($array,404);
        }
        if ($produto->user_id !== Auth::User()->id){
            $array['erro'] = "Não Autorizado.";
            return response()->json($array,401);
        }
        $produto->nome = $nome;
        $produto->descricao = $descricao;
        $produto->preco = $preco;
        $produto->categoria_id = $categoria_id;
        $produto->ativo = $ativo;
        $produto->save();
        return response()->json($produto,200);
    }

    public function updateImagem(Request $request, $id){
        
        $slug = Auth::User()->slug;
        $produto = Produto::find($id);
        $imagem = $request->file('imagem');
        if($produto->imagem){
            Storage::disk('public')->delete($produto->imagem);
        }

        $imagem_url = $imagem->store('imagens/'.$slug.'/produtos','public');
        $produto->imagem = $imagem_url;
        $produto->save();
        return response()->json($produto,200);
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

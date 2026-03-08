<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\ProdutoObrigatorio;
use App\Models\ProdutoAdicional;
use App\Models\ItemPedido;
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

        if (!$nome){
             $array['erro'] = "Campo nome é obrigatório.";
            return response()->json($array,400);
        }

        if (!$descricao){
             $array['erro'] = "Campo descrição é obrigatório.";
            return response()->json($array,400);
        }

        if (!$preco or $preco<=0){
             $array['erro'] = "Campo preço é obrigatório e deve ser maior do que zero.";
            return response()->json($array,400);
        }

        if (!$categoria_id or $categoria_id<=0){
             $array['erro'] = "Campo categoria id é obrigatório e deve ser um inteiro maior do que zero.";
            return response()->json($array,400);
        }

        $maxSizeBytes = 3 * 1024 * 1024; 
        if ($imagem->getSize() > $maxSizeBytes) {
            return response()->json([
                'erro' => 'A imagem é muito grande. O tamanho máximo permitido é 3MB.'
            ], 422);
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
        if (!$id){
            $array['erro'] = "Id do produto não informado.";
            return response()->json($array,400);
        }

        $produto = Produto::find($id);
       // $produto = Produto::with(['obrigatorios', 'adicionais'])->find($id);
        if (!$produto){
            $array['erro'] = "Produto não encontrado. Id: " . $id;
            return response()->json($array,404);
        }
        $obrigatorios = ProdutoObrigatorio::where('produto_id',$produto->id)->get();
        $produto['obrigatorios'] = $obrigatorios;
        $adicionais = ProdutoAdicional::where('produto_id',$produto->id)->get();
        $produto['adicionais'] = $adicionais;
        return response()->json($produto,200);
    }

    public function show2web($id)
    {
        if (!$id){
            $array['erro'] = "Id do produto não informado.";
            return response()->json($array,400);
        }

       
       $produto = Produto::with(['obrigatorios', 'adicionais'])->find($id);
        if (!$produto){
            $array['erro'] = "Produto não encontrado. Id: " . $id;
            return response()->json($array,404);
        }
       
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
            $array['erro'] = "Id do produto não informado.";
            return response()->json($array,400);
        }
        $nome = $request->nome;
        $descricao = $request->descricao;
        $preco = $request->preco;
        $categoria_id = $request->categoria_id;
        $ativo = $request->ativo;

        if (!$nome){
             $array['erro'] = "Campo nome é obrigatório.";
            return response()->json($array,400);
        }

        if (!$descricao){
             $array['erro'] = "Campo descrição é obrigatório.";
            return response()->json($array,400);
        }

        if (!$preco or $preco<=0){
             $array['erro'] = "Campo preço é obrigatório e deve ser maior do que zero.";
            return response()->json($array,400);
        }

        if (!$categoria_id or $categoria_id<=0){
             $array['erro'] = "Campo categoria id é obrigatório e deve ser um inteiro maior do que zero.";
            return response()->json($array,400);
        }

        
        $produto = Produto::find($id);
        if (!$produto){
            $array['erro'] = "Produto não encontrado. Id: " . $id;
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


    public function update2(Request $request, $id)
    {

        if (!$id){
            $array['erro'] = "Id do produto não informado.";
            return response()->json($array,400);
        }
       $user_id = Auth::User()->id;
       $slug = Auth::User()->slug;
       $nome = $request->nome;
       $descricao = $request->descricao;
       $preco  = $request->preco;
       $categoria_id = $request->categoria_id;
       $imagem = $request->imagem;

        if (!$nome){
             $array['erro'] = "Campo nome é obrigatório.";
            return response()->json($array,400);
        }

        if (!$descricao){
             $array['erro'] = "Campo descrição é obrigatório.";
            return response()->json($array,400);
        }

        if (!$preco or $preco<=0){
             $array['erro'] = "Campo preço é obrigatório e deve ser maior do que zero.";
            return response()->json($array,400);
        }

        if (!$categoria_id or $categoria_id<=0){
             $array['erro'] = "Campo categoria id é obrigatório e deve ser um inteiro maior do que zero.";
            return response()->json($array,400);
        }
        
        if($imagem){
            $maxSizeBytes = 3 * 1024 * 1024; 
            if ($imagem->getSize() > $maxSizeBytes) {
                return response()->json([
                    'erro' => 'A imagem é muito grande. O tamanho máximo permitido é 3MB.'
                ], 422);
            }
         }

        $produto = Produto::find($id);
        if (!$produto){
            $array['erro'] = "Produto não encontrado. Id: " . $id;
            return response()->json($array,404);
        }
           
        if ($produto->user_id !== Auth::User()->id){
            $array['erro'] = "Acesso não permitido.";
            return response()->json($array,403);
        }

        $produto->nome = $nome;
        $produto->descricao = $descricao;
        $produto->preco = $preco;
        $produto->categoria_id = $categoria_id;
        if($produto->imagem and $imagem){
            Storage::disk('public')->delete($produto->imagem);
          
        }
        if($imagem){
          $imagem_url = $imagem->store('imagens/'.$slug.'/produtos','public');
          $produto->imagem = $imagem_url;
        }
       
        $produto->save();
        return response()->json($produto,200);

    }

    public function updateImagem(Request $request, $id){

        if (!$id){
            $array['erro'] = "Id do produto não informado.";
            return response()->json($array,400);
        }
        
        $slug = Auth::User()->slug;
        $produto = Produto::find($id);
        $imagem = $request->file('imagem');

        if (!$produto){
            $array['erro'] = "Produto não encontrado. Id: " . $id;
            return response()->json($array,404);
        }

        if ($produto->user_id !== Auth::User()->id){
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

        $produto = Produto::find($id);

        if (!$produto) {
            return response()->json(['erro' => "Produto não encontrado. ID: {$id}"], 404);
        }

        if ($produto->user_id !== Auth::user()->id) {
            return response()->json(['erro' => 'Acesso não permitido.'], 403);
        }

        // verificar se o produto não está referenciado em algum pedido
        if (ItemPedido::where('produto_id',$produto->id)->count()>0) {
                    return response()->json([
                        'erro' => 'Não é possível excluir: existem pedidos com este produto.'
                    ], 422);
        }
        // exclui os itens obrigatorios caso existam
        ProdutoObrigatorio::where('produto_id', $produto->id)->delete();
        // exclui os itens adicionais caso existam
        ProdutoAdicional::where('produto_id', $produto->id)->delete();
        // deleta a imagem do produto do servidor caso exista
        if($produto->imagem){
            Storage::disk('public')->delete($produto->imagem);
        }
        // exclui o produto
        $produto->delete();

        return response()->json(null, 204);

    }

    public function clone($id) {

        if (!$id){
            $array['erro'] = "Id do produto não informado.";
            return response()->json($array,400);
        }

        $produto = Produto::find($id);

        if (Auth::User()->id !== $produto->user_id) {
            $array['erro'] = "Acesso não permitido. UserId "+Auth::User()->id;
            return response()->json($array,403);
        }

        $newProduto = $produto->replicate();
        $newProduto->nome = 'Cópia de '.$produto->nome;
        $newProduto->imagem = null;
        $newProduto->created_at = date("Y-m-d H:i:s"); //Carbon::now();
        $newProduto->ativo = false;
        $newProduto->save();

        $obrigatorios = ProdutoObrigatorio::where('produto_id',$produto->id)->get();
        foreach($obrigatorios as $obrigatorio) {
            $newObrigatorio = new ProdutoObrigatorio();
            $newObrigatorio->produto_id = $newProduto->id;
            $newObrigatorio->obrigatorio_id = $obrigatorio->obrigatorio_id;
            $newObrigatorio->save();
        }

        $adicionais = ProdutoAdicional::where('produto_id',$produto->id)->get();
        foreach($adicionais as $adicional) {
            $newAdicional = new ProdutoAdicional();
            $newAdicional->produto_id = $newProduto->id;
            $newAdicional->adicional_id = $adicional->adicional_id;
            $newAdicional->save();
        }
        
        return response()->json($newProduto,201);
    }


   public function toggleAtivo($id){

    if (!$id){
            $array['erro'] = "Id do produto não informado.";
            return response()->json($array,400);
        }

        $produto = Produto::find($id);

        if (!$produto){
            $array['erro'] = "Produto não encontrado. Id: " . $id;
            return response()->json($array,404);
        }

        if (Auth::User()->id !== $produto->user_id) {
            $array['erro'] = "Acesso não permitido.";
            return response()->json($array,403);
        }
        $produto->ativo = !$produto->ativo;
        $produto->save();
        return response()->json(['ativo'  => $produto->ativo], 200);

   }

   public function getAdicionais($id)
   {
        if (!$id) {
            return response()->json(['erro' => "Id do produto não informado."], 400);
        }

        $produto = Produto::with('adicionais')->find($id);

        if (!$produto) {
            return response()->json(['erro' => "Produto não encontrado. Id: " . $id], 404);
        }

        $adicionais = $produto->adicionais->map(function ($adicional) {
            return [
                'id'   => $adicional->id,
                'nome' => $adicional->nome,   
            ];
         });

        
        return response()->json($adicionais, 200);
   }

   public function getObrigatorios($id)
   {
        if (!$id) {
            return response()->json(['erro' => "Id do produto não informado."], 400);
        }

        $produto = Produto::with('obrigatorios')->find($id);

        if (!$produto) {
            return response()->json(['erro' => "Produto não encontrado. Id: " . $id], 404);
        }

        $obrigatorios = $produto->obrigatorios->map(function ($obrigatorio) {
            return [
                'id'   => $obrigatorio->id,
                'nome' => $obrigatorio->nome,   
            ];
         });

        
        return response()->json($obrigatorios, 200);
   }

}

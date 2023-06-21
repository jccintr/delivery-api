<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Taxa;
use App\Models\Horario;
use App\Models\Pagamento;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Obrigatorio;
use App\Models\ProdutoObrigatorio;


class TenantsController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tenant = User::find($id);

        if(!$tenant) {
            $array['erro'] = "Estabelecimento não encontrado.";
            return response()->json($array,400);
        }

        $tenant['taxas'] = Taxa::where('user_id',$id)->get(); 
        $tenant['pagamentos'] = Pagamento::where('user_id',$id)->get(); 
        $tenant['horarios'] = Horario::where('user_id',$id)->get(); 
        $tenant['categorias'] = Categoria::where('user_id',$id)->get(); 
        $tenant['produtos'] = Produto::where('user_id',$id)->get(); 
        
        
        foreach ($tenant->produtos as $produto){
           
            $obrigatorios = ProdutoObrigatorio::where('produto_id',$produto->id)->get();
            $novoObrigatorio = [];

            foreach ($obrigatorios as $obrigatorio){
                $obrigatorio = Obrigatorio::find($obrigatorio->obrigatorio_id);
                array_push( $novoObrigatorio,array( 'nome' => $obrigatorio->nome, 'opcoes' => explode(';',$obrigatorio->opcoes) ) );
            }

            $produto['obrigatorios'] = $novoObrigatorio;
           
        }
      
        return response()->json($tenant,200);

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

    public function status(){

        $user = Auth::User();
        $user->aberto = !$user->aberto;
        $user->save();
        return response()->json($user,200);


    }
}

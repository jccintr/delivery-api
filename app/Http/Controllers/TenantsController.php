<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Taxa;
use App\Models\Horario;
use App\Models\Pagamento;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Obrigatorio;
use App\Models\Adicional;
use App\Models\ProdutoObrigatorio;
use App\Models\ProdutoAdicional;




class TenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lojas = User::where('role',2)->get();
        return response()->json($lojas,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $email = filter_var($request->email,FILTER_VALIDATE_EMAIL);
        $password = $request->password; 
        $telefone = $request->telefone; 
        $logradouro = $request->logradouro; 
        $bairro = $request->bairro; 
        $cidade = $request->cidade; 
        $estado = $request->estado; 
        $cor_fundo = $request->cor_fundo;
        $cor_texto = $request->cor_texto;
        $slug = $request->slug;
        $logotipo = $request->file('logotipo');

        if (!$name or !$email or !$password or !$telefone or !$logradouro or !$bairro or !$cidade or !$estado or !$slug) {
            return response()->json(['erro'=>'Preencha todos os campos por favor.'],400);
        }

        $user = User::where('email', $request->email)->first();
        if($user) {
            return response()->json(['erro'=>'Email já cadastrado.'],400);
        }

        $logotipo_url = $logotipo->store('imagens/logos','public');

        $newUser = new User();
        $newUser->name = $name;
        $newUser->email = $email;
        $newUser->password = Hash::make($password);
        $newUser->telefone = $telefone;
        $newUser->logradouro = $logradouro;
        $newUser->bairro = $bairro;
        $newUser->cidade = $cidade;
        $newUser->estado = $estado;
        $newUser->role = 2;
        $newUser->logotipo = $logotipo_url;
        $newUser->cor_fundo = $cor_fundo;
        $newUser->cor_texto = $cor_texto;
        $newUser->slug = $slug;
        $newUser->tempo_espera = '15 a 30min';
        $newUser->save();

        for ($i=0;$i<=6;$i++) {
            Horario::create([
                'user_id' => $newUser->id,
                'dia' => $i,
                'horario' => '19h as 23h'
            ]);
        }
      

        return response()->json($newUser,201);
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //$tenant = User::find($id);
        $tenant = User::where('slug',$slug)->first();
        if(!$tenant) {
            $array['erro'] = "Estabelecimento não encontrado.";
            return response()->json($array,400);
        }

        $tenant['taxas'] = Taxa::where('user_id',$tenant->id)->where('ativo',true)->get(); 
        $tenant['pagamentos'] = Pagamento::where('user_id',$tenant->id)->get(); 
        $tenant['horarios'] = Horario::where('user_id',$tenant->id)->get(); 
        $tenant['categorias'] = Categoria::where('user_id',$tenant->id)->get(); 
        $tenant['produtos'] = Produto::where('user_id',$tenant->id)->where('ativo',true)->get(); 
        
        
        foreach ($tenant->produtos as $produto){
           
            // pega os obrigatorios do produto
            $obrigatorios = ProdutoObrigatorio::where('produto_id',$produto->id)->get();
            $novoObrigatorio = [];
            foreach ($obrigatorios as $obrigatorio){
                $obrigatorio = Obrigatorio::find($obrigatorio->obrigatorio_id);
                array_push( $novoObrigatorio,array( 'nome' => $obrigatorio->nome, 'opcoes' => explode(';',$obrigatorio->opcoes) ) );
            }
            $produto['obrigatorios'] = $novoObrigatorio;
            // pega os adicionais do produto
            $adicionais = ProdutoAdicional::where('produto_id',$produto->id)->get();
            $novoAdicional = [];
            foreach ($adicionais as $adicional){
                $adicional = Adicional::find($adicional->adicional_id);
                array_push( $novoAdicional,array( 'nome' => $adicional->nome, 'valor' => $adicional->valor ) );
            }
            $produto['adicionais'] = $novoAdicional;
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
        if ($user->aberto) {
            $user->opened_at = now();
        }
        $user->save();
        return response()->json($user,200);


    }

    public function updateEspera(Request $request){

        $user = Auth::User();
        $user->tempo_espera = $request->tempo_espera;
        $user->save();
        return response()->json($user,200);
    }

    public function storePushtoken( Request $request) {

        $user = Auth::User();
        $token = $request->push_token;
        if ($user and $token) {
           $user->push_token = $token;
           $user->save();
           $array['sucesso'] = "Push Token salvo com sucesso.";
           return response()->json($array,200);
        } else {
          $array['erro'] = "Campos obrigatórios não informados.";
          return response()->json($array,400);
        }
      }

    public function changePassword(Request $request) {

        $user = Auth::User();
        $newPassword = $request->password;
        $user->password = Hash::make($newPassword);
        $user->save();
        $array['sucesso'] = "Senha alterada com sucesso.";
        return response()->json($array,200);
    }

    public function changePix(Request $request) {
        $user = Auth::User();
        $user->chave_pix = $request->chave_pix;
        $user->favorecido_pix = $request->favorecido_pix;
        $user->save();
        $array['sucesso'] = "Chave Pix alterada com sucesso.";
        return response()->json($array,200);
    }

    public function changeColors(Request $request) {
        $user = Auth::User();
        $user->cor_fundo = $request->cor_fundo;
        $user->cor_texto = $request->cor_texto;
        $user->save();
        $array['sucesso'] = "Cores alteradas com sucesso.";
        return response()->json($array,200);
    }


}

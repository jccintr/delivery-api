<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cidade;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
   
    public function login(Request $request){ // login da loja role = 2

     
      $email = filter_var($request->email,FILTER_VALIDATE_EMAIL);
      $password = $request->password;
      
      $credentials = ['email'=> $email,'password'=>$password];
        
      //verifica se o email existe
      if (!Auth::attempt($credentials)) {
          return response()->json(['erro'=>'Email e ou senha inválidos'],401);
      }
      //verifica se o usuario é do tipo loja

      if (Auth::User()->role == 2){

        $token = Auth::User()->createToken('teste');
        $loggedUser = Auth::User();
        $cidade = Cidade::find(Auth::User()->cidade_id);
        $loggedUser['cidade'] = $cidade->nome;
        $loggedUser['token'] = $token->plainTextToken;

        return response()->json($loggedUser,200);
          
      } else {

        return response()->json(['erro'=>'Email e ou senha inválidos'],401);

      }
   
      
    }

    public function login2(Request $request){ // login do admin  role = 3

      $email = filter_var($request->email,FILTER_VALIDATE_EMAIL);
      $password = $request->password;
      
      $credentials = ['email'=> $email,'password'=>$password];
        
      //verifica se o email existe
      if (!Auth::attempt($credentials)) {
          return response()->json(['erro'=>'Email e ou senha inválidos'],401);
      }
      //verifica se o usuario é do tipo admin
      if (Auth::User()->role == 3){

        $token = Auth::User()->createToken('teste');
        $loggedUser = Auth::User();
        $loggedUser['token'] = $token->plainTextToken;
        return response()->json($loggedUser,200);
         
      } else {

         return response()->json(['erro'=>'Email e ou senha inválidos'],401); 

      }
   
      

    }

    public function register(Request $request){

        $name = $request->name;
        $email = filter_var($request->email,FILTER_VALIDATE_EMAIL);
        $password = $request->password; 

        /*
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required',
        ]);
        */

        if (!$email)
           return response()->json(['erro'=>'Email inválido ou não informado.'],400);

        if(!$name or !$password)
           return response()->json(['erro'=>'Dados obrigatórios não informados.'],400);

        $user = User::where('email', $request->email)->first();
        if($user)
          return response()->json(['erro'=>'Email já cadastrado.'],400);


        $newUser = new User();
        $newUser->name = $name;
        $newUser->email = $email;
        $newUser->password = Hash::make($password);
        $newUser->save();
        return response()->json($newUser,201);

    }
}


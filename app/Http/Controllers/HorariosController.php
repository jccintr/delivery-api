<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;
use Illuminate\Support\Facades\Auth;

class HorariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::where('user_id',Auth::User()->id)->orderBy('dia')->get();
        return response()->json($horarios,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $dia = $request->dia;
        $horario = $request->horario;
        

        if ($dia or !$horario){
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }

        $newHorario = new Horario();
        $newHorario->user_id = Auth::User()->id;
        $newHorario->dia = $dia;
        $newHorario->horario = $horario;    
        $newHorario->save();

        return response()->json($newHorario,201);
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
        $horario = Horario::find($id);
        if (!$horario){
            $array['erro'] = "Horário não encontrado.";
            return response()->json($array,404);
        }
        return response()->json($horario,200);
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
        //$dia = $request->dia;
        $horario_atendimento = $request->horario;
        if (!$horario_atendimento) {
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }
        $horario = Horario::find($id);
        
        if (!$horario){
            $array['erro'] = "Horário não encontrado.";
            return response()->json($array,404);
        }
        if ($horario->user_id !== Auth::User()->id){
            $array['erro'] = "Não Autorizado.";
            return response()->json($array,401);
        }
        //$horario->dia = $dia;
        $horario->horario = $horario_atendimento;
        $horario->save();
        return response()->json($horario,200);
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

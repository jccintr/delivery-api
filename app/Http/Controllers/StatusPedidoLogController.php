<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\StatusPedidoLog;
use App\Models\Pedido;

class StatusPedidoLogController extends Controller
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
        //dd($request->pedido_id);
        $pedido_id = $request->pedido_id;
        $status_pedido_id = $request->status_pedido_id;
        if (!$pedido_id or !$status_pedido_id){
            $array['erro'] = "Campos obrigatórios não informados.";
            return response()->json($array,400);
        }

        $newLog = new StatusPedidoLog();
        $newLog->pedido_id = $pedido_id;
        $newLog->status_pedido_id = $status_pedido_id;
        $newLog->motivo= "";
        $newLog->save();

        $pedido = Pedido::find($pedido_id);
        $pedido->status_pedido_id = $status_pedido_id;
        $pedido->save();
        
        return response()->json($newLog,201);
        
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
        //
    }
}

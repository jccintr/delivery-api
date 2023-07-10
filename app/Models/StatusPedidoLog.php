<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPedidoLog extends Model
{
    use HasFactory;
    protected $table = 'status_pedidos_logs';
    protected $fillable = ['pedido_id','status_pedido_id','motivo'];
    protected $hidden = ['created_at','created_at','updated_at'];

    public function statusPedido() {
        
        return $this->hasOne(StatusPedido::class,'id','status_pedido_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPedidoLog extends Model
{
    use HasFactory;
    protected $table = 'status_pedidos_logs';
    protected $fillable = ['pedido_id','status_pedido_id'];
}

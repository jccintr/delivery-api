<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    
    use HasFactory;
    protected $table = 'pedidos';
    protected $fillable = ['user_id','delivery','nome','telefone','observacao','endereco','bairro','taxa_entrega','forma_pagamento','token','status_pedido_id'];
    protected $hidden = ['status_pedido_id','created_at','updated_at',];
    protected $casts = ['delivery'=> 'boolean'];

    public function itensPedido(){
        return $this->hasMany(ItemPedido::class);
    }

    public function statusPedido() {
        return $this->hasOne(StatusPedido::class,'id','status_pedido_id');
    }

    public function statusPedidoLog(){
        return $this->hasMany(StatusPedidoLog::class);
    }
    
}
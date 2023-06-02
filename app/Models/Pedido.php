<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    
    use HasFactory;
    protected $table = 'pedidos';
    protected $fillable = ['user_id','nome','telefone','observacao','endereco','bairro','taxa_entrega','forma_pagamento'];

}
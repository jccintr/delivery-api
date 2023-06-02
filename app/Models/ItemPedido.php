<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    use HasFactory;
    protected $table = 'itens_pedido';
    protected $fillable = ['pedido_id','produto_id','quantidade','total','observacao'];
}


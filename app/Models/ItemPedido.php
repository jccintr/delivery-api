<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    use HasFactory;
    protected $table = 'itens_pedido';
    protected $fillable = ['pedido_id','produto_id','quantidade','total','observacao'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function pedido(){
        return $this->belongsTo(Pedido::class);
   }

   public function produto(){
    return $this->hasOne(Produto::class,'id','produto_id');
}
}


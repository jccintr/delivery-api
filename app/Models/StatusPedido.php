<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPedido extends Model
{
    use HasFactory;
    protected $table = 'status_pedidos';
    protected $fillable = ['descricao','descricao_curta','code'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

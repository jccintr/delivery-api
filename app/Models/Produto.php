<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $fillable = ['user_id','categoria_id','nome','descricao','preco','ativo','imagem'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

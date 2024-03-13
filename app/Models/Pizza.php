<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $table = 'pizzas';
    protected $fillable = ['user_id','nome','descricao','grande','broto','ativo','imagem'];
    protected $casts = ['ativo'=> 'boolean'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

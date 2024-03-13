<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdicionalPizza extends Model
{
    use HasFactory;
    protected $table = 'adicionais_pizza';
    protected $fillable = ['user_id','nome','broto','grande','ativo'];
    protected $casts = ['ativo'=> 'boolean'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

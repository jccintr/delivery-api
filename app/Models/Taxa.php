<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxa extends Model
{
    use HasFactory;
    protected $table = 'taxas';
    protected $fillable = ['user_id','bairro','valor','ativo'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

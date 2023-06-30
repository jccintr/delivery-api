<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adicional extends Model
{
    use HasFactory;
    protected $table = 'adicionais';
    protected $fillable = ['user_id','nome','valor'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

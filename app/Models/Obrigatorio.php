<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obrigatorio extends Model
{
    use HasFactory;
    protected $table = 'obrigatorios';
    protected $fillable = ['user_id','nome','opcoes'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

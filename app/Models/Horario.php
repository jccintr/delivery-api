<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $table = 'horarios';
    protected $fillable = ['user_id','dia','horario'];
    
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

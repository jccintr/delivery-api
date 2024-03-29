<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;
    protected $table = 'pagamentos';
    protected $fillable = ['user_id','nome','ativo'];
    protected $casts = ['ativo'=> 'boolean'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table ='categorias';
    protected $fillable = ['user_id','nome'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function produtos(){
        return $this->hasMany(Produto::class);
    }
}

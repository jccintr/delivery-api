<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $fillable = ['user_id','categoria_id','nome','descricao','preco','ativo','imagem','pizza'];
    protected $casts = ['ativo'=> 'boolean','pizza'=>'boolean'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function categoria(){
         return $this->belongsTo(Categoria::class);
    }

}

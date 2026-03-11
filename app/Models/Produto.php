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

    public function categoria()
    {
         return $this->belongsTo(Categoria::class);
    }
    // adicionado em 06-02-2026
   
    public function obrigatorios()
    {
        return $this->belongsToMany(
            Obrigatorio::class,
            'produto_obrigatorios',
            'produto_id',
            'obrigatorio_id'
        )->withPivot('id');
    }

    public function adicionais()
    {
        return $this->belongsToMany(
            Adicional::class,
            'produto_adicionais',
            'produto_id',
            'adicional_id'
        )->withPivot('id');
    }

}

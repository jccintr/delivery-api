<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoAdicional extends Model
{
    use HasFactory;
    protected $table = 'produto_adicionais';
    protected $fillable = ['produto_id','adicional_id'];
}

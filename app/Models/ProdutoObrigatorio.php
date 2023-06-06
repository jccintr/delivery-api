<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoObrigatorio extends Model
{
    use HasFactory;
    protected $table = 'produto_obrigatorios';
    protected $fillable = ['produto_id','obrigatorio_id'];
}

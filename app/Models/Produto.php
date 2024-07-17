<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome_produto', 
        'descricao', 
        'codigo_barras', 
        'categoria', 
        'marca', 
        'unidade_medida', 
        'preco_custo', 
        'preco_venda', 
        'margem_lucro', 
        'estoque_atual', 
        'estoque_maximo', 
        'imagem'
    ];
}

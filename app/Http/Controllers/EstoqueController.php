<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index()
    {
        return view('gestao-estoque.gestao-estoque');
    }

    public function estoqueBaixo()
    {
        return view('gestao-estoque.gestao-estoque-estoque-baixo');
    }

    public function controleQualidade()
    {
        return view('gestao-estoque.gestao-estoque-controle-qualidade');
    }

    public function historicoMovimentacao()
    {
        return view('gestao-estoque.ge-historico-movimentacao');
    }
}

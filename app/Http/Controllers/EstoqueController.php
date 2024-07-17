<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

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

    public function cadastroProdutosForm()
    {
        return view('gestao-estoque.cadastro-produto-form');
    }

    public function cadastroProdutos(Request $request)
    {   
        $produto = Produto::create($request->all());

        return response()->json([
            'message' => 'Produto cadastrado com sucesso!', 
            'produto' => $produto
        ]);
    }
}

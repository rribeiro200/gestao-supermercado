<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function index()
    {
        return view('gestao-delivery.gestao-delivery');
    }

    public function statusPedido()
    {
        return view('gestao-delivery.status-pedido');
    }

    public function detalhesPedido()
    {
        return view('gestao-delivery.detalhes-pedido');
    }

    public function cadastroPedidoForm()
    {
        return view('gestao-delivery.cadastro-pedido-form');
    }

    public function cadastroPedido()
    {
        echo "Olá";
    }
}

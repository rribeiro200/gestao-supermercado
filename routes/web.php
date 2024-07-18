<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\DeliveryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Rotas de Gestão de Estoque
Route::prefix('gestao/estoque')->group(function () {
    Route::get('/', [EstoqueController::class, 'index'])->name('gestao-estoque');
    
    Route::get('/cadastro-produto-form', [EstoqueController::class, 'cadastroProdutosForm'])->name('gestao-estoque-cadastro-produto-form');
    Route::post('/cadastro-produto', [EstoqueController::class, 'cadastroProdutos'])->name('gestao-estoque-cadastro-produto');
    
    Route::get('/estoque-baixo', [EstoqueController::class, 'estoqueBaixo'])->name('gestao-estoque-estoque-baixo');
    Route::get('/controle-qualidade', [EstoqueController::class, 'controleQualidade'])->name('gestao-estoque-controle-qualidade');
    Route::get('/historico-movimentacao', [EstoqueController::class, 'historicoMovimentacao'])->name('ge-historico-movimentacao');
});

// Rota de Gestão de Delivery
Route::prefix('gestao/delivery')->group(function () {
    Route::get('/', [DeliveryController::class, 'index'])->name('gestao-delivery');
    Route::get('/statusPedido', [DeliveryController::class, 'statusPedido'])->name('status-pedidos');
    Route::get('/detalhesPedido', [DeliveryController::class, 'detalhesPedido'])->name('detalhes-pedido');
});

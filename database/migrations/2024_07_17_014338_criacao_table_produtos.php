<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriacaoTableProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_produto');
            $table->text('descricao')->nullable();
            $table->string('codigo_barras')->unique();
            $table->string('categoria');
            $table->string('marca');
            $table->string('unidade_medida');
            $table->decimal('preco_custo', 8, 2);
            $table->decimal('preco_venda', 8, 2);
            $table->decimal('margem_lucro', 5, 2);
            $table->integer('estoque_atual');
            $table->integer('estoque_maximo')->nullable();
            $table->string('imagem')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
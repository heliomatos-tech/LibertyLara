<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_venda_item', function (Blueprint $table) {
            $table->id();
            $table->integer('venda');
            $table->integer('produto');
            $table->string('gtin', 13)->nullable();
            $table->string('descricao', 250)->nullable();
            $table->string('informacoes_adicionais', 1024)->nullable();
            $table->string('unidade', 5)->default('unid');
            $table->integer('lote')->nullable();
            $table->decimal('quantidade', 15, 5)->nullable();
            $table->decimal('custo', 15, 5)->nullable()->default(0);
            $table->decimal('valor', 15, 5)->nullable()->default(0);
            $table->decimal('acrescimo', 15, 5)->nullable()->default(0);
            $table->decimal('desconto', 15, 5)->nullable()->default(0);
            $table->decimal('frete', 15, 5)->nullable()->default(0);
            $table->decimal('seguro', 15, 5)->nullable()->default(0);
            $table->decimal('total', 15, 3)->nullable()->default(0);
            $table->foreign('produto')->references('id')->on('app_produto')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('venda')->references('id')->on('app_venda')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_venda_item');
    }
};

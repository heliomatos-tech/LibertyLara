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
        Schema::create('app_venda_pagamento', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('venda');
            $table->string('tipo', 2)->nullable();
            $table->string('descricao', 45)->nullable();
            $table->decimal('valor', 18)->default(0);
            $table->string('cnpj', 14)->nullable();
            $table->string('bandeira', 45)->nullable();
            $table->string('autorizacao', 15)->nullable();
            $table->char('integracao', 1)->default('2')->comment('1-Integrado, 2-Não integrado');
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
        Schema::dropIfExists('app_venda_pagamento');
    }
};

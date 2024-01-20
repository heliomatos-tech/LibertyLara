<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_venda_pagamentos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('guid_venda', 65)->index('fk_venda_faturamento_guid_venda_idx');
            $table->string('tipo', 2)->nullable();
            $table->string('descricao', 45)->nullable();
            $table->decimal('valor', 18)->nullable()->default(0);
            $table->string('cnpj', 14)->nullable();
            $table->string('bandeira', 45)->nullable();
            $table->string('autorizacao', 15)->nullable();
            $table->char('integracao', 1)->nullable()->default('2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_venda_pagamentos');
    }
};

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
        Schema::create('tabela_pagamentos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ds_forma', 45)->nullable();
            $table->char('tp_integracao', 1)->nullable()->default('N');
            $table->string('ds_operadora', 45)->nullable()->default('null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabela_pagamentos');
    }
};

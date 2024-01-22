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
        Schema::create('app_nfe_parcela', function (Blueprint $table) {
            $table->id();
            $table->integer('nfe');
            $table->integer('parcela')->default(1);
            $table->decimal('valor', 18)->nullable()->default(0);
            $table->date('dt_vencimento')->nullable();
            $table->string('tipo_pagamento', 2)->nullable();
            $table->string('descricao_pagamento', 45)->nullable();
            $table->date('dt_pagamento')->nullable();
            $table->decimal('valor_pago', 18)->default(0);
            $table->foreign('nfe')->references('id')->on('app_nfe')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_nfe_parcela');
    }
};

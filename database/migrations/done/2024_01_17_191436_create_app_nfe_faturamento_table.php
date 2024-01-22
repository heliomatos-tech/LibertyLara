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
        Schema::create('app_nfe_faturamento', function (Blueprint $table) {
            $table->id();
            $table->integer('nfe');
            $table->string('tipo', 2)->nullable();
            $table->string('descricao', 45)->nullable();
            $table->decimal('valor', 18)->nullable()->default(0);
            $table->string('cnpj_autorizador', 14)->nullable();
            $table->string('cartao_bandeira', 45)->nullable();
            $table->string('autorizacao', 15)->nullable();
            $table->char('integracao', 1)->default('2')->comment('1-Integrado, 2-Nao integrado');
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
        Schema::dropIfExists('app_nfe_faturamento');
    }
};

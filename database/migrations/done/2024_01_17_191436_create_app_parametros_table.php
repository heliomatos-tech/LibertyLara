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
        Schema::create('app_parametro', function (Blueprint $table) {
            $table->id();
            $table->integer('empresa');
            $table->string('descricao', 45);
            $table->longText('valor');
            $table->char('tipo', 1)->default('C')->comment('C-Caracter, I-Integer, F-Float, D-Data');
            $table->char('ambiente', 1)->default('A')->comment('H-Homologacao, P-Producao, A-Ambos os ambientes');
            $table->foreign('empresa')->references('id')->on('sys_empresa')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_parametro');
    }
};

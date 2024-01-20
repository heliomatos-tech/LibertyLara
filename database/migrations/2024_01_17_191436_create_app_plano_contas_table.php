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
        Schema::create('app_plano_conta', function (Blueprint $table) {
            $table->id();
            $table->integer('grupo');
            $table->integer('conta');
            $table->integer('pai');
            $table->string('registro', 20)->comment('Numero da conta no Plano de Contas');
            $table->integer('ordem')->default(0);
            $table->string('descricao', 45);
            $table->char('operacao', 1)->default('C')->comment('C-Credito, D-Debito');
            $table->char('ativo', 1)->default('S');
            $table->foreign('grupo')->references('id')->on('sys_grupo')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_plano_conta');
    }
};

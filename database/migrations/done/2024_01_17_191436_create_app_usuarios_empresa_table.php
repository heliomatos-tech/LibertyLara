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
        Schema::create('app_empresa_usuario', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('usuario');
            $table->integer('empresa');
            $table->integer('nivel')->default(1);
            $table->integer('perfil')->default(0);
            $table->char('ativo', 1)->default('S');
            $table->foreign('usuario')->references('id')->on('app_usuario')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('app_empresa_usuario');
    }
};

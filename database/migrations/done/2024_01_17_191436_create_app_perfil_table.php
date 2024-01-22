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
        Schema::create('app_perfil', function (Blueprint $table) {
            $table->id();
            $table->integer('empresa');
            $table->integer('menu');
            $table->char('ativo', 1)->default('S');
            $table->integer('usuario');
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
        Schema::dropIfExists('app_perfil');
    }
};

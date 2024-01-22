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
        Schema::create('app_usuario_acessos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('usuario');
            $table->dateTime('data')->useCurrent();
            $table->string('ip', 45)->nullable();
            $table->foreign('usuario')->references('id')->on('app_usuario')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_usuario_acessos');
    }
};

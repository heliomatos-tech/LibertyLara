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
        Schema::create('app_usuario_acessos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_usuario')->index('idx_usuario_acessos_id_usuario');
            $table->dateTime('dt_acesso')->useCurrent();
            $table->string('ip_acesso', 45)->nullable();
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

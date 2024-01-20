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
        Schema::create('app_usuario_perfil', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_usuario')->index('fk_usuario_perfil_id_usuario_idx');
            $table->integer('id_empresa')->index('fk_usuario_perfil_id_empresa_idx');
            $table->integer('id_menu')->index('fk_usuario_perfil_id_menu_idx');
            $table->char('st_ativo', 1)->default('S');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_usuario_perfil');
    }
};

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
        Schema::create('app_usuarios_empresa', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_usuario');
            $table->string('guid_usuario', 65)->nullable();
            $table->integer('id_empresa')->index('fk_app_usuarios_empresa_id_empresa_idx');
            $table->integer('nu_nivel')->default(1);
            $table->integer('id_perfil')->default(0);
            $table->char('tp_ativo', 1)->default('S');

            // $table->primary(['id', 'id_usuario']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_usuarios_empresa');
    }
};

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
        Schema::create('sys_menu', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_menu')->nullable()->index('idx_sys_menu_id_menu');
            $table->unsignedInteger('id_pai');
            $table->integer('nu_ordem')->default(0);
            $table->string('ds_opcao', 45);
            $table->string('ds_controller', 100)->nullable();
            $table->string('ds_action', 45)->nullable();
            $table->string('ds_modulo', 15);
            $table->unsignedInteger('nu_nivel')->default(1);
            $table->string('ds_icon', 45)->nullable()->default('fa-check');
            $table->string('ds_imagem', 120)->nullable()->default('null');
            $table->string('tp_target', 25)->nullable();
            $table->char('st_exibir', 1)->default('S');
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
        Schema::dropIfExists('sys_menu');
    }
};

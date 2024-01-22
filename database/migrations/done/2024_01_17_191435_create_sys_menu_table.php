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
        Schema::create('sys_menu', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedInteger('pai');
            $table->integer('ordem')->default(0);
            $table->string('opcao', 45);
            $table->string('controller', 100)->nullable();
            $table->string('action', 45)->nullable();
            $table->string('modulo', 15);
            $table->unsignedInteger('nivel')->default(1);
            $table->string('icon', 45)->nullable()->default('fa-check');
            $table->string('imagem', 120)->nullable()->default('null');
            $table->string('target', 25)->nullable();
            $table->char('exibir', 1)->default('S');
            $table->char('ativo', 1)->default('S');
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

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
        Schema::create('app_pdv', function (Blueprint $table) {
            $table->id();
            $table->integer('grupo')->nullable();
            $table->integer('filial')->nullable();
            $table->string('movimento', 65)->nullable();
            $table->timestamp('data')->useCurrent();
            $table->integer('usuario');
            $table->decimal('fundo', 25, 4)->default(0);
            $table->text('observacoes')->nullable();
            $table->timestamp('fechamento')->nullable();
            $table->integer('usuario_fechamento')->nullable();
            $table->string('ip', 45)->nullable();
            $table->string('status', 10);
            $table->foreign('grupo')->references('id')->on('sys_grupo')->cascadeOnDelete()->cascadeOnUpdate();
            // $table->foreign('filial')->references('filial')->on('sys_empresa')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_pdv');
    }
};

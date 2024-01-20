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
        Schema::create('sys_popup', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('descricao', 45)->nullable();
            $table->longText('conteudo')->nullable();
            $table->integer('views')->default(1);
            $table->dateTime('inicio')->nullable();
            $table->dateTime('termino')->nullable();
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
        Schema::dropIfExists('sys_popup');
    }
};

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
        Schema::create('sys_grupo', function (Blueprint $table) {
            // $table->integer('id', true);
            $table->id();
            $table->string('decricao', 100)->nullable();
            $table->integer('maximo_filiais')->default(1);
            $table->string('ativo', 1)->default('S');
            $table->dateTime('dt_criacao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_grupo');
    }
};

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
        Schema::create('app_lc116', function (Blueprint $table) {
            $table->id();
            $table->integer('grupo');
            $table->string('codigo', 5);
            $table->string('servico', 500);
            $table->integer('pai')->nullable();
            $table->foreign('grupo')->references('id')->on('sys_grupo')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_lc116');
    }
};

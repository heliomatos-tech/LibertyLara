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
        Schema::create('app_cfop', function (Blueprint $table) {
            $table->id();
            $table->integer('grupo');
            $table->string('cfop', 5);
            $table->string('descricao', 500)->nullable();
            $table->mediumText('aplicacao')->nullable();
            $table->string('operacao', 1)->nullable();
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
        Schema::dropIfExists('app_cfop');
    }
};

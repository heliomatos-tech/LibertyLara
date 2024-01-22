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
        Schema::create('app_variacao', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('grupo');
            $table->string('descricao', 50);
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
        Schema::dropIfExists('app_variacao');
    }
};

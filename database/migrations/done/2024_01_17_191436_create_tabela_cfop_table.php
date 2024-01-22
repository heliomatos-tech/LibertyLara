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
        Schema::create('tabela_cfop', function (Blueprint $table) {
            $table->integer('id');
            $table->string('cfop', 5)->primary();
            $table->string('descricao', 500)->nullable();
            $table->mediumText('aplicacao')->nullable();
            $table->string('operacao', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabela_cfop');
    }
};

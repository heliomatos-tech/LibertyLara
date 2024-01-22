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
        Schema::create('sys_plano_conta', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('pai')->nullable();
            $table->string('numero', 45)->nullable();
            $table->string('descricao', 100)->nullable();
            $table->integer('ordem')->nullable();
            $table->char('operacao', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_plano_conta');
    }
};

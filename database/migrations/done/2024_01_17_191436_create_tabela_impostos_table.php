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
        Schema::create('tabela_imposto', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('codigo');
            $table->string('descricao', 100)->nullable();
            $table->string('calculo', 3)->nullable();
            $table->integer('imposto')->nullable();
            $table->integer('crt')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabela_imposto');
    }
};

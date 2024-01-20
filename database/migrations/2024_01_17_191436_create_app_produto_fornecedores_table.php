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
        Schema::create('app_produto_fornecedor', function (Blueprint $table) {
            $table->id();
            $table->integer('grupo');
            $table->integer('produto');
            $table->integer('fornecedor');
            $table->foreign('grupo')->references('id')->on('sys_grupo')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('produto')->references('id')->on('app_produto')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('fornecedor')->references('id')->on('app_pessoa')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_produto_fornecedor');
    }
};

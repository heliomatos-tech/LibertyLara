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
        Schema::create('app_produto_caracteristica', function (Blueprint $table) {
            $table->id();
            $table->integer('produto');
            $table->string('caracteristica', 50);
            $table->string('descricao', 100)->nullable();
            $table->integer('ordem')->default(0);
            $table->foreign('produto')->references('id')->on('app_produto')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_produto_caracteristica');
    }
};

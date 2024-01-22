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
        Schema::create('app_produto_grade', function (Blueprint $table) {
            $table->id();
            $table->integer('produto');
            $table->integer('variacao1')->nullable();
            $table->integer('item1')->nullable();
            $table->integer('variacao2')->nullable();
            $table->integer('item2')->nullable();
            $table->string('nu_gtin', 13)->nullable();
            $table->foreign('produto')->references('id')->on('app_produto')->cascadeOnDelete()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_produto_grade');
    }
};

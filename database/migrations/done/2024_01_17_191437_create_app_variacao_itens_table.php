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
        Schema::create('app_item_variacao', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('variacao');
            $table->string('descricao', 45);
            $table->integer('ordem')->default(1);
            $table->foreign('variacao')->references('id')->on('app_variacao')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_item_variacao');
    }
};

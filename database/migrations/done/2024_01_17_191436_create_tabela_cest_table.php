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
        Schema::create('tabela_cest', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('cest');
            $table->string('ncm', 11)->nullable();
            $table->string('segmento', 93);
            $table->decimal('item', 5);
            $table->longText('descricao');
            $table->string('anexoxxvii', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabela_cest');
    }
};

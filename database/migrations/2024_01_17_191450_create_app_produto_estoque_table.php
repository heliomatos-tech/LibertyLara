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
        Schema::create('app_produto_estoque', function (Blueprint $table) {
            $table->id();
            $table->integer('grupo');
            $table->integer('filial');
            $table->integer('produto');
            $table->integer('grade')->default(0);
            $table->string('gtin', 13)->nullable();
            $table->decimal('estoque', 18, 5)->nullable()->default(0);
            $table->decimal('custo', 18, 5)->nullable()->default(0);
            $table->decimal('atacado', 18, 5)->nullable()->default(0);
            $table->decimal('varejo', 18, 5)->nullable()->default(0);
            $table->decimal('comissao', 18, 5)->nullable()->default(0);
            $table->date('dt_ultima_compra')->nullable();
            $table->date('dt_ultima_venda')->nullable();
            $table->foreign('grupo')->references('id')->on('sys_grupo')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('app_produto_estoque');
    }
};

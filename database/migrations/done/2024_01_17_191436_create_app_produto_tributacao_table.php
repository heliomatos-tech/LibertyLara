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
        Schema::create('app_produto_tributacao', function (Blueprint $table) {
            $table->id();
            $table->integer('grupo');
            $table->integer('filial');
            $table->integer('produto');
            $table->integer('tributacao');
            $table->index(['grupo', 'filial'], 'idx_produto_tributacao_id_grupo_id_filial');
            $table->index(['tributacao', 'grupo'], 'idx_produto_tributacao_id_tributacao');
            $table->foreign('grupo')->references('id')->on('sys_grupo')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('produto')->references('id')->on('app_produto')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('tributacao')->references('id')->on('app_tributacao')->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_produto_tributacao');
    }
};

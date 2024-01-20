<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_variacao_itens', function (Blueprint $table) {
            $table->integer('id_variacao_item', true);
            $table->integer('id_variacao')->index('fk_variacao_item_id_variacao_idx');
            $table->string('ds_item', 45);
            $table->integer('nu_ordem')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_variacao_itens');
    }
};

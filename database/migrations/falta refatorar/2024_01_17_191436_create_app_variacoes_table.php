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
        Schema::create('app_variacoes', function (Blueprint $table) {
            $table->integer('id_variacao', true);
            $table->string('nu_guid', 45);
            $table->integer('id_grupo')->index('fk_variacoes_id_grupo_idx');
            $table->string('ds_variacao', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_variacoes');
    }
};

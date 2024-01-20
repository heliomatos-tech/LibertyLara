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
        Schema::create('tabela_cest', function (Blueprint $table) {
            $table->integer('nu_cest');
            $table->string('nu_ncm', 11)->nullable();
            $table->string('ds_segmento', 93);
            $table->decimal('nu_item', 5);
            $table->string('ds_cest', 601);
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

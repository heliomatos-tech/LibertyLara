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
        Schema::create('sys_convenios', function (Blueprint $table) {
            $table->increments('id_convenio');
            $table->string('ds_convenio', 45);
            $table->char('tp_ativo', 1)->default('0')->comment('0 = ativo   1 = Inativo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_convenios');
    }
};

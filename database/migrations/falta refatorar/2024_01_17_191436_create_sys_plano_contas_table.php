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
        Schema::create('sys_plano_contas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_pai')->nullable();
            $table->string('nu_conta', 45)->nullable();
            $table->string('ds_conta', 100)->nullable();
            $table->integer('nu_ordem')->nullable();
            $table->char('tp_operacao', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_plano_contas');
    }
};

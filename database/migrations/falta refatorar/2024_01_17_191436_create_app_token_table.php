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
        Schema::create('app_token', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ds_token', 45);
            $table->string('ds_client_key', 45);
            $table->dateTime('dh_criado');
            $table->dateTime('dh_expira');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_token');
    }
};

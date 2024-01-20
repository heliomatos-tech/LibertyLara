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
        Schema::create('sys_config', function (Blueprint $table) {
            $table->integer('sys_id', true);
            $table->string('sys_title', 500)->nullable();
            $table->text('sys_description')->nullable();
            $table->text('sys_keywords')->nullable();
            $table->text('sys_about')->nullable();
            $table->string('sys_short_name', 45)->nullable();
            $table->string('sys_ini_name', 5)->nullable();
            $table->integer('sys_update')->nullable()->default(0);
            $table->dateTime('sys_ini_update')->nullable();
            $table->dateTime('sys_end_update')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_config');
    }
};

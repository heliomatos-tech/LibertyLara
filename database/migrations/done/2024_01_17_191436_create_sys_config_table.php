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
        Schema::create('sys_config', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title', 500)->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->text('about')->nullable();
            $table->string('short_name', 45)->nullable();
            $table->string('ini_name', 5)->nullable();
            $table->integer('update')->nullable()->default(0);
            $table->dateTime('ini_update')->nullable();
            $table->dateTime('end_update')->nullable();
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

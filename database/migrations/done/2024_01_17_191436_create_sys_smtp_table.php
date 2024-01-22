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
        Schema::create('sys_smtp', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('host', 200)->nullable();
            $table->string('hostname', 45)->nullable();
            $table->string('username', 100)->nullable();
            $table->string('password', 100)->nullable();
            $table->string('fromname', 200)->nullable();
            $table->string('bcc', 100)->nullable();
            $table->string('replyto', 100)->nullable();
            $table->integer('port')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_smtp');
    }
};

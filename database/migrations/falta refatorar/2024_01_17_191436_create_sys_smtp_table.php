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
        Schema::create('sys_smtp', function (Blueprint $table) {
            $table->integer('smtp_id', true);
            $table->string('smtp_host', 200)->nullable();
            $table->string('smtp_hostname', 45)->nullable();
            $table->string('smtp_username', 100)->nullable();
            $table->string('smtp_password', 100)->nullable();
            $table->string('smtp_fromname', 200)->nullable();
            $table->string('smtp_bcc', 100)->nullable();
            $table->string('smtp_replyto', 100)->nullable();
            $table->integer('smtp_port')->nullable();
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

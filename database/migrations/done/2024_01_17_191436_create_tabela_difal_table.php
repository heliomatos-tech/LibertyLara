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
        Schema::create('tabela_difal', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('origem', 2);
            $table->string('destino', 2);
            $table->decimal('icms', 10);
            $table->decimal('icms_interestadual', 10)->nullable()->default(17);
            $table->decimal('fcp', 4)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabela_difal');
    }
};

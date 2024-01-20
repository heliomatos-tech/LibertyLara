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
        Schema::create('tabela_estados', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('uf', 2)->nullable();
            $table->string('nome', 30)->nullable();
            $table->decimal('icms', 10)->default(0);
            $table->decimal('icms_interestadual', 10)->default(17);
            $table->decimal('fcp', 4)->default(2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabela_estados');
    }
};

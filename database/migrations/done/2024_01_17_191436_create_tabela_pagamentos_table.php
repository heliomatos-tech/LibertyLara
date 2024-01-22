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
        Schema::create('tabela_pagamento', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('forma', 45);
            $table->char('integracao', 1)->default('N');
            $table->string('operadora', 45)->nullable()->default('null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabela_pagamento');
    }
};

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
        Schema::create('app_venda', function (Blueprint $table) {
            $table->id();
            $table->integer('grupo')->nullable();
            $table->integer('filial')->nullable();
            $table->string('guid', 65)->index('idx_vendas_nu_guid');
            $table->string('pdv', 65)->nullable();
            $table->string('origem', 45)->nullable()->default('PDV')->comment('PDV, Balcao, Mobile, Web');
            $table->dateTime('abertura')->nullable()->useCurrent();
            $table->dateTime('fechamento')->nullable()->useCurrent();
            $table->integer('usuario')->nullable();
            $table->string('cliente', 20)->nullable();
            $table->decimal('desconto', 15, 3)->nullable()->default(0);
            $table->decimal('acrescimo', 15, 3)->nullable()->default(0);
            $table->decimal('entrega', 15, 3)->nullable()->default(0);
            $table->decimal('total', 15, 3)->default(0);
            $table->decimal('troco', 15, 3)->default(0);
            $table->char('pagamento', 1)->default('0');
            $table->string('movimento', 65)->nullable();
            $table->string('status', 12)->default('fechada');
            $table->foreign('grupo')->references('id')->on('sys_grupo')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_venda');
    }
};

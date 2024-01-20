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
        Schema::create('app_conta', function (Blueprint $table) {
            $table->id();
            $table->integer('grupo');
            $table->integer('filial');
            $table->integer('conta')->nullable();
            $table->string('cpf_cnpj', 20)->nullable();
            $table->string('cedente', 80);
            $table->text('observacao')->nullable();
            $table->decimal('valor', 18)->default(0);
            $table->dateTime('dt_cadastro')->useCurrent();
            $table->date('dt_vencimento')->nullable();
            $table->date('dt_pagamento')->nullable();
            $table->integer('parcelas')->default(1)->comment('Quantidade de Parcelas');
            $table->integer('parcela')->default(1)->comment('Parcela atual');
            $table->integer('dia_vencimento')->nullable()->default(1);
            $table->decimal('juros', 18)->default(0);
            $table->decimal('multa', 18)->nullable()->default(0);
            $table->decimal('desconto', 18)->nullable()->default(0);
            $table->decimal('liquido', 18)->default(0);
            $table->string('recorrencia', 65)->nullable()->comment('Marca se a conta é recorrente');
            $table->char('operacao', 1)->default('P')->comment('P-Pagar, R-Receber');
            $table->char('tipo', 1)->default('S');
            $table->char('ativa', 1)->nullable()->default('S');
            // $table->foreign('filial')->references('filial')->on('sys_empresa');
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
        Schema::dropIfExists('app_contas');
    }
};

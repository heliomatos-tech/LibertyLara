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
        Schema::create('app_nfe_entrega_retirada', function (Blueprint $table) {
            $table->id();
            $table->integer('nfe');
            $table->string('descricao', 65)->nullable();
            $table->string('cpf_cnpj', 14)->nullable();
            $table->string('ibge', 8)->nullable();
            $table->string('cep', 14)->nullable();
            $table->string('endereco', 50)->nullable();
            $table->string('complemento', 45)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('cidade', 50)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('uf', 2)->nullable();
            $table->char('operacao', 1)->default('E')->comment('E-Entrega, R-Retirada');
            $table->foreign('nfe')->references('id')->on('app_nfe')->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_nfe_entrega_retirada');
    }
};

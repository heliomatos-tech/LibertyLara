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
        Schema::create('app_nfe_destinatario', function (Blueprint $table) {
            $table->id();
            $table->integer('nfe')->comment('Id da Nfe');
            $table->integer('cliente')->comment('Id do cliente');
            $table->string('nome', 65)->nullable();
            $table->string('endereco', 70)->nullable();
            $table->string('complemento', 60)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('bairro', 65)->nullable();
            $table->string('cidade', 65)->nullable();
            $table->string('ibge', 10);
            $table->char('uf', 2)->nullable();
            $table->string('cep', 9)->nullable();
            $table->string('telefone', 20)->nullable();
            $table->string('celular', 20)->nullable();
            $table->string('cpf_cnpj', 20)->nullable();
            $table->string('ie_isento_nc', 10)->nullable()->comment('Marca se é isento ou não');
            $table->string('ie', 15)->nullable();
            $table->string('im', 15)->nullable();
            $table->string('logo', 100)->nullable();
            $table->char('pessoa', 1)->nullable()->default('F')->comment('F-Fisica J-Juridica');
            $table->string('ds_email', 100)->nullable();
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
        Schema::dropIfExists('app_nfe_destinatario');
    }
};

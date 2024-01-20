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
        Schema::create('app_pessoa', function (Blueprint $table) {
            $table->id();
            $table->integer('grupo');
            $table->string('cpf_cnpj', 20)->nullable();
            $table->string('nome', 75)->nullable();
            $table->string('fantasia', 75)->nullable();
            $table->string('naturalidade', 60)->nullable();
            $table->char('uf_naturalidade', 2)->nullable();
            $table->date('dt_nascimento')->nullable();
            $table->char('sexo', 1)->nullable();
            $table->string('endereco', 80)->nullable();
            $table->string('complemento', 65)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('bairro', 65)->nullable();
            $table->string('cidade', 65)->nullable();
            $table->string('ibge', 10);
            $table->char('uf', 2)->nullable();
            $table->string('cep', 9)->nullable();
            $table->char('nu_pais', 4)->default('1058');
            $table->string('telefone', 14)->nullable();
            $table->string('celular', 14)->nullable();
            $table->string('contato', 80)->nullable();
            $table->string('ie_isento_nc', 10)->nullable();
            $table->string('ie', 15)->nullable()->comment('Inscrição Estadual');
            $table->string('im', 15)->nullable()->comment('Inscrição Municipal');
            $table->string('logomarca', 100)->nullable();
            $table->char('tipo', 1)->default('F')->comment('F-Fisica J-Juridica');
            $table->string('relacao', 1)->default('CFT')->comment('C-Cliente, F-Fornecedor, T-Transportador');
            $table->string('email', 100)->nullable();
            $table->text('observacoes')->nullable();
            $table->string('site', 100)->nullable();
            $table->dateTime('dt_cadastro')->nullable();
            $table->float('limite', 15)->nullable()->default(0);
            $table->char('ativo', 1)->default('S')->comment('S-Sim ou N-Não');
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
        Schema::dropIfExists('app_cliente');
    }
};

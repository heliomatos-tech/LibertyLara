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
        Schema::create('app_usuario', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('grupo');
            $table->string('nome', 50)->nullable();
            $table->string('sexo', 1)->nullable();
            $table->date('dt_nascimento')->nullable();
            $table->string('naturalidade', 25)->nullable();
            $table->string('uf_naturalidade', 2)->nullable();
            $table->string('cpf', 11)->nullable();
            $table->string('cep', 8)->nullable();
            $table->string('endereco', 40)->nullable();
            $table->string('complemento', 40)->nullable();
            $table->string('bairro', 30)->nullable();
            $table->string('cidade', 30)->nullable();
            $table->string('numero', 5)->nullable();
            $table->char('uf', 2)->nullable();
            $table->string('telefone', 13)->nullable();
            $table->string('celular', 13)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('senha', 50)->nullable();
            $table->integer('nivel')->default(1);
            $table->integer('perfil')->nullable()->default(0);
            $table->string('token', 50)->nullable();
            $table->date('dt_validade_token')->nullable();
            $table->string('avatar', 125)->nullable();
            $table->dateTime('dt_cadastro')->useCurrent();
            $table->char('ativo', 1)->nullable()->default('S');
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
        Schema::dropIfExists('app_usuario');
    }
};

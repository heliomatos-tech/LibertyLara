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
        Schema::create('sys_usuario', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('usuario');
            $table->integer('empresa');
            $table->string('nome', 60);
            $table->char('sexo', 1)->nullable();
            $table->date('dt_nascimento')->nullable();
            $table->string('naturalidade', 60)->nullable();
            $table->string('uf_naturalidade', 2)->nullable();
            $table->string('cpf', 14)->nullable();
            $table->string('cep', 10)->nullable();
            $table->string('endereco', 60)->nullable();
            $table->string('complemento', 60)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('cidade', 60)->nullable();
            $table->string('numero', 5)->nullable();
            $table->string('uf_endereco', 2)->nullable();
            $table->string('telefone', 14)->nullable();
            $table->string('celular', 14)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('senha', 50);
            $table->string('token', 50)->nullable();
            $table->string('avatar', 150)->nullable();
            $table->unsignedInteger('nivel')->default(1)->comment('1 = Operador  2 = Administrador 3 - Supervisor');
            $table->string('accesskey', 45)->nullable();
            $table->char('ativo', 1)->nullable()->default('S')->comment('1 = Ativo  2 = Inativo');
            $table->foreign('usuario')->references('id')->on('app_usuario')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('empresa')->references('id')->on('sys_empresa')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_usuario');
    }
};

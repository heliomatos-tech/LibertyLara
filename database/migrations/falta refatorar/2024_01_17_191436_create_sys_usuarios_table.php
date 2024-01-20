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
        Schema::create('sys_usuarios', function (Blueprint $table) {
            $table->integer('id_usuario', true);
            $table->integer('id_empresa');
            $table->string('ds_nome', 60);
            $table->char('tp_sexo', 1)->nullable();
            $table->date('dt_nascimento')->nullable();
            $table->string('ds_naturalidade', 60)->nullable();
            $table->string('uf_naturalidade', 2)->nullable();
            $table->string('nu_cpf', 14)->nullable();
            $table->string('nu_cep', 10)->nullable();
            $table->string('ds_endereco', 60)->nullable();
            $table->string('ds_complemento', 60)->nullable();
            $table->string('ds_bairro', 50)->nullable();
            $table->string('ds_cidade', 60)->nullable();
            $table->string('nu_endereco', 5)->nullable();
            $table->string('uf_endereco', 2)->nullable();
            $table->string('nu_telefone', 14)->nullable();
            $table->string('nu_celular', 14)->nullable();
            $table->string('ds_email', 100)->nullable();
            $table->string('ds_senha', 50);
            $table->string('ds_token', 50)->nullable();
            $table->string('ds_foto', 150)->nullable();
            $table->unsignedInteger('nu_nivel')->default(1)->comment('1 = Operador  2 = Administrador 3 - Supervisor');
            $table->string('ds_accesskey', 45)->nullable();
            $table->char('tp_ativo', 1)->nullable()->default('S')->comment('1 = Ativo  2 = Inativo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_usuarios');
    }
};

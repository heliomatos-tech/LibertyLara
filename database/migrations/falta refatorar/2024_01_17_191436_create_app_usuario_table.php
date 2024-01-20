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
        Schema::create('app_usuario', function (Blueprint $table) {
            $table->integer('id_usuario', true);
            $table->string('nu_guid', 65)->nullable()->index('idx_usuarios_nu_guid');
            $table->string('ds_nome', 50)->nullable();
            $table->string('tp_sexo', 1)->nullable();
            $table->date('dt_nascimento')->nullable();
            $table->string('ds_naturalidade', 25)->nullable();
            $table->string('uf_naturalidade', 2)->nullable();
            $table->string('nu_cpf', 11)->nullable();
            $table->string('nu_cep', 8)->nullable();
            $table->string('ds_endereco', 40)->nullable();
            $table->string('ds_complemento', 40)->nullable();
            $table->string('ds_bairro', 30)->nullable();
            $table->string('ds_cidade', 30)->nullable();
            $table->string('nu_endereco', 5)->nullable();
            $table->char('tp_uf', 2)->nullable();
            $table->string('nu_telefone', 13)->nullable();
            $table->string('nu_celular', 13)->nullable();
            $table->string('ds_email', 50)->nullable();
            $table->string('ds_senha', 50)->nullable();
            $table->integer('nu_nivel')->default(1);
            $table->integer('id_perfil')->nullable()->default(0);
            $table->string('ds_token', 50)->nullable();
            $table->date('dt_validade_token')->nullable();
            $table->string('ds_foto', 125)->nullable();
            $table->dateTime('dt_cadastro')->useCurrent();
            $table->char('tp_ativo', 1)->nullable()->default('S');
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

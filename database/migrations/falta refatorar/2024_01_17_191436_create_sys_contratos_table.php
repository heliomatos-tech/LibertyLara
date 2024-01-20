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
        Schema::create('sys_contratos', function (Blueprint $table) {
            $table->integer('id_contrato', true);
            $table->integer('id_grupo')->nullable();
            $table->string('ds_empresa', 50);
            $table->string('ds_fantasia', 35)->nullable();
            $table->string('ds_endereco', 40)->nullable();
            $table->string('nu_endereco', 6)->nullable();
            $table->string('ds_bairro', 30)->nullable();
            $table->string('ds_cidade', 30)->nullable();
            $table->string('nu_cep', 9)->nullable();
            $table->string('tp_uf', 2)->nullable();
            $table->string('ds_email', 50)->nullable();
            $table->string('ds_web', 50)->nullable();
            $table->string('nu_telefone1', 13)->nullable();
            $table->string('nu_telefone2', 13)->nullable();
            $table->string('nu_fax', 13)->nullable();
            $table->string('nu_cnpj', 18)->nullable();
            $table->date('dt_inicio')->nullable();
            $table->date('dt_final')->nullable();
            $table->decimal('vl_contrato', 15)->nullable()->default(0);
            $table->string('arq_contrato', 100)->nullable();
            $table->string('tp_status', 20)->nullable()->default('ativo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_contratos');
    }
};

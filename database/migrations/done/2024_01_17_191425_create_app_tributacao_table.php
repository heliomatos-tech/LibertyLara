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
        Schema::create('app_tributacao', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tributacao');
            $table->integer('id_grupo')->index('fk_tributacao_id_grupo_idx_idx');
            $table->string('nu_guid', 65)->nullable();
            $table->string('ds_tributacao', 60)->nullable();
            $table->string('cst_ipi', 3)->nullable();
            $table->string('cst_icms', 3)->nullable();
            $table->string('cst_pis', 3)->nullable();
            $table->string('cst_cofins', 3)->nullable();
            $table->string('cod_csosn', 5)->nullable();
            $table->integer('cfop_externo')->nullable();
            $table->integer('cfop_interno')->nullable();
            $table->decimal('ipi_interno', 18)->nullable()->default(0);
            $table->decimal('ipi_externo', 18)->nullable()->default(0);
            $table->decimal('aliquota_pis', 18)->nullable()->default(0);
            $table->decimal('aliquota_cofins', 18)->nullable()->default(0);
            $table->decimal('aliquota_ir', 18)->nullable()->default(0);
            $table->decimal('aliquota_csll', 18)->nullable()->default(0);
            $table->decimal('aliquota_outras', 18)->nullable()->default(0);
            $table->decimal('aliquota_iss', 18)->nullable()->default(0);
            $table->decimal('aliquota_icms', 18)->nullable()->default(0);
            $table->decimal('aliquota_ipi', 18)->nullable()->default(0);
            $table->decimal('aliquota_mva', 18)->nullable()->default(0);
            $table->decimal('aliquota_pisst', 18)->nullable()->default(0);
            $table->decimal('aliquota_cofinsst', 18)->nullable()->default(0);
            $table->integer('modalidade_icms')->nullable()->default(0);
            $table->integer('tributacao_issqn')->nullable()->default(0);
            $table->string('isento_pis_cofins', 1)->default('N');
            $table->decimal('reducao_icmsst', 18)->nullable()->default(0);
            $table->decimal('reducao_icms', 18)->nullable()->default(0);
            $table->char('substituicao_tributaria', 1)->nullable()->default('N');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_tributacao');
    }
};

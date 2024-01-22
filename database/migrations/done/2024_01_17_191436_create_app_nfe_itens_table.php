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
        Schema::create('app_nfe_item', function (Blueprint $table) {
            $table->id();
            $table->integer('nfe');
            $table->integer('item')->comment('Numero do item');
            $table->string('produto', 15)->nullable()->comment('Codigo do produto');
            $table->string('gtin', 13)->nullable();
            $table->string('descricao', 250);
            $table->string('informacoes_adicionais', 1024)->nullable();
            $table->string('unidade', 5)->default('unid');
            $table->string('unidade_tributaria', 5)->nullable();
            $table->integer('lote')->nullable();
            $table->string('cfop', 4)->nullable();
            $table->string('cfop_interno', 4)->nullable();
            $table->string('cfop_externo', 4)->nullable();
            $table->decimal('quantidade', 15, 5)->nullable();
            $table->decimal('quantidade_tributaria', 15, 5)->nullable();
            $table->decimal('custo', 15, 5)->nullable()->default(0);
            $table->decimal('venda', 15, 5)->nullable()->default(0);
            $table->decimal('unidade_trib', 15, 5)->nullable()->default(0);
            $table->decimal('acrescimo', 15, 5)->nullable()->default(0);
            $table->decimal('desconto', 15, 5)->nullable()->default(0);
            $table->decimal('frete', 15, 5)->nullable()->default(0);
            $table->decimal('seguro', 15, 5)->nullable()->default(0);
            $table->decimal('outras', 15, 5)->nullable()->default(0);
            $table->string('cst_ipi', 3)->nullable()->default('0');
            $table->decimal('valor_total', 15)->nullable()->default(0);
            $table->char('isento_pis_cofins', 1)->nullable()->default('S');
            $table->decimal('aliquota_ipi', 15)->nullable()->default(0);
            $table->decimal('valor_ipi', 15)->nullable()->default(0);
            $table->string('cst_pis', 3)->nullable()->default('0');
            $table->decimal('valor_base_pis', 15)->nullable()->default(0);
            $table->decimal('aliquota_pis', 15)->nullable()->default(0);
            $table->decimal('valor_pis', 15)->nullable()->default(0);
            $table->decimal('vl_base_pisst', 15)->nullable()->default(0);
            $table->decimal('aliquota_pisst', 15)->nullable()->default(0);
            $table->decimal('valor_pisst', 15)->nullable()->default(0);
            $table->string('cst_cofins', 3)->nullable()->default('0');
            $table->decimal('valor_base_cofins', 15)->nullable()->default(0);
            $table->decimal('aliquota_cofins', 15)->nullable()->default(0);
            $table->decimal('valor_cofins', 15)->nullable()->default(0);
            $table->decimal('aliquota_cofinsst', 15)->nullable()->default(0);
            $table->decimal('valor_cofinsst', 15)->nullable()->default(0);
            $table->string('cst_issqn', 3)->nullable()->default('0');
            $table->decimal('valor_issqn', 15)->nullable();
            $table->decimal('valor_base_iss', 15)->nullable()->default(0);
            $table->decimal('aliquota_iss', 15)->nullable()->default(0);
            $table->decimal('valor_iss', 15)->nullable()->default(0);
            $table->decimal('valor_iss_retido', 15)->nullable();
            $table->string('cst_icms', 3)->nullable()->default('0');
            $table->smallInteger('modalidade_icms')->nullable()->default(-1);
            $table->smallInteger('modalidade_icmsst')->nullable()->default(4);
            $table->decimal('aliquota_icms', 15)->nullable()->default(0);
            $table->decimal('valor_base_icms', 15)->nullable()->default(0);
            $table->decimal('valor_icms', 15)->nullable()->default(0);
            $table->decimal('aliquota_icmsst', 15)->nullable()->default(0);
            $table->decimal('valor_base_icmsst', 15)->nullable()->default(0);
            $table->decimal('aliquota_reducao', 15)->nullable()->default(0);
            $table->decimal('valor_icmsst', 15)->nullable()->default(0);
            $table->decimal('valor_pis_servicos', 15)->nullable()->default(0);
            $table->decimal('valor_cofins_servicos', 15)->nullable()->default(0);
            $table->decimal('valor_total_nao_incidencia', 15)->nullable()->default(0);
            $table->decimal('valor_desconto_condicional', 15)->nullable()->default(0);
            $table->decimal('valor_deducao', 15)->nullable()->default(0);
            $table->string('ncm', 8)->nullable();
            $table->string('csosn', 3)->nullable();
            $table->string('servico', 8)->nullable()->comment('Codigo do Servico na LC 116');
            $table->string('codigo_no_municipio', 12)->nullable();
            $table->integer('codigo_rastro')->nullable()->default(0);
            $table->decimal('aliquota_ir', 15)->nullable()->default(0);
            $table->decimal('valor_ir', 15)->nullable()->default(0);
            $table->decimal('aliquota_mva', 15)->nullable()->default(0);
            $table->decimal('aliquota_csll', 15)->nullable()->default(0);
            $table->decimal('valor_csll', 15)->nullable()->default(0);
            $table->char('tipo', 1)->default('P')->comment('Tipo do item - P-Produto, S-Servico');
            $table->char('origem', 1)->default('0');
            $table->string('especifico', 2)->nullable()->default('N');
            $table->decimal('total', 18, 5)->default(0);
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
        Schema::dropIfExists('app_nfe_item');
    }
};

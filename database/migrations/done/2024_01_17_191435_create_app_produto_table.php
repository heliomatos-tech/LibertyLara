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
        Schema::create('app_produto', function (Blueprint $table) {
            $table->id();
            $table->integer('grupo')->index('idx_produto_id_grupo');
            $table->integer('tributacao')->nullable()->default(1);
            $table->string('codigo', 13)->nullable();
            $table->string('servico', 8)->nullable();
            $table->string('gtin', 13)->nullable();
            $table->integer('secao')->nullable();
            $table->string('descricao', 70)->nullable();
            $table->string('descricao_cupom', 40)->nullable();
            $table->decimal('estoque_minimo', 18, 5)->nullable()->default(10);
            $table->decimal('estoque_maximo', 18, 5)->nullable()->default(100);
            $table->decimal('lucro_bruto', 18, 5)->nullable()->default(0);
            $table->decimal('custo', 18, 5)->nullable()->default(0);
            $table->decimal('valor', 18, 5)->nullable()->default(0);
            $table->decimal('atacado', 18, 5)->nullable()->default(0);
            $table->decimal('lucro', 18, 5)->nullable()->default(0);
            $table->decimal('comissao_maxima', 18, 5)->nullable()->default(0);
            $table->decimal('comissao', 18, 5)->nullable()->default(0);
            $table->decimal('lucro_minimo', 18, 5)->nullable()->default(0);
            $table->decimal('desc_maximo', 18, 5)->nullable()->default(0);
            $table->string('unidade', 5)->nullable()->default('UND');
            $table->string('unidade_trib', 5)->default('UND');
            $table->decimal('altura', 18, 5)->nullable()->default(0);
            $table->decimal('largura', 18, 5)->nullable()->default(0);
            $table->decimal('profundidade', 18, 5)->nullable()->default(0);
            $table->decimal('peso_bruto', 18, 5)->nullable()->default(0);
            $table->decimal('peso_liquido', 18, 5)->nullable()->default(0);
            $table->decimal('temp_maxima', 18, 5)->nullable()->default(0);
            $table->decimal('temp_minima', 18, 5)->nullable()->default(0);
            $table->decimal('temp_ideal', 18, 5)->nullable()->default(0);
            $table->integer('origem')->nullable()->default(0);
            $table->integer('dias_validade')->nullable()->default(90);
            $table->char('cst_pis', 2)->nullable();
            $table->char('cst_cofins', 2)->nullable();
            $table->decimal('aliquota_pis', 5)->default(0);
            $table->decimal('aliquota_cofins', 5)->default(0);
            $table->decimal('aliquota_iss', 5)->default(0);
            $table->decimal('aliquota_icms', 5)->default(0);
            $table->decimal('aliquota_ir', 5)->default(0);
            $table->decimal('aliquota_csll', 5)->default(0);
            $table->decimal('aliquota_outras', 5)->default(0);
            $table->decimal('aliquota_reducao', 10)->nullable()->default(0);
            $table->string('ncm', 10)->nullable();
            $table->string('cest', 8)->nullable();
            $table->char('cfop', 4)->nullable();
            $table->text('informacoes')->nullable();
            $table->char('isento_pis_cofins', 1)->default('S');
            $table->char('tipo', 1)->nullable()->default('P')->comment('P-Produto, S-Servico');
            $table->char('perecivel', 1)->nullable()->default('N');
            $table->char('controla_estoque', 1)->nullable()->default('S');
            $table->char('tsair_tabela_preco', 1)->nullable()->default('S');
            $table->string('especifico', 30)->nullable();
            $table->char('possui_grade', 1)->default('N');
            $table->char('tpesado', 1)->default('N');
            $table->char('fracionado', 1)->default('N');
            $table->integer('categoria')->default(0);
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
        Schema::dropIfExists('app_produto');
    }
};

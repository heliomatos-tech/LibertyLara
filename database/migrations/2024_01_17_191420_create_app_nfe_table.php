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
        Schema::create('app_nfe', function (Blueprint $table) {
            $table->id();
            $table->string('chave', 44)->nullable();
            $table->integer('nfe')->default(0);
            $table->string('cnf', 12)->nullable();
            $table->integer('grupo')->nullable();
            $table->integer('filial');
            $table->integer('operacao')->default(1)->comment('1-Saida  2-Entrada');
            $table->integer('finalidade')->default(1);
            $table->integer('presenca')->default(1);
            $table->integer('pagamento')->default(0)->comment('0-Sem pagamento, e os tipos de pagamento');
            $table->char('entrega_retirada', 1)->default('N');
            $table->integer('frete')->default(9)->comment('Tipo de frete');
            $table->string('cpf_cnpj_emitente', 18)->nullable();
            $table->string('emitente', 70)->nullable();
            $table->integer('serie')->nullable()->default(1);
            $table->dateTime('dh_emissao')->nullable();
            $table->dateTime('dh_saida')->nullable();
            $table->dateTime('dt_criacao')->nullable()->useCurrent();
            $table->string('cpf_cnpj', 20)->nullable();
            $table->string('destinatario', 70)->nullable();
            $table->string('email', 100)->nullable();
            $table->integer('parcelas')->nullable()->default(0);
            $table->decimal('valor_base_icms', 18)->nullable()->default(0);
            $table->decimal('valor_icms', 18)->nullable()->default(0);
            $table->decimal('valor_base_icmsst', 18)->nullable()->default(0);
            $table->decimal('valor_icmsst', 18)->nullable()->default(0);
            $table->decimal('valor_base_icms_fcp', 18)->nullable()->default(0);
            $table->decimal('valor_icms_fcp', 18)->nullable()->default(0);
            $table->decimal('valor_base_icmsst_fcp', 18)->nullable()->default(0);
            $table->decimal('valor_icmsst_fcp', 18)->nullable()->default(0);
            $table->decimal('valor_base_pis', 18)->nullable()->default(0);
            $table->decimal('valor_pis', 18)->nullable()->default(0);
            $table->decimal('valor_base_pisst', 18)->nullable()->default(0);
            $table->decimal('valor_pisst', 18)->nullable()->default(0);
            $table->decimal('valor_ipi', 18)->nullable()->default(0);
            $table->decimal('valor_iss', 18)->nullable()->default(0);
            $table->decimal('valor_impostos_servicos', 18)->nullable()->default(0);
            $table->decimal('valor_frete', 18)->nullable()->default(0);
            $table->decimal('valor_seguro', 18)->nullable()->default(0);
            $table->decimal('valor_desconto', 18)->nullable()->default(0);
            $table->decimal('valor_acrescimo', 18)->nullable()->default(0);
            $table->decimal('valor_outras', 18)->nullable()->default(0);
            $table->decimal('valor_desconto_icms', 18)->nullable()->default(0);
            $table->decimal('valor_desconto_base', 18)->nullable()->default(0);
            $table->decimal('valor_retencao_pis', 18)->nullable()->default(0);
            $table->decimal('valor_retencao_cofins', 18)->nullable()->default(0);
            $table->decimal('valor_retencao_icms', 18)->nullable()->default(0);
            $table->decimal('valor_retencao_csll', 18)->nullable()->default(0);
            $table->decimal('valor_base_irrf', 18)->nullable()->default(0);
            $table->decimal('valor_retencao_irrf', 18)->nullable()->default(0);
            $table->decimal('valor_base_inss', 18)->nullable()->default(0);
            $table->decimal('valor_retencao_inss', 18)->nullable()->default(0);
            $table->decimal('valor_produtos', 18)->nullable()->default(0);
            $table->decimal('valor_servicos', 18)->nullable()->default(0);
            $table->decimal('valor_total_itens', 18)->nullable()->default(0);
            $table->decimal('valor_total', 18)->nullable()->default(0);
            $table->decimal('valor_troco', 18)->default(0);
            $table->longText('informacoes_complementares')->nullable();
            $table->longText('informacoes_fisco')->nullable();
            $table->integer('medico')->nullable();
            $table->integer('receita_tipo')->nullable();
            $table->string('receita', 30)->nullable();
            $table->date('dt_receita')->nullable();
            $table->integer('receita_uso')->nullable();
            $table->string('versao', 6)->nullable();
            $table->integer('modelo')->nullable()->default(55);
            $table->string('protocolo', 30)->nullable();
            $table->string('recibo', 30)->nullable();
            $table->integer('lote')->nullable();
            $table->dateTime('dh_recibo')->nullable();
            $table->integer('contingencia')->nullable()->comment('Status da contigência');
            $table->string('protocolo_cancelamento', 30)->nullable();
            $table->integer('sequencia')->nullable()->comment('Sequencia de Carta de Correcao');
            $table->integer('cce')->default(0)->comment('Numero da Carta de correcao');
            $table->text('descricao_cce')->nullable()->comment('Descricao da Carta de Correcao');
            $table->char('cancelada', 1)->default('N')->comment('N-Não cancelada, S-Cancelada');
            $table->text('descricao_cancelamento')->nullable();
            $table->text('xml')->nullable()->comment('Conteudo do XML');
            $table->longText('xml_cce')->nullable();
            $table->longText('xml_cancelamento')->nullable();
            $table->dateTime('dt_upload')->nullable();
            $table->char('ambiente', 1)->nullable()->default('1');
            $table->string('natureza_operacao', 100)->nullable()->default('VENDA');
            $table->string('edicao', 45)->nullable()->default('digitacao');
            $table->string('status', 50)->nullable()->default('000');
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
        Schema::dropIfExists('app_nfe');
    }
};

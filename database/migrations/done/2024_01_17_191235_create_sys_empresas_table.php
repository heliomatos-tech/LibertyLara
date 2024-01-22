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
        Schema::create('sys_empresa', function (Blueprint $table) {
            $table->id();
            $table->integer('grupo')->index('idx_sys_empresas_id_grupo');
            $table->integer('filial')->index('idx_sys_empresas_id_filial');
            $table->string('nome', 100);
            $table->string('fantasia', 50)->nullable();
            $table->string('endereco', 80)->nullable();
            $table->string('complemento', 60)->nullable();
            $table->string('numero', 6)->nullable();
            $table->string('bairro', 65)->nullable();
            $table->string('cidade', 65)->nullable();
            $table->string('ibge', 8)->nullable();
            $table->string('cep', 9)->nullable();
            $table->string('uf', 2)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('site', 50)->nullable();
            $table->string('telefone1', 13)->nullable();
            $table->string('telefone2', 13)->nullable();
            $table->string('fax', 13)->nullable();
            $table->string('cpf_cnpj', 18)->nullable();
            $table->string('ie', 15)->nullable();
            $table->string('im', 20)->nullable();
            $table->string('cnae', 15)->nullable();
            $table->date('dt_inicio')->nullable();
            $table->date('dt_final')->nullable();
            $table->dateTime('dt_cadastro')->nullable()->useCurrent();
            $table->char('aceite', 1)->nullable()->default('S')->comment('Marcar se o cliente aceitou o contrato');
            $table->decimal('valor', 15)->nullable();
            $table->string('acesso', 45)->nullable()->comment('Nome de acesso a empresa');
            $table->integer('regime')->nullable()->default(1)->comment('Regime Fiscal - Simples Nacional, Simples Nacional com Excesso de Receita, Normal');
            $table->string('logomarca', 45)->nullable()->comment('Nome do arquivo de logomarca');
            $table->string('contato', 100)->nullable()->comment('Nome do contato da empresa');
            $table->unsignedInteger('convenio')->default(1)->comment('caso possua um convenio com relação diferenciada');
            $table->string('certificado_digital', 45)->nullable()->comment('Nome do Certificado Digital');
            $table->dateTime('certificado_validade')->nullable();
            $table->string('certificado_serie', 45)->nullable();
            $table->string('certificado_emissor', 45)->nullable();
            $table->string('certificado_senha', 45)->nullable();
            $table->char('tipo_certificado', 2)->nullable()->comment('Tipo de Certificado, A1 ou A3');
            $table->char('ambiente', 1)->nullable()->default('2')->comment('Tipo de Ambiente 1-Producao e 2-Homologacao');
            $table->char('nfe_modelo', 2)->nullable()->default('55');
            $table->string('nfce_id_csc', 6)->nullable();
            $table->string('nfce_csc', 45)->nullable();
            $table->integer('nfe_ultimo_emitido')->default(0);
            $table->integer('nfce_ultimo_emitido')->default(0);
            $table->integer('nfse_ultimo_emitido')->default(0);
            $table->integer('nfe_serie')->default(1);
            $table->integer('nfce_serie')->default(1);
            $table->integer('nfse_serie')->default(1);
            $table->string('nfe_versao', 5)->default('4.00');
            $table->string('nfce_versao', 5)->default('4.00');
            $table->string('nfse_versao', 5)->default('4.00');
            $table->double('aliquota_credito_sn', 6, 3)->default(0);
            $table->longText('email_nfe')->nullable();
            $table->string('email_from', 100)->nullable();
            $table->string('email_contabilidade', 100)->nullable();
            $table->longText('msg_email_contabilidade')->nullable();
            $table->string('access_key', 100)->nullable()->comment('Chave de Acesso a API');
            $table->string('pass_key', 100)->nullable()->comment('Senha de Acesso a API');
            $table->double('aliquota_pis', 6, 3)->default(0);
            $table->double('aliquota_cofins', 6, 3)->default(0);
            $table->double('aliquota_csll', 6, 3)->default(0);
            $table->double('aliquota_icms', 6, 3)->default(0);
            $table->double('aliquota_irrf', 6, 3)->default(0);
            $table->double('aliquota_inss', 6, 3)->default(0);
            $table->string('integrador', 20)->nullable()->default('asaas');
            $table->string('integracao', 20)->nullable()->default('null');
            $table->integer('tempo_sessao')->default(0)->comment('Tempo de sessao em segundos, 0-não expira');
            $table->char('onboard', 1)->nullable()->default('N')->comment('Marca se é para exibir a tela de boas vindas');
            $table->char('setup', 1)->default('S')->comment('Marca se o Setup inicial foi executado');
            $table->char('cobranca', 1)->default('N')->comment('Marca se é para exibir a nag screen de cobrança');
            $table->char('conta_ativada', 1)->default('S')->comment('Marca se a conta está ativada');

            $table->index(['grupo', 'filial'], 'idx_sys_empresas_id_grupo_id_filial');
            // $table->primary(['id_empresa', 'id_grupo', 'id_filial']);

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
        Schema::dropIfExists('sys_empresa');
    }
};

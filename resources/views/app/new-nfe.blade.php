@extends($showLayout ? 'layouts.main' : 'layouts.blank')
@section('main-content')
    <!--{tpl_arr_produtos_servicos}-->
    <div id="form-dados-nfe" data-target="{%action_form%}">
        <input type='hidden' class="no-clear" id='action' value="{%action%}">
        <input type='hidden' class="no-clear hidden" name="guid" value="{%nu_guid%}">
        <input type='hidden' class="no-clear hidden" name="token" value="{%nu_token%}">
        <div class="clearfix"></div>
        <div class="flex flex-wrap ">
            <div class="w-full mb-4">
                <button
                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700"
                    id="btn-form-destinatario">Destinatário</button>
                <button
                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700"
                    id="btn-form-faturamento">Pagamento</button>
                <button
                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700"
                    id="btn-form-impostos">Impostos e Retenções</button>
                <button
                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700"
                    id="btn-form-transporte">Frete/Transporte</button>
                <button
                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700"
                    id="btn-form-documentos">Documentos Referenciados</button>
            </div>
            <div id="dados-secundarios" class="flex flex-wrap  relative flex-grow max-w-full flex-1 px-4">
                <!--{tpl_box_nfe_destinatario}-->
                <!--{tpl_box_nfe_faturamento}-->
                <!--{tpl_box_nfe_transporte}-->
                <!--{tpl_box_nfe_impostos}-->
                <!--{tpl_box_nfe_documentos_referenciados}-->
            </div>

            <div class="md:w-full pr-4 pl-4">
                <div class="x_title">
                    <span class="h5">Dados da Nota Fiscal Eletrônica</span>
                    <div class="clearfix"></div>
                </div>
                <div class="flex flex-wrap ">
                    <div class="md:w-4/5 pr-4 pl-4 mb-4">
                        <label for="ds_natureza">Natureza da Operação:</label>
                        <input type=text
                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                            name="ds_natureza" id="ds_natureza" list="lst_ds_natureza" value="{%ds_natureza%}" />
                        <datalist id="lst_ds_natureza">
                            <option value="Venda"></option>
                            <option value="Prestação de Serviços"></option>
                        </datalist>
                    </div>
                    <div class="md:w-1/2 pr-4 pl-4 mb-4">
                        <label for="dest_nome_view">Destinatário:</label>
                        <input type=text readonly
                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                            id="dest_nome_view" placeholder="Faltando os dados do Destinatário" value="{%dest_ds_nome%}" />
                    </div>
                    <div class="md:w-1/4 pr-4 pl-4 sm:w-2/3 pr-4 pl-4 float-left mb-4">
                        <label for="tp_finalidade">Finalidade da nota:</label>
                        <select required
                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                            name="tp_finalidade" id="tp_finalidade">
                            <!--{lista_finalidade}-->
                        </select>
                    </div>
                    <div class="md:w-1/5 pr-4 pl-4 sm:w-full pr-4 pl-4 float-left mb-4">
                        <label for="tp_operacao">Tipo de nota:</label>
                        <select required
                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                            name="tp_operacao" id="tp_operacao">
                            <!--{lista_tipo_nota}-->
                        </select>
                    </div>
                </div>
            </div>
            <div id="produtos_nfe" class="cccol-sm-12" style="display: none;">
                <div id="produtos_nfe" class="sm:w-full pr-4 pl-4">
                    <div class="x_title">
                        <span class="h5">Produtos e Serviços</span>
                        <div class="clearfix"></div>
                    </div>

                    <div data-id="dados_produto_servico" class="flex flex-wrap ">
                        <div class="md:w-2/5 pr-4 pl-4 float-left mb-4">
                            <label for="descricao_prod">Descrição:</label>
                            <div class="relative flex items-stretch w-full">
                                <input type="text"
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required"
                                    id="descricao_prod">
                                <span class="input-group-append">
                                    <button type="button" id="btn-item-clear"
                                        class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-red-600 border-red-600 hover:bg-red-600 hover:text-white bg-white hover:bg-red-700"
                                        data-toggle="tooltip" title="Limpar item"><span class="fa fa-times"></span></button>
                                </span>
                            </div>
                        </div>


                        <div class="md:w-1/5 pr-4 pl-4 float-left mb-4">
                            <label for="preco_prod">Preço Unit:</label>
                            <input type="text"
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required float_point"
                                id="preco_prod" value="" disabled>
                        </div>
                        <!--  </div> -->
                        <div class="md:w-1/5 pr-4 pl-4 float-left mb-4">
                            <label for="qtd_prod">Qtde:</label>
                            <input type="text"
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required float_point"
                                id="qtd_prod" value="1" disabled>
                        </div>

                        <div class="md:w-1/5 pr-4 pl-4 float-left mb-4">
                            <label for="total_prod">Total:</label>
                            <input type="text"
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required"
                                id="total_prod" value="" dir="rtl" disabled readonly="readonly">
                        </div>
                        <div class="mb-4 flex items-end flex-col">
                            <div class="mt-auto mb-1">
                                <button id="btn-add-item"
                                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-teal-500 border-teal-500 hover:bg-teal-500 hover:text-white bg-white hover:bg-teal-600 mb-4"
                                    disabled="disabled"><span class="fa fa-plus mr-2"></span>Incluir</button>
                            </div>
                        </div>
                    </div>
                    <!-- <table id="tabela-itens-nfe" class="w-full max-w-full mb-4 bg-transparent table-striped dt-responsive nowrap" width="100%" cellspacing="0"> -->
                    <table id="itens-nfe" class="w-full max-w-full mb-4 bg-transparent table-striped dt-responsive nowrap"
                        width="100%" cellspacing="0">
                        <colgroup>
                            <col style="width:10%">
                            <col style="width:35%">
                            <col style="width:10%">
                            <col style="width:15%">
                            <col style="width:15%">
                            <col style="width:15%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="text-left">Codigo</th>
                                <th class="text-left">Descrição</th>
                                <th class="text-right">Qtd</th>
                                <th class="text-right">Preço</th>
                                <th class="text-right">Total</th>
                                <th class="text-center">Opções</th>
                            </tr>
                        </thead>
                        <tbody id="itens">
                            <!--{lista_produtos_nfe}-->
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-wrap  md:w-full pr-4 pl-4">
                    <div class="md:w-1/5 pr-4 pl-4">
                        <label>Frete</label>
                        <div class="relative flex items-stretch w-full mb-4">
                            <input
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point total-ratear moeda-format"
                                type="text" id="vl_frete" name="vl_frete" data-decimals="2" value="{%vl_frete%}" />
                            <span class="input-group-append">
                                <button type="button"
                                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700 btn-rateio"
                                    data-toggle="tooltip" title="Ratear Frete" data-target="vl_frete"><span
                                        class="fa fa-calculator"></span></button>
                            </span>
                        </div>
                    </div>
                    <div class="md:w-1/5 pr-4 pl-4">
                        <label>Seguro</label>
                        <div class="relative flex items-stretch w-full mb-4">
                            <input
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point total-ratear moeda-format"
                                type="text" id="vl_seguro" name="vl_seguro" data-decimals="2"
                                value="{%vl_seguro%}" />
                            <span class="input-group-append">
                                <button type="button"
                                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700 btn-rateio"
                                    data-toggle="tooltip" title="Ratear Seguro" data-target="vl_seguro"><span
                                        class="fa fa-calculator"></span></button>
                            </span>
                        </div>
                    </div>
                    <div class="md:w-1/5 pr-4 pl-4">
                        <label>Outras</label>
                        <div class="relative flex items-stretch w-full mb-4">
                            <input
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point total-ratear moeda-format"
                                type="text" id="vl_outras" name="vl_outras" data-decimals="2"
                                value="{%vl_outras%}" />
                            <span class="input-group-append">
                                <button type="button"
                                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700 btn-rateio"
                                    data-toggle="tooltip" title="Ratear Outras" data-target="vl_outras"><span
                                        class="fa fa-calculator"></span></button>
                            </span>
                        </div>
                    </div>
                    <div class="md:w-1/5 pr-4 pl-4">
                        <label>Desconto</label>
                        <div class="relative flex items-stretch w-full mb-4">
                            <input
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point total-ratear moeda-format"
                                type="text" id="vl_desconto" name="vl_desconto" data-decimals="2"
                                value="{%vl_desconto%}" />
                            <span class="input-group-append">
                                <button type="button"
                                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700 btn-rateio"
                                    data-toggle="tooltip" title="Ratear Desconto" data-target="vl_desconto"><span
                                        class="fa fa-calculator"></span></button>
                            </span>
                        </div>
                    </div>
                    <div class="md:w-1/3 pr-4 pl-4">
                        <div class="md:w-1/2 pr-4 pl-4 float-right">
                            <label>Total da Nota</label>
                            <div class="mb-4">
                                <input
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded money font-bold no-required"
                                    type="text" dir="rtl" id="vl_total" name="vl_total" value="{%vl_total%}"
                                    readonly />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="info_nfe" class="flex flex-wrap  relative flex-grow max-w-full flex-1 px-4 md:w-full pr-4 pl-4">
                <div class="md:w-2/3 pr-4 pl-4 float-left">
                    <div class="x_title">
                        <span class="h5">Informações complementares</span>
                        <div class="clearfix"></div>
                    </div>
                    <textarea name="ds_complementares"
                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required"
                        rows="4" id="ds_complementares">{%ds_complementares%}</textarea>
                </div>
                <div class="md:w-1/3 pr-4 pl-4 float-left m-0 p-0">
                    <div class="x_title">
                        <span class="h5">Informações ao Fisco</span>
                        <button
                            class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  font-normal text-blue-700 bg-transparent float-right mt-2 text-gray-600"
                            id="btn-obs-fisco">Observações ao Fisco</button>

                        <div class="clearfix"></div>
                    </div>
                    <textarea name="ds_fisco"
                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required"
                        rows="4" id="ds_fisco">{%ds_fisco%}</textarea>
                </div>
            </div>
        </div>
        <!-- obs fisco -->


        <div id="box-obs-fisco" class="modal opacity-0">
            <div class="vertical-alignment-helper">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Observações ao Fisco</h5>
                            <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="flex flex-wrap  relative flex-grow max-w-full flex-1 px-4">
                            <div class="flex flex-wrap  sm:w-full pr-4 pl-4">
                                <div class="sm:w-1/4 pr-4 pl-4">
                                    <label>Nome do Campo</label>
                                    <div class="mb-4">
                                        <input
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required"
                                            type="text" id="obs-fisco-campo" />
                                    </div>
                                </div>
                                <div class="sm:w-3/4 pr-4 pl-4">
                                    <label>Texto do Campo</label>
                                    <div class="mb-4 relative flex items-stretch w-full mb-0">
                                        <input
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required"
                                            type="text" id="obs-fisco-texto" />
                                        <span class="input-group-append">
                                            <button type="button"
                                                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-teal-500 border-teal-500 hover:bg-teal-500 hover:text-white bg-white hover:bg-teal-600"
                                                data-toggle="tooltip" title="Incluir"
                                                id="btn-add-obs-fisco">Incluir</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xw-100 relative flex-grow max-w-full flex-1 px-4" style="xmin-height: 200px;">
                            <div class="flex flex-wrap  modal-body xoverflow-hidden">
                                <table id="lista_obs_fisco"
                                    class="w-full max-w-full mb-4 bg-transparent table-striped block w-full overflow-auto scrolling-touch border row-hover"
                                    cellspacing="0" style="width:100%">
                                    <colgroup>
                                        <col style="width:15%">
                                        <col style="">
                                        <col style="width:10%">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th>Campo</th>
                                            <th>Texto</th>
                                            <th class="text-right">X</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!--{tabela_obs_fisco}-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="md:w-full pr-4 pl-4 modal-footer text-right p-t-20">
                            <button
                                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-600 text-white hover:bg-red-700"
                                data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- obs fisco -->


        <div class="flex flex-wrap  text-right mt-5">
            <div class="md:w-full pr-4 pl-4">
                <a href="app/nfe/gerenciador/{%nu_guid%}/{%nu_token%}"
                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-red-600 border-red-600 hover:bg-red-600 hover:text-white bg-white hover:bg-red-700 pr-3 mr-3"><span
                        class="fa fa-times mr-3"></span>Cancelar</a>
                <button id="btn-salva-nfe"
                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-teal-500 border-teal-500 hover:bg-teal-500 hover:text-white bg-white hover:bg-teal-600 mr-5"
                    name="btn-salva-nfe" value="salvar"><span class="fa fa-save mr-3"></span>Salvar NF-e</button>
            </div>
        </div>

    </div>
    <!--{tpl_box_nfe_edit_item}-->


    <div id="box-localiza-cliente" class="modal opacity-0">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Localizar Cliente</h5>
                        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="relative flex-grow max-w-full flex-1 px-4">
                        <input type="hidden" id="action-load-client" value="">
                        <label class="label" for="busca-cliente">Nome/Razão Social/CPF/CNPJ</label>
                        <div class="mb-4 relative flex items-stretch w-full mb-0">
                            <input id="busca-cliente" name="busca-cliente" type="text"
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded uppercase"
                                autofocus>
                            <span class="input-group-append">
                                <button type="button"
                                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700"
                                    id="btn-busca-cliente"><span class="fal fa-search"></span></button>
                            </span>
                        </div>
                    </div>




                    <div class="relative flex-grow max-w-full flex-1 px-4 modal-body overflow-hidden"
                        style="min-height: 400px;">
                        <table id="lista_clientes"
                            class="w-full max-w-full mb-4 bg-transparent table-striped block w-full overflow-auto scrolling-touch border row-hover"
                            cellspacing="0" style="width:100%">
                            <colgroup>
                                <col style="">
                                <col style="width:10%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>Nome/Razão Social</th>
                                    <th class="text-center">CPF/CNPJ</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="md:w-full pr-4 pl-4 modal-footer text-right p-t-20">
                        <button
                            class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-green-500 text-white hover:green-600 mr-5"
                            id="btn-confirma-cliente">Selecionar</button>
                        <button
                            class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-600 text-white hover:bg-red-700"
                            data-dismiss="modal" id="btn-fechar-clientes">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="box-localiza-produto" class="modal opacity-0">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content box-border1 border-theme relative flex-grow max-w-full flex-1 px-4">
                    <p class="h5">Localizar Produto/Serviço</p>
                    <div class="flex flex-wrap  sm:w-2/3 pr-4 pl-4 float-left">
                        <input type="hidden" id="action-load-produto" value="">
                        <label class="label" for="busca-produto">Descrição</label>
                        <div class="mb-4 relative flex items-stretch w-full mb-0">
                            <input id="busca-produto" name="busca-produto" type="text"
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded uppercase"
                                autofocus>
                            <span class="input-group-append">
                                <button type="button"
                                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700"
                                    id="btn-busca-produto"><span class="fal fa-search"></span></button>
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-wrap  modal-body overflow-hidden" style="min-height: 400px;">
                        <table id="lista_produtos"
                            class="w-full max-w-full mb-4 bg-transparent table-striped block w-full overflow-auto scrolling-touch border row-hover"
                            cellspacing="0" style="width:100%">
                            <colgroup>
                                <col style="">
                                <col style="width:10%">
                                <col style="width:15%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>Descrição</th>
                                    <th class="text-center">Unidade</th>
                                    <th class="text-right">Preço</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="md:w-full pr-4 pl-4 modal-footer text-right p-t-20">
                        <button
                            class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-green-500 text-white hover:green-600 mr-5"
                            id="btn-confirma-produto">Selecionar</button>
                        <button
                            class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-600 text-white hover:bg-red-700"
                            data-dismiss="modal" id="btn-fechar-produtos">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

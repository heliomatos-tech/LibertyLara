@extends($showLayout ? 'layouts.main' : 'layouts.blank')
@section('main-content')
    <!--{tpl_arr_produtos_servicos}-->
    <span class="page-title text-dark dark:text-white icon-dark">Cadastrar Nova NFe</span>
    <div id="form-dados-nfe" data-target="{%action_form%}">
        <input type='hidden' class="no-clear" id='action' value="{%action%}">
        <input type='hidden' class="no-clear hidden" name="guid" value="">
        <input type='hidden' class="no-clear hidden" name="token" value="">
        <div class="clearfix"></div>
        <div class="flex flex-wrap">
            <div class="flex justify-between gap-5 mb-4">

                <button
                    class="dark border rounded btn-default dark:text-white/80 border-gray-600 hover:text-white dark:bg-black hover:bg-[#55555582] !py-2 !px-3"
                    x-on:click="openModal('nfe-destinatario')">
                    Destinatário
                </button>

                <button
                    class="dark border rounded btn-default dark:text-white/80 border-gray-600 hover:text-white dark:bg-black hover:bg-[#55555582] !py-2 !px-3"
                    x-on:click="openModal('nfe-pagamento')">
                    Pagamento
                </button>

                <button
                    class="dark border rounded btn-default dark:text-white/80 border-gray-600 hover:text-white dark:bg-black hover:bg-[#55555582] !py-2 !px-3"
                    x-on:click="openModal('nfe-impostos-retencoes')">
                    Impostos e Retenções
                </button>

                <button
                    class="dark border rounded btn-default dark:text-white/80 border-gray-600 hover:text-white dark:bg-black hover:bg-[#55555582] !py-2 !px-3"
                    x-on:click="openModal('nfe-transporte')">
                    Transporte/Frete/Volumes
                </button>

                <button
                    class="dark border rounded btn-default dark:text-white/80 border-gray-600 hover:text-white dark:bg-black hover:bg-[#55555582] !py-2 !px-3"
                    x-on:click="openModal('nfe-documentos-referenciados')">
                    Documentos Referenciados
                </button>

                <x-nfe.destinatario />
                <x-nfe.pagamento />
                <x-nfe.impostos-retencoes />
                <x-nfe.transporte />
                <x-nfe.documentos />
            </div>

            <div class="w-full">
                <div class="x_title">
                    <span class="h5 text-base font-semibold text-black dark:text-white/80 mb-4">Dados da Nota Fiscal
                        Eletrônica</span>
                    <div class="clearfix"></div>
                </div>
                <div class="flex flex-wrap ">
                    <div class="md:w-4/5 mb-4">
                        <label for="ds_natureza" class="text-base text-black dark:text-white/80 mb-4">Natureza da
                            Operação:</label>
                        <input type=text
                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal text-gray-800 border border-gray-200 rounded p-form-input form-input"
                            name="ds_natureza" id="ds_natureza" list="lst_ds_natureza" value="" />
                        <datalist id="lst_ds_natureza">
                            <option value="Venda de Produtos"></option>
                            <option value="Prestação de Serviços"></option>
                        </datalist>
                    </div>
                    <div class="flex w-full justify-between">

                        <div class="md:w-1/2 mb-4">
                            <label for="dest_nome_view"
                                class="text-base text-black dark:text-white/80 mb-4">Destinatário:</label>
                            <input type=text readonly
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded p-form-input form-input"
                                id="dest_nome_view" placeholder="Faltando os dados do Destinatário" value="" />
                        </div>
                        <div class="md:w-1/4 sm:w-2/3 float-left mb-4">
                            <label for="tp_finalidade" class="text-base text-black dark:text-white/80 mb-4">Finalidade da
                                nota:</label>
                            <select required
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded p-form-input form-input"
                                name="tp_finalidade" id="tp_finalidade">
                                <!--{lista_finalidade}-->
                            </select>
                        </div>
                        <div class="md:w-1/5 sm:w-full float-left mb-4">
                            <label for="tp_operacao" class="text-base text-black dark:text-white/80 mb-4">Tipo de
                                nota:</label>
                            <select required
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded p-form-input form-input"
                                name="tp_operacao" id="tp_operacao">
                                <!--{lista_tipo_nota}-->
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div id="produtos_nfe" class="w-full mb-5" style="ddisplay: none;">
                <div id="produtos_nfe" class="sm:w-full">
                    <div class="x_title">
                        <span class="h5 text-base font-semibold text-black dark:text-white/80 mb-4">
                            Produtos e Serviços
                        </span>
                    </div>

                    <div data-id="dados_produto_servico" class="flex flex-wrap gap-4">

                        <div class="flex flex-row w-full gap-5 mb-4">


                            <div class="md:w-1/2">
                                <label for="descricao_prod"
                                    class="text-base text-black dark:text-white/80 mb-4">Descrição:</label>
                                <div class="flex w-full">
                                    <input type="text"
                                        class="w-full py-1 px-2 mb-1  leading-normal xbg-white  rounded rounded-r-none no-required form-input"
                                        id="descricao_prod">

                                    <button id="btn-item-clear"
                                        class="xxz-[2] inline-block rounded-r rounded-l-none text-2xl px-2 mb-1 text-red-600 border border-l-0 border-dark dark:border-gray-600 dark:bg-black hover:bg-red-600 hover:text-white/80 dark:hover:bg-red-600 dark:hover:text-white/80"
                                        title="Limpar item">
                                        <i class="ri-close-line"></i>
                                    </button>

                                </div>
                            </div>

                            <div class="md:w-1/7">
                                <label for="preco_prod" class="text-base text-black dark:text-white/80 mb-4">Preço
                                    Unit:</label>
                                <input type="text" class="leading-normal rounded no-required float_point form-input"
                                    id="preco_prod" value="" disabled>
                            </div>

                            <div class="md:w-1/4">
                                <label for="qtd_prod" class="text-base text-black dark:text-white/80 mb-4">Qtde:</label>
                                <input type="text"
                                    class="block leading-normal rounded no-required float_point form-input" id="qtd_prod"
                                    value="1" disabled>
                            </div>

                        </div>


                        <div class="flex self-end justify-end w-full mb-4">


                            <div class="flex md:w-2/5 justify-end gap-4">

                                <div class="w-4/6">

                                    <label for="total_prod"
                                        class="text-base text-black dark:text-white/80 mb-4">Total:</label>
                                    <input type="text" class="leading-normal rounded no-required form-input"
                                        id="total_prod" value="" dir="rtl" disabled readonly="readonly">
                                </div>


                                <div class="flex items-end justify-center">

                                    <button id="btn-add-item"
                                        class="text-base leading-normal no-underline h-[3rem] text-gray-600 dark:text-white/80  border  py-2 px-6 hover:bg-teal-700 hover:text-white/80 !border-teal-700 cursor-pointer"
                                        disabled="disabled"><i class="ri-add-fill mr-2"></i>Incluir
                                    </button>
                                </div>


                            </div>
                        </div>

                    </div>

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
                            <tr class="py-0">
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
                <div class="flex flex-wrap  md:w-full">
                    <div class="flex gap-5 md:w-4/5">
                        <div class="md:w-1/5">
                            <label class="text-base text-black dark:text-white/80 mb-4">Frete</label>
                            <div class="flex items-stretch w-full mb-4">
                                <input
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point total-ratear moeda-format form-input"
                                    type="text" id="vl_frete" name="vl_frete" data-decimals="2" value=""
                                    x-currency />
                            </div>
                        </div>
                        <div class="md:w-1/5">
                            <label class="text-base text-black dark:text-white/80 mb-4">Seguro</label>
                            <div class="flex items-stretch w-full mb-4">
                                <input
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point total-ratear moeda-format form-input"
                                    type="text" id="vl_seguro" name="vl_seguro" data-decimals="2" value=""
                                    x-currency />
                            </div>
                        </div>
                        <div class="md:w-1/5">
                            <label class="text-base text-black dark:text-white/80 mb-4">Outras</label>
                            <div class="flex items-stretch w-full mb-4">
                                <input
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point total-ratear moeda-format form-input"
                                    type="text" id="vl_outras" name="vl_outras" data-decimals="2" value=""
                                    x-currency />
                            </div>
                        </div>
                        <div class="md:w-1/5">
                            <label class="text-base text-black dark:text-white/80 mb-4">Desconto</label>
                            <div class="flex items-stretch w-full mb-4">
                                <input
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point total-ratear moeda-format form-input"
                                    type="text" id="vl_desconto" name="vl_desconto" data-decimals="2" value=""
                                    x-currency />
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/5 justify-end">
                        <label class="text-base text-black dark:text-white/80 mb-4">Total da Nota</label>
                        <div class="mb-4">
                            <input
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point total-ratear moeda-format form-input"
                                type="text" dir="rtl" id="vl_total" name="vl_total" value="" readonly />
                        </div>
                    </div>

                </div>
            </div>
            <div class="flex xflex-wrap  max-w-full w-full justify-between gap-5">
                <div class="lg:w-2/3 md:w-full">
                    <div>
                        <span class="h5 text-base text-black dark:text-white/80">Informações complementares</span>
                    </div>
                    <textarea name="ds_complementares"
                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required form-textarea !h-[12rem]"
                        rows="4" id="ds_complementares"></textarea>
                </div>
                <div class="lg:w-1/3 md:w-full flex flex-col">

                    <div class="flex justify-between gap-2">
                        <span class="h5 text-base text-black dark:text-white/80">Informações ao Fisco</span>
                    </div>

                    <textarea name="ds_fisco"
                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required form-textarea !h-[12rem]"
                        rows="4" id="ds_fisco">
                </textarea>
                    <x-nfe.informacoes-fisco />
                </div>
            </div>
        </div>
        <!-- obs fisco -->


        <div id="box-obs-fisco" class="modal hidden opacity-0">
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
                                    <div class="relative flex items-stretch w-full mb-0">
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
                                    class="max-w-full mb-4 bg-transparent table-striped block w-full overflow-auto scrolling-touch border row-hover"
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
                                class="align-middle text-center select-none border font-normal rounded p-3 bg-red-600 text-white hover:bg-red-700"
                                data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- obs fisco -->


        <div class="flex justify-end mt-5">

            <a href="app/nfe/gerenciador/{%nu_guid%}/{%nu_token%}"
                class="flex gap-2 items-center select-none border rounded p-2 px-5 text-red-600 border-red-600 hover:text-white dark:bg-black hover:dark:bg-red-700 mr-7">

                <svg class="feather feather-x" fill="none" height="24" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                    xmlns="http://www.w3.org/2000/svg">
                    <line x1="18" x2="6" y1="6" y2="18" />
                    <line x1="6" x2="18" y1="6" y2="18" />
                </svg>
                <span>
                    Cancelar
                </span>
            </a>


            <a id="btn-salva-nfe"
                class="flex gap-2 items-center select-none border rounded p-2 px-5 text-teal-600 hover:text-white !border-teal-700 dark:bg-black hover:!bg-teal-600 cursor-pointer"
                name="btn-salva-nfe" value="salvar">
                <svg class="feather feather-save" fill="none" height="24" stroke="currentColor" class="w-7 h-7"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z" />
                    <polyline points="17 21 17 13 7 13 7 21" />
                    <polyline points="7 3 7 8 15 8" />
                </svg>


                <span>
                    Salvar NF-e
                </span>
            </a>
        </div>


        <x-nfe.teste-modal />

        <!--{tpl_box_nfe_edit_item}-->

        <div id="box-localiza-cliente" class="modal opacity-0 hidden">
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
                                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-green-500 text-white hover:bg-green-600 mr-5"
                                id="btn-confirma-cliente">Selecionar</button>
                            <button
                                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-600 text-white hover:bg-red-700"
                                data-dismiss="modal" id="btn-fechar-clientes">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="box-localiza-produto" class="modal opacity-0 hidden">
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
                                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-green-500 text-white hover:bg-green-600 mr-5"
                                id="btn-confirma-produto">Selecionar</button>
                            <button
                                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-red-600 text-white hover:bg-red-700"
                                data-dismiss="modal" id="btn-fechar-produtos">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

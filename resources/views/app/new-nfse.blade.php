@extends($showLayout ? 'layouts.main' : 'layouts.blank')
@section('main-content')
    <!--{tpl_arr_servicos}-->
    <div id="form-dados-nfse" data-target="{%action_form%}">
        <input type='hidden' class="no-clear" id='action' value="{%action%}">
        <input type='hidden' class="no-clear hidden" name="guid" value="{%nu_guid%}">
        <input type='hidden' class="no-clear hidden" name="token" value="{%nu_token%}">
        <div class="clearfix"></div>
        <div class="flex flex-wrap ">
            <div class="relative flex-grow max-w-full flex-1 px-4 mb-4 flex justify-start">
                <button
                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700 mr-5"
                    id="btn-form-tomador">Tomador do Serviço</button>
                <!--<button class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700"  id="btn-form-faturamento">Pagamento</button>-->
                <button
                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700"
                    id="btn-form-documentos">Documentos Referenciados</button>
            </div>
            <div id="dados-secundarios" class="flex flex-wrap  relative flex-grow max-w-full flex-1 px-4">
                <!--{tpl_box_nfse_destinatario}-->
                <!--{tpl_box_nfse_faturamento}-->
                <!--{tpl_box_nfse_impostos}-->
                <!--{tpl_box_nfse_documentos_referenciados}-->
            </div>

            <div class="md:w-full pr-4 pl-4">
                <div class="x_title">
                    <span class="h5">Dados da Nota Fiscal de Serviço Eletrônica</span>
                    <div class="clearfix"></div>
                </div>
                <div class="flex flex-wrap ">
                    <div class="md:w-1/2 pr-4 pl-4 mb-4">
                        <label for="dest_nome_view">Tomador:</label>
                        <input type=text readonly
                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal text-gray-800 border border-gray-200 rounded bg-white no-required"
                            id="tom_nome_view" placeholder="Nota sem Tomador" value="{%tom_ds_nome%}" />
                    </div>
                </div>
            </div>
            <div id="servicos_nfse" class="flex flex-wrap  sm:w-full pr-4 pl-4">
                <div id="servicos_nfse" class="sm:w-full pr-4 pl-4">
                    <div class="x_title">
                        <span class="h5">Serviços Prestados</span>
                        <div class="clearfix"></div>
                    </div>

                    <div data-id="dados_servico" class="flex flex-wrap ">
                        <div class="md:w-2/3 pr-4 pl-4 float-left mb-4">
                            <label for="descricao_servico">Descrição do Serviço:</label>
                            <div class="relative flex items-stretch w-full">
                                <input type="text"
                                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required"
                                    id="descricao_servico">
                                <button
                                    class="z-[2] inline-block rounded-r bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:z-[3] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                    data-te-ripple-init type="button" id="button-addon2">
                                    Button
                                </button>

                                {{-- <span class="input-group-append">
                                    <button type="button" id="btn-item-clear"
                                        class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-red-600 border-red-600 hover:bg-red-600 hover:text-white bg-white hover:bg-red-700"
                                        data-toggle="tooltip" title="Limpar item"><span class="fa fa-times"></span></button>
                                </span> --}}
                            </div>
                        </div>


                        <div class="md:w-1/5 pr-4 pl-4 float-left mb-4">
                            <label for="total_servico">Valor do Serviço:</label>
                            <input type="text"
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required"
                                id="total_servico" value="" dir="rtl">
                        </div>
                        <div class="mb-4 relative flex-grow max-w-full flex-1 px-4 flex items-end flex-col">
                            <div class="mt-auto mb-1">
                                <button id="btn-add-item"
                                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-teal-500 border-teal-500 hover:bg-teal-500 hover:text-white bg-white hover:bg-teal-600 mb-4"
                                    disabled="disabled"><span class="fa fa-plus mr-2"></span>Incluir</button>
                            </div>
                        </div>
                    </div>
                    <!-- <table id="tabela-itens-nfe" class="w-full max-w-full mb-4 bg-transparent table-striped dt-responsive nowrap" width="100%" cellspacing="0"> -->
                    <table id="itens-nfse" class="w-full max-w-full mb-4 bg-transparent table-striped dt-responsive nowrap"
                        width="100%" cellspacing="0">
                        <colgroup>
                            <col style="width:70%">
                            <col style="width:15%">
                            <col style="width:15%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="text-left pl-0">Descrição</th>
                                <th class="text-right">Valor do Serviço</th>
                                <th class="text-center">Opções</th>
                            </tr>
                        </thead>
                        <tbody id="itens">
                            <!--{lista_servicos_nfse}-->
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-wrap  md:w-full pr-4 pl-4 m-0 p-0 mt-1">
                    <div class='md:w-3/4 pr-4 pl-4'>
                        <div class='flex flex-wrap  relative flex-grow max-w-full flex-1 px-4'>
                            <label class='mb-0 font-bold'>Município de Prestação do Serviço</label>
                        </div>
                        <div class="md:w-1/3 pr-4 pl-4 mb-4 float-left p-0">
                            <label>Estado:</label>
                            <select id='tp_estado_prestacao' name='tp_estado_prestacao'
                                class='block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required'>
                                <!--{tpl_lista_estados}-->
                            </select>
                        </div>
                        <div class="md:w-1/2 pr-4 pl-4 mb-4 float-left">
                            <label>Cidade:</label>
                            <select name='tp_cidade_prestacao' id='tp_cidade_prestacao'
                                class='block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required'>
                                <!--{tpl_lista_cidades}-->
                            </select>
                        </div>
                    </div>

                    <div class="md:w-1/4 pr-4 pl-4 mt-4">
                        <label class='mb-0'>Total da Nota</label>
                        <div class="mb-4">
                            <input
                                class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded money font-bold no-required"
                                type="text" dir="rtl" id="vl_total" name="vl_total" value="{%vl_total%}"
                                readonly />
                        </div>
                    </div>
                </div>
            </div>
            <div id="info_nfe" class="md:w-full pr-4 pl-4">
                <div class="x_title">
                    <span class="h5">Informações complementares</span><span class="font-12 text-gray-700 ml-2">(Máximo
                        de 200 caracteres)</span>
                    <div class="clearfix"></div>
                </div>
                <textarea name="ds_complementares"
                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required"
                    rows="4" id="ds_complementares" maxlength="200">{%ds_complementares%}</textarea>
            </div>
        </div>
        <div class="flex flex-wrap  text-right mt-5">
            <div class="md:w-full pr-4 pl-4">
                <a href="app/nfe/gerenciador/{%nu_guid%}/{%nu_token%}"
                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-red-600 border-red-600 hover:bg-red-600 hover:text-white bg-white hover:bg-red-700 pr-3 mr-3"><span
                        class="fa fa-times mr-3"></span>Cancelar</a>
                <button id="btn-salva-nfse"
                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-teal-500 border-teal-500 hover:bg-teal-500 hover:text-white bg-white hover:bg-teal-600 mr-5"
                    name="btn-salva-nfse" value="salvar"><span class="fa fa-save mr-3"></span>Salvar NFS-e</button>
            </div>
        </div>

    </div>
    <!--{tpl_box_nfse_edit_item}-->


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

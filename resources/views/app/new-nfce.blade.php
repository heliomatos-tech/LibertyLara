@extends($showLayout ? 'layouts.main' : 'layouts.blank')
@section('main-content')
    <!--{tpl_arr_produtos_servicos}-->
    <div class="clearfix"></div>
    <div class="flex flex-wrap " id="form-dados-nfce">
        <input type="hidden" class="no-required hidden" name="nu_guid" value="{%nu_guid%}">
        <input type="hidden" class="no-required hidden" name="nu_token" value="{%nu_token%}">
        <div class="w-full mb-4">
            <button
                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700 mr-3"
                id="btn-pagamento-faturamento" data-toggle="modal" data-target="#box-faturamento">Pagamento</button>
            <button
                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-600 border-gray-600 hover:bg-gray-600 hover:text-white bg-white hover:bg-gray-700"
                id="btn-entrega-retirada" data-toggle="modal" data-target="#box-entrega-retirada">Entrega/Retirada</button>
        </div>
        <div class="md:w-full pr-4 pl-4">
            <div class="x_title">
                <span class="h5">Nota Fiscal de Consumidor Eletrônica</span>
                <div class="clearfix"></div>
            </div>
            <div class="flex flex-wrap ">
                <div class="md:w-4/5 pr-4 pl-4 mb-4">
                    <label for="natureza">Natureza da Operação:</label>
                    <input type=text
                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                        name="natureza" id="natureza" list="lst_ds_natureza" value="{%ds_natureza%}" />
                    <datalist id="lst_ds_natureza">
                        <option value="Venda"></option>
                        <option value="Prestação de Serviços"></option>
                    </datalist>
                </div>
                <div class="md:w-1/2 pr-4 pl-4 mb-4">
                    <label for="cpf_cnpj">CPF/CNPJ:</label>
                    <input type=text
                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded cpf_cnpj no-required"
                        name="cpf_cnpj" placeholder="Consumidor não identificado" value="{%nu_cpf_cnpj%}" />
                </div>
                <div class="md:w-1/4 pr-4 pl-4 sm:w-2/3 pr-4 pl-4 float-left mb-4">
                    <label for="presenca">Indicador de Presença:</label>
                    <select required
                        class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                        name="presenca" id="presenca">
                        <!--{lista_indicador_presenca}-->
                    </select>
                </div>
            </div>
        </div>
    </div>
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
    <div class="flex flex-wrap  w-full">
        <div class="md:w-1/4 pr-4 pl-4 ml-auto">
            <label>Total da Nota</label>
            <div class="mb-4">
                <input
                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded money font-bold no-required"
                    type="text" dir="rtl" id="vl_total" name="vl_total" value="{%vl_total%}" readonly />
            </div>
        </div>
    </div>
    <div class="relative flex-grow max-w-full flex-1 px-4 mt-5">
        <a href="app/nfe/gerenciador/{%nu_guid%}/{%nu_token%}"
            class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-red-600 border-red-600 hover:bg-red-600 hover:text-white bg-white hover:bg-red-700 pr-3 mr-3 float-right"><span
                class="fa fa-times mr-3"></span>Cancelar</a>
        <button id="btn-salva-nfce"
            class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-teal-500 border-teal-500 hover:bg-teal-500 hover:text-white bg-white hover:bg-teal-600 mr-5 float-right"
            name="btn_salva_nfce" value="salvar"><span class="fa fa-save mr-3"></span>Salvar NFC-e</button>
    </div>
    <!--{tpl_box_edit_item}-->
    <!--{tpl_box_localiza_produto}-->
    <!--{tpl_box_entrega_retirada}-->
    <!--{tpl_box_recebimento}-->
@endsection

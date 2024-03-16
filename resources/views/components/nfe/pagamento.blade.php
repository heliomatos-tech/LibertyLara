<div class="modal" id="nfe-pagamento">
    <div class="modal-backdrop">

        <div class="modal-content w-2/5">
            <div class="modal-header w-full">
                <h1>Pagamento/Parcelamento da NFe</h1>
                <button class="modal-close flex self-start" x-on:click="closeModal($event)">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="1" y1="1" x2="15" y2="15"></line>
                        <line x1="15" y1="1" x2="1" y2="15"></line>
                    </svg>
                </button>
            </div>

            <div class="modal-body !min-h-[595px]">

                <div class="flex-col w-full">



                    <div x-data="{ tab: 'tab-pagamento' }">



                        <div class="flex flex-row justify-between">


                            <div class="flex zflex-start items-start gap-6">
                                <a class="text-black dark:text-white/80 text-base text-[1.4rem] p-2 border-b-2 border-zinc-100 dark:border-gray-900 hover:border-teal-300 hover:cursor-pointer"
                                    :class="{ 'border-zinc-500 dark:border-teal-300': tab === 'tab-pagamento' }"
                                    x-on:click.prevent="tab='tab-pagamento'">
                                    Pagamento
                                </a>
                                <a class="text-black dark:text-white/80 text-base text-[1.4rem] p-2 border-b-2 border-zinc-100 dark:border-gray-900 hover:border-teal-300 hover:cursor-pointer"
                                    :class="{ 'border-zinc-500 dark:border-teal-300': tab === 'tab-parcelamento' }"
                                    x-on:click.prevent="tab='tab-parcelamento'">
                                    Parcelamento
                                </a>
                            </div>

                            <div class="flex flex-col w-2/5 justify-end">
                                <label class="w-full block text-base text-black dark:text-white/80">
                                    Tipo de Pagamento:
                                </label>
                                <x-nfe.tipo-pagamento />
                            </div>

                        </div>



                        <div x-show="tab==='tab-pagamento'" x-cloak class="text-base text-black dark:text-white/80">

                            <div class="tab-pane opacity-100 block active" id="nfe-pagamento">
                                <div class="lg:w-full">

                                    <div id="tabela-pagamentos">
                                        <table id="tb-grade-pagamentos"
                                            class="w-full max-w-full xmb-4 bg-transparent table-hover">
                                            <thead>
                                                <tr class="xflex xflex-row w-full">
                                                    <th class="text-left !p-1 w-3/5">Forma de Pagamento</th>
                                                    <th class="!p-1 w-2/5">Valor</th>
                                                </tr>
                                            </thead>
                                            <tbody class="font-size-1-2" x-data="processPay">
                                                <tr>
                                                    <td class="p-1">Dinheiro</td>
                                                    <td class="p-1">
                                                        <input type="text" placeholder="0,00"
                                                            x-on:keyup="calcPayment"
                                                            class="form-input appearance-none w-full py-0 pr-2 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded nfe-recebimento rtl no-required"
                                                            id="pag_01" name="pag_01" dir="rtl" x-currency>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1">PIX</td>
                                                    <td class="p-1">
                                                        <input type="text" placeholder="0,00"
                                                            x-on:keyup="calcPayment"
                                                            class="form-input appearance-none w-full py-0 pr-2 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded nfe-recebimento rtl no-required"
                                                            id="pag_17" name="pag_17" dir="rtl" x-currency>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1">Cheque</td>
                                                    <td class="p-1">
                                                        <input type="text" placeholder="0,00"
                                                            x-on:keyup="calcPayment"
                                                            class="form-input appearance-none w-full py-0 pr-2 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded nfe-recebimento rtl no-required"
                                                            id="pag_02" name="pag_02" dir="rtl" x-currency>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1">Cartão de Crédito</td>
                                                    <td class="p-1">
                                                        <input type="text" placeholder="0,00"
                                                            x-on:keyup="calcPayment"
                                                            class="form-input appearance-none w-full py-0 pr-2 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded nfe-recebimento rtl no-required"
                                                            id="pag_03" name="pag_03" dir="rtl" x-currency>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1">Cartão de Débito</td>
                                                    <td class="p-1">
                                                        <input type="text" placeholder="0,00"
                                                            x-on:keyup="calcPayment"
                                                            class="form-input appearance-none w-full py-0 pr-2 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded nfe-recebimento rtl no-required"
                                                            id="pag_04" name="pag_04" dir="rtl" x-currency>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="p-1">Outros</td>
                                                    <td class="p-1">
                                                        <input type="text" placeholder="0,00"
                                                            x-on:keyup="calcPayment"
                                                            class="form-input appearance-none w-full py-0 pr-2 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format nfe-recebimento rtl no-required"
                                                            id="pag_99" name="pag_99" dir="rtl" x-currency>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td class="text-right" colspan="2">
                                                        <label class="mb-0">Total Recebido</label><br />
                                                        <div>
                                                            <span class="text-2xl" dir="rtl"
                                                                id="pagamento-total-recebido">0,00
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-right" colspan="2">
                                                        <label class="margin-bottom">Total da Nota :</label><br>
                                                        <span>R$</span><span class="h2 text-right" dir="rtl"
                                                            id="pagamento-total-nota">0,00</span>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div x-show="tab==='tab-parcelamento'" x-cloak>
                            <div id="dados_parcelamento" class="sm:w-full">

                                <div class="flex flex-wrap">

                                    <div class="md:w-1/4 pr-4 sm:w-full">
                                        <label for="num-parcelas"
                                            class="text-base text-black dark:text-white/80 mb-4">Parcelas</label>
                                        <input type="number"
                                            class="form-input appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required"
                                            min="1" max="120" id="num-parcelas" value="{%nu_parcelas%}">
                                    </div>


                                    <div class="md:w-3/4 sm:w-full">
                                        <label for="primeiro-vencimento"
                                            class="text-base text-black dark:text-white/80 mb-4">Primeiro
                                            Vencimento</label>
                                        <div class="flex relative xitems-stretch w-full">

                                            <input type="date"
                                                class="form-input appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required"
                                                id="primeiro-vencimento" min="{%data_atual_utc%}"
                                                value="{%primeiro_vencimento%}">

                                            <button type="button"
                                                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-gray-100 border-gray-600 dark:hover:text-white bg-white hover:bg-gray-700"
                                                id="btn-gerar-parcelas" title="Calcular parcelas">
                                                <i class="ri-calculator-fill"></i>
                                            </button>
                                            <button type="button"
                                                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline text-red-600 border-red-600 hover:bg-red-600 hover:text-white bg-white hover:bg-red-700"
                                                id="btn-clear-parcelas" title="Limpar parcelas">
                                                <i class="ri-delete-bin-5-line"></i>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div id="tabela-parcelas">
                                    <table id="tb-grade-parcelas"
                                        class="w-full max-w-full mb-4 bg-transparent table-hover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style="width: 10%;">Nº</th>
                                                <th>Vencimento</th>
                                                <th style="width: 30%;">Valor</th>
                                            </tr>
                                        </thead>
                                        <tbody class="font-size-1-2">
                                            <!--{tabela_parcelas}-->
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div><!-- end parcelamento -->

                        </div>


                    </div>


                </div>


            </div>
            <div class="modal-footer w-full justify-end gap-5">

                <button
                    class="py-2 px-4 text-red-400 border border-red-400 bg-none hover:bg-[#ff0000] hover:text-white"
                    x-on:click="closeModal($event)">Cancelar
                </button>

                <button id="btn-salva-cliente" xx-data="processPay"
                    class="py-2 px-4 border font-normal leading-normal no-underline text-teal-500 border-teal-500 hover:text-white hover:bg-teal-600"
                    x-on:click="confirm()">
                    Confirmar
                </button>

            </div>
        </div>
    </div>
</div>
<script>
    processPay = {
        confirm() {
            console.log('Clicou no process confirm de pagamento');
        },
        calcPayment() {
            let total_pay =
                LM.strToFloat(document.getElementById('pag_01').value || 0) +
                LM.strToFloat(document.getElementById('pag_02').value || 0) +
                LM.strToFloat(document.getElementById('pag_03').value || 0) +
                LM.strToFloat(document.getElementById('pag_04').value || 0) +
                LM.strToFloat(document.getElementById('pag_17').value || 0) +
                LM.strToFloat(document.getElementById('pag_99').value || 0);
            document.getElementById('pagamento-total-recebido').innerText = LM.formatCurrency(total_pay);
        }
    };
    handleTipoPagamento = {
        onChange(_v) {
            document.querySelector('input[name="tipo_pagamento"]').value = _v;
            console.log('Alterou o tipo de pagamento para ' + _v);

        }
    }
</script>

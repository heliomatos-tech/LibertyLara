<div class="modal" id="nfe-pagamento" x-data="main">
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

            <div class="modal-body !min-h-[560px]">

                <div class="flex-col w-full">



                    <div x-data="{ tab: window.location.hash ? window.location.hash : '#tab-pagamento' }">


                        <div class="flex flex-row justify-between">
                            <div class="flex zflex-start items-start gap-6">

                                <a class="text-white/80 text-base text-[1.4rem] pb-2 px-2 border-b-2 border-gray-900 hover:border-teal-300"
                                    href="#" x-on:click.prevent="tab='#tab-pagamento'">
                                    Pagamento
                                </a>

                                <a class="text-white/80 text-base text-[1.4rem] pb-2 px-2 border-b-2 border-gray-900 hover:border-teal-300"
                                    href="#" x-on:click.prevent="tab='#tab-parcelamento'">
                                    Parcelamento
                                </a>

                            </div>
                            <div class="flex flex-col w-2/5 justify-end">
                                <label class="w-full block text-base text-black dark:text-white/80">
                                    Tipo de Pagamento:
                                </label>
                                <x-nfe.tipo-pagamento x-data="processPay" x-on:click="change()" />


                            </div>


                        </div>



                        <div x-show="tab == '#tab-pagamento'" x-cloak class="text-base text-black dark:text-white/80">

                            <div class="tab-pane opacity-100 block active" id="nfe-pagamento" role="tabpanel">
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
                                            <tbody class="font-size-1-2">
                                                <tr>
                                                    <td class="p-1">Dinheiro</td>
                                                    <td class="p-1">
                                                        <input type="text" placeholder="0,00"
                                                            class="form-input appearance-none w-full py-0 pr-2 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format nfe-recebimento rtl no-required"
                                                            id="pagamento-dinheiro" name="pag_dinheiro" dir="rtl"
                                                            value="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1">PIX</td>
                                                    <td class="p-1">
                                                        <input type="text" placeholder="0,00"
                                                            class="form-input appearance-none w-full py-0 pr-2 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format nfe-recebimento rtl no-required"
                                                            id="pagamento-pix" name="pag_pix" dir="rtl"
                                                            value="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1">Cheque</td>
                                                    <td class="p-1">
                                                        <input type="text" placeholder="0,00"
                                                            class="form-input appearance-none w-full py-0 pr-2 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format nfe-recebimento rtl no-required"
                                                            id="pagamento-cheque" name="pag_cheque" dir="rtl"
                                                            value="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1">Cartão de Crédito</td>
                                                    <td class="p-1">
                                                        <input type="text" placeholder="0,00"
                                                            class="form-input appearance-none w-full py-0 pr-2 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format nfe-recebimento rtl no-required"
                                                            id="pagamento-credito" name="pag_credito" dir="rtl"
                                                            value="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-1">Cartão de Débito</td>
                                                    <td class="p-1">
                                                        <input type="text" placeholder="0,00"
                                                            class="form-input appearance-none w-full py-0 pr-2 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format nfe-recebimento rtl no-required"
                                                            id="pagamento-debito" name="pag_debito" dir="rtl"
                                                            value="">
                                                    </td>
                                                </tr>
                                                {{-- <tr>
                                                    <td class="p-1">Boleto Bancário</td>
                                                    <td class="p-1">
                                                        <input type="text" placeholder="0,00"
                                                            class="form-input appearance-none w-full py-0 pr-2 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format nfe-recebimento rtl no-required"
                                                            id="pagamento-boleto" name="pag_boleto" dir="rtl"
                                                            value="">
                                                    </td>
                                                </tr> --}}

                                                <tr>
                                                    <td class="p-1">Outros</td>
                                                    <td class="p-1">
                                                        <input type="text" placeholder="0,00"
                                                            class="form-input appearance-none w-full py-0 pr-2 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format nfe-recebimento rtl no-required"
                                                            id="pagamento-outros" name="pag_outros" dir="rtl"
                                                            value="">
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td class="text-right" colspan="2">
                                                        <label class="mb-0">Total Recebido</label><br />
                                                        <div class="margin-right"><span class="float-right h1"
                                                                dir="rtl" id="pagamento-total-recebido"></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!--
                                                <tr>
                                                    <td class="text-right" colspan="2">
                                                        <label class="margin-bottom">Total da Nota :</label><br>
                                                        <span>R$</span><span class="h2 text-right" dir="rtl" id="pagamento-total-nota">0,00</span>
                                                    </td>
                                                </tr>
                                                -->
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div x-show="tab == '#tab-parcelamento'" x-cloak
                            class="text-base text-black dark:text-white/80">
                            <p>This is the content of Tab 2</p>
                        </div>


                    </div>


                </div>


            </div>
            <div class="modal-footer w-full justify-end gap-5">

                <button
                    class="py-2 px-4 text-red-400 border border-red-400 bg-none hover:bg-[#ff0000] hover:text-white"
                    x-on:click="closeModal($event)">Cancelar
                </button>

                <button id="btn-salva-cliente" x-data="processPay"
                    class="py-2 px-4 border font-normal leading-normal no-underline text-teal-500 border-teal-500 hover:text-white hover:bg-teal-600"
                    x-on:click="confirm()">
                    Confirmar
                </button>

            </div>
        </div>
    </div>
</div>
<script>
    const processPay = {
        confirm() {
            console.log('Clicou no process confirm de pagamento');
        },
        change() {
            console.log('Alterou o tipo');
        }
        // Outras funções...
    };
</script>

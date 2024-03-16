<div class="modal" id="nfe-documentos-referenciados">
    <div class="modal-backdrop">

        <div class="modal-content w-2/5">
            <div class="modal-header w-full">
                <h1>Documentos Referenciados</h1>
                <button class="modal-close flex self-start" x-on:click="closeModal($event)">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="1" y1="1" x2="15" y2="15"></line>
                        <line x1="15" y1="1" x2="1" y2="15"></line>
                    </svg>
                </button>
            </div>

            <div class="modal-body !min-h-[250px]">

                <div class="flex-col w-full">


                    <!-- documentos referenciados -->

                    <div id="dados_documentos" class="text-base text-black dark:text-white/80">

                        <div class="flex flex-wrap ">

                            <div class="sm:w-full">


                                <label>Chave de Acesso</label>
                                <div class="flex w-full mb-4">
                                    <input type="text"
                                        class="form-input appearance-none w-full py-1 px-2 text-base leading-normal !rounded-r-none bg-white text-gray-800 border border-gray-200 no-required"
                                        minlength="44" maxlength="44" id="doc_referenciado" value="">
                                    <button type="button"
                                        class="border !rounded-l-none font-normal whitespace-no-wrap px-5 leading-normal no-underline text-teal-500 border-teal-500 hover:text-white bg-white hover:bg-teal-600"
                                        data-toggle="tooltip" title="Incluir" id="btn-add-documento">Incluir
                                    </button>
                                </div>


                            </div>


                        </div>

                        <div class="flex flex-wrap ">
                            <div class="sm:w-full">
                                <table id="lista-documentos"
                                    class="display responsive wrap-xs wrap-sm w-full max-w-full mb-4 bg-transparent table-bordered"
                                    width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="75%">Chave do Documento</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody class="font-size-1-2">
                                        <!--{tabela_documentos_referenciados}-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- documentos referenciados -->



                </div>


            </div>
            <div class="modal-footer w-full justify-end gap-5">

                <button class="py-2 px-4 text-red-400 border border-red-400 bg-none hover:bg-[#ff0000] hover:text-white"
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
    processDocs = {
        confirm() {
            console.log('Clicou no process confirm de pagamento');
        },
        calcTax() {
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
</script>

<div class="modal" id="nfe-impostos-retencoes">
    <div class="modal-backdrop">

        <div class="modal-content w-3/5">
            <div class="modal-header w-full">
                <h1>Impostos e Retenções</h1>
                <button class="modal-close flex self-start" x-on:click="closeModal($event)">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="1" y1="1" x2="15" y2="15"></line>
                        <line x1="15" y1="1" x2="1" y2="15"></line>
                    </svg>
                </button>
            </div>

            <div class="modal-body !min-h-[340px]">

                <div class="flex-col w-full">



                    <div x-data="{ tab: 'tab-impostos' }">


                        <div class="flex flex-row justify-between mb-5">
                            <div class="flex zflex-start items-start gap-6">
                                <a class="text-white/80 text-base text-[1.4rem] pb-2 px-2 border-b-2 border-gray-900 hover:border-teal-300"
                                    :class="{ 'border-teal-300': tab === 'tab-impostos' }" href="#"
                                    x-on:click.prevent="tab='tab-impostos'">
                                    Impostos
                                </a>
                                <a class="text-white/80 text-base text-[1.4rem] pb-2 px-2 border-b-2 border-gray-900 hover:border-teal-300"
                                    :class="{ 'border-teal-300': tab === 'tab-retencoes' }" href="#"
                                    x-on:click.prevent="tab='tab-retencoes'">
                                    Retenções
                                </a>
                            </div>
                        </div>



                        <div x-show="tab=='tab-impostos'" x-cloak class="text-base text-black dark:text-white/80">

                            <div class="flex flex-row justify-between gap-6">

                                <div class="md:w-1/4">
                                    <label>Base do ICMS</label>
                                    <div class="mb-4">
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="impostos_vl_base_icms" name="impostos_vl_base_icms"
                                            placeholder="0,00" />
                                    </div>
                                </div>
                                <div class="md:w-1/4">
                                    <label>Valor do ICMS</label>
                                    <div class="mb-4">
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="impostos_vl_icms" name="impostos_vl_icms"
                                            placeholder="0,00" />
                                    </div>
                                </div>




                                <div class="md:w-1/4">
                                    <label>Base ICMS-ST</label>
                                    <div class="mb-4">
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="impostos_vl_base_icmsst" name="impostos_vl_base_icmsst"
                                            placeholder="0,00" />
                                    </div>
                                </div>
                                <div class="md:w-1/4">
                                    <label>Valor ICMS-ST</label>
                                    <div class="mb-4">
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="impostos_vl_icmsst" name="impostos_vl_icmsst"
                                            placeholder="0,00" />
                                    </div>
                                </div>

                            </div>


                            <div class="flex flex-row w-full justify-between gap-6">

                                <div class="md:w-1/4">
                                    <label>Base ICMS FCP</label>
                                    <div class="mb-4">
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="impostos_vl_base_icms_fcp"
                                            name="impostos_vl_base_icms_fcp" placeholder="0,00" />
                                    </div>
                                </div>
                                <div class="md:w-1/4">
                                    <label>Valor ICMS FCP</label>
                                    <div class="mb-4">
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="impostos_vl_icms_fcp" name="impostos_vl_icms_fcp"
                                            placeholder="0,00" />
                                    </div>
                                </div>
                                <div class="md:w-1/4">
                                    <label>Base ICMS-ST FCP</label>
                                    <div class="mb-4">
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="impostos_vl_base_icmsst_fcp"
                                            name="impostos_vl_base_icmsst_fcp" placeholder="0,00" />
                                    </div>
                                </div>
                                <div class="md:w-1/4">
                                    <label>Valor ICMS-ST FCP</label>
                                    <div class="mb-4">
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="impostos_vl_icmsst_fcp" name="impostos_vl_icmsst_fcp"
                                            placeholder="0,00" />
                                    </div>
                                </div>
                            </div>

                            <div class="flex flex-row w-full justify-between gap-6">

                                <div class="md:w-1/4">
                                    <label>Valor IPI</label>
                                    <div class="mb-4">
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="impostos_vl_ipi" name="impostos_vl_ipi"
                                            placeholder="0,00" />
                                    </div>
                                </div>
                                <div class="md:w-1/4">
                                    <label>Valor ISS</label>
                                    <div class="mb-4">
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="impostos_vl_iss" name="impostos_vl_iss"
                                            placeholder="0,00" />
                                    </div>
                                </div>
                                <div class="md:w-1/4">
                                    <label>Valor dos Serviços</label>
                                    <div class="mb-4">
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="impostos_vl_servicos" name="impostos_vl_servicos"
                                            placeholder="0,00" />
                                    </div>
                                </div>
                                <div class="md:w-1/4">
                                    <label>Valor dos Produtos</label>
                                    <div class="mb-4">
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="impostos_vl_produtos" name="impostos_vl_produtos"
                                            placeholder="0,00" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div x-show="tab == 'tab-retencoes'" x-cloak
                            class="flex flex-col text-base text-black dark:text-white/80">

                            <div class="flex flex-row w-full justify-between gap-6">

                                <div class="md:w-1/4 basis-1/4">
                                    <label>Base IRRF</label>
                                    <div class="mb-4">
                                        <input type="hidden" class="hidden no-required" id="ret_aliquota_irrf"
                                            value="{%ret_aliquota_irrf%}" />
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="ret_vl_base_irrf" name="ret_vl_base_irrf"
                                            placeholder="0,00" />
                                    </div>
                                </div>

                                <div class="md:w-1/4 basis-1/4">
                                    <label>Valor IRRF</label>
                                    <div class="mb-4">
                                        <input type="hidden" class="hidden no-required" id="ret_valor_irrf"
                                            value="{%ret_valor_irrf%}" />
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="ret_vl_retencao_irrf" name="ret_vl_retencao_irrf"
                                            placeholder="0,00" />
                                    </div>
                                </div>

                                <div class="md:w-1/4 basis-1/4">
                                    <label>Base INSS</label>
                                    <div class="mb-4">
                                        <input type="hidden" class="hidden no-required" id="ret_aliquota_inss"
                                            value="{%ret_aliquota_inss%}" />
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="ret_vl_base_inss" name="ret_vl_base_inss"
                                            placeholder="0,00" />
                                    </div>
                                </div>

                                <div class="md:w-1/4 basis-1/4">
                                    <label>Valor INSS</label>
                                    <div class="mb-4">
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="ret_vl_retencao_inss" name="ret_vl_retencao_inss"
                                            placeholder="0,00" />
                                    </div>
                                </div>

                            </div>

                            <div class="flex flex-row w-full justify-start gap-6">
                                <div class="md:w-1/4 basis-1/4">
                                    <label>PIS</label>
                                    <div class="mb-4">
                                        <input type="hidden" class="hidden no-required" id="ret_aliquota_pis" />
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="ret_vl_retencao_pis" name="ret_vl_retencao_pis"
                                            placeholder="0,00" />
                                    </div>
                                </div>
                                <div class="md:w-1/4 basis-1/4">
                                    <label>COFINS</label>
                                    <div class="mb-4">
                                        <input type="hidden" class="hidden no-required" id="ret_aliquota_cofins" />
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="ret_vl_retencao_cofins" name="ret_vl_retencao_cofins"
                                            placeholder="0,00" />
                                    </div>
                                </div>
                                <div class="md:w-1/4 basis-1/4">
                                    <label>CSLL</label>
                                    <div class="mb-4">
                                        <input type="hidden" class="hidden no-required" id="ret_aliquota_csll" />
                                        <input x-currency
                                            class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point moeda-format rtl no-required"
                                            type="text" id="ret_vl_retencao_csll" name="ret_vl_retencao_csll"
                                            placeholder="0,00" />
                                    </div>
                                </div>
                                <div class="md:w-1/4 basis-1/4">

                                </div>
                            </div>


                            <div class="flex flex-1 justify-end">
                                <button type="button" id="btn-calc-retencoes"
                                    class="text-center border font-normal py-2 px-3 leading-normal no-underline text-teal-500 border-teal-500 hover:text-white bg-white hover:bg-teal-600" />
                                Calcular Retenções
                                </button>
                            </div>

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
    processTax = {
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
    handleTax = {
        onChange(_v) {
            document.querySelector('input[name="tipo_pagamento"]').value = _v;
            console.log('Alterou o tipo de pagamento para ' + _v);

        }
    }
</script>

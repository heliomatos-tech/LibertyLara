<div class="modal" id="nfe-transporte">
    <div class="modal-backdrop">

        <div class="modal-content w-3/5">
            <div class="modal-header w-full">
                <h1>Transporte/Frete</h1>
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



                    <div x-data="{ tab: 'tab-transportador' }">



                        <div class="flex flex-row justify-between">


                            <div class="flex zflex-start items-start gap-6">
                                <a class="text-black dark:text-white/80 text-base text-[1.4rem] p-2 border-b-2 border-zinc-100 dark:border-gray-900 hover:border-teal-300 hover:cursor-pointer"
                                    :class="{ 'border-zinc-500 dark:border-teal-300': tab === 'tab-transportador' }"
                                    x-on:click.prevent="tab='tab-transportador'">
                                    Transportador
                                </a>
                                <a class="text-black dark:text-white/80 text-base text-[1.4rem] p-2 border-b-2 border-zinc-100 dark:border-gray-900 hover:border-teal-300 hover:cursor-pointer"
                                    :class="{ 'border-zinc-500 dark:border-teal-300': tab === 'tab-volumes' }"
                                    x-on:click.prevent="tab='tab-volumes'">
                                    Volumes
                                </a>
                            </div>

                            <div class="flex flex-col w-2/5 justify-end">
                                <label class="w-full block text-base text-black dark:text-white/80">
                                    Tipo de Frete:
                                </label>
                                <x-nfe.tipo-frete />
                            </div>

                        </div>



                        <div x-show="tab==='tab-transportador'" x-cloak class="text-base text-black dark:text-white/80">


                            <div class="w-1/3">
                                <label for="transp_nu_cpf_cnpj">CPF/CNPJ</label>
                                <input name="transp_nu_cpf_cnpj" type="text"
                                    class="form-input appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded cpf_cnpj no-clear"
                                    id="transp_nu_cpf_cnpj" x-cpf_cnpj>
                            </div>


                            <div class="w-full ">
                                <div class="md:w-full">
                                    <label for="transp_ds_nome" id="lbrazao">Nome do Transportador</label>
                                    <input name="transp_ds_nome" type="text"
                                        class="form-input appearance-none w-full py-1 px-2 mb-1 text-base uppercase leading-normal bg-white text-gray-800 border border-gray-200 rounded uppercase"
                                        id="transp_ds_nome" x-upper-input>
                                </div>
                            </div>

                            <div id="transportadora-endereco" class="flex flex-col">


                                <div class="flex lg:flex-nowrap sm:flex-wrap gap-3">


                                    <div class="xsm:w-2/5x md:w-1/5 xpr-3">
                                        <label for="transp_nu_cep">CEP:</label>
                                        <input name="transp_nu_cep" type="text"
                                            class="form-input appearance-none w-full py-1 px-2 mb-1 uppercase text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded cep"
                                            id="transp_nu_cep" x-mask="99999-999" placeholder="_____-___">
                                    </div>

                                    <div class="md:w-full">
                                        <label for="transp_ds_endereco">Endereço:</label>
                                        <input name="transp_ds_endereco" type="text"
                                            class="form-input appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded uppercase"
                                            id="transp_ds_endereco" x-upper-input>
                                    </div>



                                </div>


                                <div class="flex flex-wrap">

                                    <div class="md:w-1/6 sm:w-full pr-3">
                                        <label for="transp_nu_endereco">Número:</label>
                                        <input name="transp_nu_endereco" type="text"
                                            class="form-input appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded uppercase"
                                            id="transp_nu_endereco" x-upper-input>
                                    </div>


                                    <div class="md:w-5/6 sm:w-full">
                                        <label for="transp_ds_bairro">Bairro:</label>
                                        <input name="transp_ds_bairro" type="text"
                                            class="form-input appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded uppercase"
                                            id="transp_ds_bairro" x-upper-input>
                                    </div>
                                </div>


                                <div class="flex flex-wrap ">

                                    <div class="md:w-1/6 sm:w-1/3 pr-3">
                                        <label for="transp_tp_uf">UF:</label>
                                        <input name="transp_tp_uf" type="text"
                                            class="form-input appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded uppercase"
                                            minlength="2" maxlength="2" id="transp_tp_uf" x-upper-input>
                                    </div>
                                    <div class="md:w-5/6 sm:w-full">
                                        <label for="transp_ds_cidade">Cidade:</label>
                                        <input name="transp_ds_cidade" type="text"
                                            class="form-input appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded uppercase"
                                            id="transp_ds_cidade" x-upper-input>
                                        <input name="transp_nu_ibge" type="hidden" class="no-required hidden"
                                            id="transp_nu_ibge">
                                    </div>


                                </div>
                            </div>



                            <div class="flex flex-wrap ">
                                <div class="md:w-2/3 sm:w-full pr-3">
                                    <label for="transp_email">E-mail:</label>
                                    <input name="transp_ds_email" type="text"
                                        class="form-input appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required lowercase"
                                        id="transp_email" x-lower-input>
                                </div>

                                <div class="md:w-1/3 sm:w-1/3">
                                    <label for="transp_telefone">Telefone:</label>
                                    <input name="transp_nu_telefone" type="text"
                                        class="form-input appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required telefone_ddd"
                                        id="transp_telefone" x-phone_ddd>
                                </div>
                            </div>

                        </div><!-- end Transportador -->


                        <div x-show="tab==='tab-volumes'" x-cloak class="text-base text-black dark:text-white/80">

                            <div id="nfe-frete-volumes">
                                <div class="x_title">
                                    <span class="h5">Volumes transportados</span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="flex flex-wrap ">
                                    <div class="md:w-full">
                                        <label for="transp_especie">Espécie:</label>
                                        <input name="transp_ds_especie" type="text"
                                            class="form-input appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded no-required"
                                            id="transp_especie" maxlength="60">
                                    </div>
                                </div>
                                <div class="flex flex-wrap w-full">
                                    <div class="md:w-1/3 sm:w-1/2 pr-3">
                                        <label for="transp_quantidade">Quantidade:</label>
                                        <input name="transp_nu_quantidade" type="text"
                                            class="form-input appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point no-required"
                                            id="transp_quantidade">
                                    </div>
                                    <div class="md:w-1/3 sm:w-1/2 pr-3">
                                        <label for="transp_peso_bruto">Peso Bruto:</label>
                                        <input name="transp_nu_peso_bruto" type="text"
                                            class="form-input appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point no-required"
                                            id="transp_peso_bruto">
                                    </div>
                                    <div class="md:w-1/3 sm:w-1/2">
                                        <label for="transp_peso_liquido">Peso Líquido:</label>
                                        <input name="transp_nu_peso_liquido" type="text"
                                            class="form-input appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded float_point no-required"
                                            id="transp_peso_liquido">
                                    </div>
                                </div>
                            </div>



                        </div><!-- end volumes -->


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
    // processPay = {
    //     confirm() {
    //         console.log('Clicou no process confirm de pagamento');
    //     },
    //     calcPayment() {
    //         let total_pay =
    //             LM.strToFloat(document.getElementById('pag_01').value || 0) +
    //             LM.strToFloat(document.getElementById('pag_02').value || 0) +
    //             LM.strToFloat(document.getElementById('pag_03').value || 0) +
    //             LM.strToFloat(document.getElementById('pag_04').value || 0) +
    //             LM.strToFloat(document.getElementById('pag_17').value || 0) +
    //             LM.strToFloat(document.getElementById('pag_99').value || 0);
    //         document.getElementById('pagamento-total-recebido').innerText = LM.formatCurrency(total_pay);
    //     }
    // };
    handleTipoFrete = {
        onChange(_v) {
            document.querySelector('input[name="tipo_frete"]').value = _v;
            console.log('Alterou o tipo de frete para ' + _v);

        }
    }
</script>

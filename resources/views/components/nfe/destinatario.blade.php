<div class="modal" id="nfe-destinatario" x-data="main">
    <div class="modal-backdrop">

        <div class="modal-content w-2/6 sm:w-3/5 lg:2/5">
            <div class="modal-header w-full">
                <h1>Destinatário da NFe</h1>
                <button class="modal-close flex self-start" x-on:click="closeModal($event)">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="1" y1="1" x2="15" y2="15"></line>
                        <line x1="15" y1="1" x2="1" y2="15"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body">

                <div class="flex-col w-full">



                    <div class="flex w-full mb-4 gap-5">


                        <div class="smx:w-1/4">

                            <label for="dest_nu_cpf_cnpj"
                                class="text-base text-black dark:text-white/80 mb-4">CPF/CNPJ:</label>
                            <div class="flex w-full">

                                <input name="dest_nu_cpf_cnpj" type="text"
                                    class="w-full text-base leading-normal form-input text-gray-800 border border-gray-200 cpf_cnpj no-clear"
                                    id="dest_nu_cpf_cnpj" x-cpf_cnpj>
                                <button id="btn-localiza-cliente"
                                    class="inline-block rounded-r rounded-l-none text-2xl px-2 border border-l-0 border-dark dark:text-gray-300 dark:border-gray-600 dark:bg-black hover:bg-gray-200 hover:dark:bg-[#8a87873d] hover:text-[#717171] dark:hover:bg-red hover:dark:text-white/80"
                                    title="Localizar Cliente">
                                    <i class="ri-search-line"></i>
                                </button>

                            </div>

                        </div>

                        <div class="sm:w-1/4">
                            <label for="dest_nu_ie" class="text-base text-black dark:text-white/80 mb-4">
                                Inscrição Estadual</label>
                            <input name="dest_nu_ie" type="text"
                                class="w-full form-input leading-normal text-gray-800 border border-gray-200 rounded no-required"
                                id="dest_nu_ie" value="">
                        </div>

                        <div class="sm:w-1/4">
                            <label for="dest_tp_ie_isento_nc"
                                class="text-base text-black dark:text-white/80 mb-4">Situação:</label>
                            <x-nfe.situacao-destinatario />
                        </div>
                    </div>

                    <div class="xblock w-full mb-4">
                        <div class="md:w-full">
                            <label for="dest_ds_nome" id="lbrazao"
                                class="text-base text-black dark:text-white/80 mb-4">Nome do Destinatário</label>
                            <input name="dest_ds_nome" type="text" x-upper-input
                                class="w-full text-base leading-normal form-input uppercase text-gray-800 border border-gray-200 no-clear"
                                id="dest_ds_nome" maxlength="60" value="">
                        </div>
                    </div>

                    <div id="destinatario-endereco">
                        <div class="flex w-full gap-5 mb-4">
                            <div class="sm:w-1/3 md:w-1/4">
                                <label for="dest_nu_cep"
                                    class="text-base text-black dark:text-white/80 mb-4">CEP:</label>
                                <input name="dest_nu_cep" type="text" x-mask="99999-999" placeholder="_____-___"
                                    class="w-full text-base leading-normal form-input text-gray-800 border border-gray-200 cpf_cnpj cep no-clear-cep"
                                    id="dest_nu_cep" value="">
                            </div>

                            <div class="sm:w-full md:w-3/4">
                                <label for="dest_ds_endereco"
                                    class="text-base text-black dark:text-white/80 mb-4 upper-input">Endereço:</label>
                                <input name="dest_ds_endereco" type="text" x-upper-input
                                    class="w-full text-base leading-normal form-input text-gray-800 border border-gray-200 cpf_cnpj rounded uppercase"
                                    id="dest_ds_endereco" maxlength="55" value="">
                            </div>

                        </div>
                        <div class="flex w-full gap-5 mb-4">
                            <div class="md:w-3/4">
                                <label for="dest_ds_complemento"
                                    class="text-base text-black dark:text-white/80 mb-4">Complemento:</label>
                                <input name="dest_ds_complemento" type="text" x-upper-input
                                    class="w-full text-base leading-normal form-input text-gray-800 border border-gray-200 cpf_cnpj uppercase no-required"
                                    id="dest_ds_complemento" maxlength="55" value="">
                            </div>

                            <div class="md:w-1/4">
                                <label for="dest_nu_endereco"
                                    class="text-base text-black dark:text-white/80 mb-4">Número:</label>
                                <input name="dest_nu_endereco" type="text"
                                    class="w-full text-base leading-normal form-input text-gray-800 border border-gray-200 cpf_cnpj uppercase"
                                    id="dest_nu_endereco" maxlength="20" value="">
                            </div>
                        </div>



                        <div class="flex w-full gap-5 mb-4">
                            <div class="md:w-3/6">
                                <label for="dest_ds_bairro"
                                    class="text-base text-black dark:text-white/80 mb-4">Bairro:</label>
                                <input name="dest_ds_bairro" type="text" x-upper-input
                                    class="w-full text-base leading-normal form-input text-gray-800 border border-gray-200 cpf_cnpj uppercase"
                                    id="dest_ds_bairro" maxlength="55" value="">
                            </div>

                            <div class="md:w-1/6 sm:w-1/4">
                                <label for="dest_tp_uf"
                                    class="text-base text-black dark:text-white/80 mb-4 upper-input">UF:</label>
                                <input name="dest_tp_uf" type="text" x-upper-input
                                    class="w-full text-base leading-normal form-input text-gray-800 border border-gray-200 cpf_cnpj uppercase"
                                    minlength="2" maxlength="2" id="dest_tp_uf" placeholder="UF">
                            </div>
                            <div class="md:w-3/6">
                                <label for="dest_ds_cidade"
                                    class="text-base text-black dark:text-white/80 mb-4">Cidade:</label>
                                <input name="dest_ds_cidade" type="text" x-upper-input
                                    class="w-full text-base leading-normal form-input text-gray-800 border border-gray-200 uppercase"
                                    id="dest_ds_cidade" maxlength="55" value="">
                                <input name="dest_nu_ibge" type="hidden" id="dest_nu_ibge" value="">
                            </div>
                        </div>
                    </div>

                    <div class="flex w-full gap-5 mb-4">
                        <div class="md:w-2/3">
                            <label for="dest_ds_email"
                                class="text-base text-black dark:text-white/80 mb-4">E-mail:</label>
                            <input name="dest_ds_email" type="text" x-lower-input
                                class="w-full text-base leading-normal form-input text-gray-800 border border-gray-200 required lowercase"
                                id="dest_ds_email" maxlength="60" value="">
                        </div>

                        <div class="md:w-1/3">
                            <label for="dest_nu_telefone"
                                class="text-base text-black dark:text-white/80 mb-4">Telefone:</label>
                            <input name="dest_nu_telefone" type="text" x-phone_ddd
                                class="w-full text-base leading-normal form-input text-gray-800 border border-gray-200 no-required telefone_ddd"
                                id="dest_nu_telefone" value="">
                        </div>
                    </div>

                </div>

            </div>
            <div class="modal-footer w-full justify-end gap-5">

                <button
                    class="py-2 px-4 text-red-400 border border-red-400 bg-none hover:bg-[#ff0000] hover:text-white"
                    x-on:click="closeModal($event)">Cancelar
                </button>

                <button id="btn-salva-cliente" x-data="processClient"
                    class="py-2 px-4 border font-normal leading-normal no-underline text-teal-500 border-teal-500 hover:text-white hover:bg-teal-600"
                    x-on:click="clientConfirm()">
                    Confirmar
                </button>

            </div>
        </div>
    </div>
</div>
<script>
    const processClient = {
        clientConfirm() {
            console.log('Clicou no process confirm');
        },
        // Outras funções...
    };
</script>

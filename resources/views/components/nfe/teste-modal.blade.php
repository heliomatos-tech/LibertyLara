<div class="modal" id="modal-1" x-data="main()">
    <div class="modal-backdrop">

        <div class="modal-content md:w-96">
            <div class="modal-header w-full">
                <h1>Título do Modal</h1>
                <button class="modal-close flex self-start" x-on:click="closeModal($event)">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="1" y1="1" x2="15" y2="15"></line>
                        <line x1="15" y1="1" x2="1" y2="15"></line>
                    </svg>
                </button>
            </div>
            <div class="modal-body w-full p-5">
                Conteúdo do Modal
            </div>
            <div class="modal-footer w-full justify-end">
                <button class="py-2 px-4 text-red-400 border border-red-400 bg-none hover:bg-[#ff0000] hover:text-white"
                    x-on:click="closeModal($event)">Fechar</button>
            </div>
        </div>
    </div>
</div>

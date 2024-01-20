<div class="grid grid-cols-1 gap-4">
    <div
        class="bg-white dark:bg-darklight dark:border-darkborder border md:col-span-2 xl:col-span-2 border-black/10 p-5 gap-6 rounded">
        <div class="flex items-center justify-between gap-4 mb-4">
            <h2 class="text-base font-semibold text-black dark:text-white/80">
                Evolução de Vendas
            </h2>
            <div>
                <div x-data="{ dropdown: false }" class="dropdown ml-auto">
                    <a href="javaScript:;" class="text-black dark:text-white" @click="dropdown = !dropdown"
                        @keydown.escape="dropdown = false">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 12.75C9.69036 12.75 10.25 13.3096 10.25 14C10.25 14.6904 9.69036 15.25 9 15.25C8.30964 15.25 7.75 14.6904 7.75 14C7.75 13.3096 8.30964 12.75 9 12.75Z"
                                fill="currentColor"></path>
                            <path
                                d="M14 12.75C14.6904 12.75 15.25 13.3096 15.25 14C15.25 14.6904 14.6904 15.25 14 15.25C13.3096 15.25 12.75 14.6904 12.75 14C12.75 13.3096 13.3096 12.75 14 12.75Z"
                                fill="currentColor"></path>
                            <path
                                d="M20.25 14C20.25 13.3096 19.6904 12.75 19 12.75C18.3096 12.75 17.75 13.3096 17.75 14C17.75 14.6904 18.3096 15.25 19 15.25C19.6904 15.25 20.25 14.6904 20.25 14Z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                    <ul x-show="dropdown" @click.away="dropdown = false" x-transition="" x-transition.duration.300ms=""
                        class="right-0 whitespace-nowrap">
                        <li><a href="javascript:;">Semanal</a></li>
                        <li><a href="javascript:;">Mensal</a></li>
                        <li><a href="javascript:;">Anual</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <div id="chart5"></div>
        </div>

    </div>

    <livewire:main.MainTables />
</div>

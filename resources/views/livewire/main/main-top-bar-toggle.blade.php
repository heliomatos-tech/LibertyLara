<div>
    <div class="h-5 flex gap-4" x-data="{ fullScreen: false }">

        <button class="text-black dark:text-white/80" x-cloak :class="{ 'hidden': fullScreen, 'block': !fullScreen }"
            title="Modo de Tela Cheia" x-on:click="fullScreen = !fullScreen; $store.app.toggleFullScreen()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                <path d="M16 3H22V9H20V5H16V3ZM2 3H8V5H4V9H2V3ZM20 19V15H22V21H16V19H20ZM4 19H8V21H2V15H4V19Z"
                    fill="currentColor"></path>
            </svg>
        </button>
        <button class="text-black dark:text-white/80" x-cloak title="Modo de Tela Cheia"
            x-bind:class="{ 'block': fullScreen, 'hidden': !fullScreen }"
            x-on:click="fullScreen = !fullScreen; $store.app.toggleFullScreen()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                <path d="M18 7H22V9H16V3H18V7ZM8 9H2V7H6V3H8V9ZM18 17V21H16V15H22V17H18ZM8 15V21H6V17H2V15H8Z"
                    fill="currentColor"></path>
            </svg>
        </button>

        <a href="javascript:;" class="text-black" x-cloak x-show="$store.app.mode === 'light'" title="Modo Escuro"
            x-on:click="$store.app.toggleMode('dark')">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
                <path
                    d="M10 7C10 10.866 13.134 14 17 14C18.9584 14 20.729 13.1957 21.9995 11.8995C22 11.933 22 11.9665 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C12.0335 2 12.067 2 12.1005 2.00049C10.8043 3.27098 10 5.04157 10 7ZM4 12C4 16.4183 7.58172 20 12 20C15.0583 20 17.7158 18.2839 19.062 15.7621C18.3945 15.9187 17.7035 16 17 16C12.0294 16 8 11.9706 8 7C8 6.29648 8.08133 5.60547 8.2379 4.938C5.71611 6.28423 4 8.9417 4 12Z"
                    fill="currentColor"></path>
            </svg>
        </a>
        <a href="javascript:;" class="text-black dark:text-white/80" x-cloak x-show="$store.app.mode === 'dark'"
            title="Modo Claro" x-on:click="$store.app.toggleMode('light')">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                <path
                    d="M12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12C18 15.3137 15.3137 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16ZM11 1H13V4H11V1ZM11 20H13V23H11V20ZM3.51472 4.92893L4.92893 3.51472L7.05025 5.63604L5.63604 7.05025L3.51472 4.92893ZM16.9497 18.364L18.364 16.9497L20.4853 19.0711L19.0711 20.4853L16.9497 18.364ZM19.0711 3.51472L20.4853 4.92893L18.364 7.05025L16.9497 5.63604L19.0711 3.51472ZM5.63604 16.9497L7.05025 18.364L4.92893 20.4853L3.51472 19.0711L5.63604 16.9497ZM23 11V13H20V11H23ZM4 11V13H1V11H4Z"
                    fill="currentColor"></path>
            </svg>
        </a>
    </div>
</div>

<nav x-data="{ isOpen: false }"
    class="sidebar fixed z-[9998] bg-white light dark:bg-dark border-r h-full lg:w-[360px] border-gray-800 overflow-y-auto transition-all duration-300">
    <aside class="w-full relative left-0 bottom-0 h-[calc(100vh-82px)] light">

        <div
            class="sidebar main-brand  inline-block fixed top-0 left-0 right-0 py-5 p-4 light bg-white dark:bg-dark h-[82px] z-[9999] max-w-[360px] opacity-100">
            <a href="/" class="w-full">
                <img src="assets/images/logo-dark.svg" class="dark-logo h-7 logo dark:hidden" alt="logo" />
                <img src="assets/images/logo-light.svg" class="light-logo h-7 logo hidden dark:block" alt="logo" />
                <img src="assets/images/logo-icon.svg" class="logo-icon h-7 xmx-auto hidden" alt="">
            </a>
        </div>
        <div class="relative mt-20">
            <livewire:main.MainMenuDiarioProfessor />
            <livewire:main.MainMenuGestaoEscolar />
            <livewire:main.MainMenuRecursosHumanos />
            <livewire:main.MainMenuRelatorios />
            <livewire:main.MainMenuDocumentos />
        </div>
    </aside>
</nav>

        <!-- Start Sidebar -->
        <nav
            class="sidebar fixed z-[9999] flex-none w-[360px] border-r dark:bg-darkborder border-black/10 transition-all duration-300 overflow-hidden">
            <div class="bg-white dark:bg-darklight h-full">
                <div class="p-1">
                    <a href="index.html" class="main-logo w-full">
                        <img src="assets/images/educadf_digital_logo.png" class="xmx-auto dark-logo logo dark:hidden"
                            alt="logo" />
                        <img src="assets/images/educadf_digital_logo.png"
                            class="xmx-auto light-logo logo hidden dark:block" alt="logo" />
                        <img src="assets/images/educadf_digital_icon.png" class="logo-icon hidden" alt="" />
                    </a>
                </div>

                <div class="h-[calc(100vh-60px)] overflow-y-auto overflow-x-hidden xpx-5 pb-4 space-y-1 detached-menu">

                    {{-- @if (count($UserProfiles) <= 0)
                        <livewire:main.MainMenuNoProfile />
                    @endif --}}


                    {{-- @if (count(array_intersect(['gestao', 'professor'], $UserProfiles)) > 0) --}}
                    <livewire:main.MainMenuDiarioProfessor />

                    {{-- @if (in_array('gestao', $UserProfiles)) --}}
                    <livewire:main.MainMenuGestaoEscolar />
                    <livewire:main.MainMenuRecursosHumanos />
                    <livewire:main.MainMenuRelatorios />
                    <livewire:main.MainMenuDocumentos />
                    {{-- @endif
                    @endif --}}

                </div>
            </div>
        </nav>
        <!-- End sidebar -->

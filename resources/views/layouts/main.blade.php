<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{-- <head> --}}
<livewire:main.header />
{{-- </head> --}}

<body x-data="main"
    class="font-sans font-cerebri antialiased relative text-black dark:text-white text-sm font-normal overflow-x-hidden vertical"
    :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.fullscreen ? 'full' : '', $store.app.mode]">

    <!-- Start Layout -->
    <div class="bg-[#f9fbfd] dark:bg-dark text-black">
        <!-- Start detached bg -->
        <div
            class="bg-[url('assets/images/bg-main.png')] bg-black min-h-[220px] sm:min-h-[250px] bg-bottom fixed hidden w-full -z-50 detached-img">
        </div>
        <!-- End detached bg -->

        <!-- Start Menu Sidebar Olverlay -->
        <div x-cloak class="fixed inset-0 bg-black/60 dark:bg-dark/90 z-[999] lg:hidden"
            :class="{ 'hidden': !$store.app.sidebar }" x-on:click="$store.app.toggleSidebar()">
        </div>
        <!-- End Menu Sidebar Olverlay -->

        <!-- Start Main Content -->
        <div class="main-container flex mx-auto">
            <!-- Start Sidebar -->
            <livewire:app.MainMenuNav />
            <!-- End sidebar -->

            <!-- Start Content Area -->
            <div class="main-content flex-1">
                <!-- Start Topbar -->
                <div
                    class="bg-white dark:bg-darklight dark:border-darkborder flex gap-4 lg:z-10 items-center justify-between px-4 h-[60px] border-b border-black/10 detached-topbar relative">
                    <div class="flex items-center gap-2 sm:gap-4 flex-1">


                        <button type="button" class="text-black dark:text-white/80 m-2"
                            x-on:click="$store.app.toggleSidebar()">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6">
                                <path d="M3 4H21V6H3V4ZM3 11H15V13H3V11ZM3 18H21V20H3V18Z" fill="currentColor"></path>
                            </svg>
                        </button>


                        <div class="flex-1 hidden min-[420px]:block ml-3">
                            <div class="relative max-w-[180px] md:max-w-[350px]">
                                <span class="text-2xl text-dark dark:text-white">Nome da Empresa atual x2x</span>
                            </div>
                        </div>


                    </div>

                    <div class="flex items-center gap-4">
                        <livewire:main.MainTopBarToggle />
                        <livewire:main.MainTopBarNotifications />
                        <livewire:main.MainTopBarUser />
                    </div>
                </div>
                <!-- End Topbar -->

                <!-- Start Content -->
                <div
                    class="h-[calc(100vh-60px)] relative overflow-y-auto overflow-x-hidden p-4 space-y-4 detached-content">


                    <!-- Start All Card -->
                    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]" id="main-content">

                        @yield('main-content')

                    </div>
                    <!-- End Content -->

                </div>
                <!-- End Content Area -->
            </div>
        </div>
    </div>
    <!-- End Layout -->

    <!-- Alpine js -->
    {{-- @livewireScripts() --}}
    {{-- <script src="{{ asset('assets/js/alpine-ajax.min.js') }}" defer></script> --}}
    <script src="{{ asset('assets/js/alpine-collaspe.min.js') }}"></script>
    {{-- <script src="assets/js/alpine-persist.min.js"></script> --}}
    <!-- Chart Js -->
    <script src="{{ asset('assets/js/apexcharts.js') }}" defer></script>
    <script src="{{ asset('assets/js/appexchart-app.js') }}" defer></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}" defer></script>
    <!-- Custom js -->
    <script src="{{ asset('assets/js/custom.js') }}" defer></script>

    @livewireScripts
    <script>
        function pageLoader() {
            return {
                currentUrl: window.location.pathname,

                init() {
                    window.addEventListener('popstate', this.handlePopstate.bind(this));
                },

                loadPage(page) {
                    fetch(page, {
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new FetchError('Ocorreu uma falha na requisição', response);
                            }
                            return response.text();
                        })
                        .then(html => {
                            document.getElementById('main-content').innerHTML = html;

                            // Atualize a URL no endereço do navegador e adicione um novo estado ao histórico
                            window.history.pushState({
                                url: page
                            }, '', page);
                            this.currentUrl = page;
                        })
                        .catch(error => {
                            console.error('Ocorreu um erro:', error);
                        });
                },

                handlePopstate(event) {
                    if (event.state && event.state.url) {
                        this.loadPage(event.state.url);
                    } else {
                        // Se não houver estado associado, recarregue a página atual
                        this.loadPage(this.currentUrl);
                    }
                }
            };
        }

        class FetchError extends Error {
            constructor(message, response) {
                super(message);
                this.response = response;
            }
        }
    </script>


</body>

</html>

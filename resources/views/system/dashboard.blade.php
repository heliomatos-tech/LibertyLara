{{-- @extends('layouts.main') --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<livewire:main.header />

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
            <livewire:main.MainMenuNav />
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
                            <div class="relative max-w-[380px] md:max-w-[650px]">
                                <span class="text-2xl text-dark dark:text-white">Sistema Administrativo de Clientes
                                </span>
                            </div>
                        </div>


                    </div>


                    <div class="flex items-center gap-4">
                        <livewire:main.MainTopBarToggle />
                        <livewire:main.MainTopBarNotifications />
                        <div class="profile" x-data="dropdown" x-on:click.outside="open = false">
                            <button type="button" class="flex items-center gap-1.5 xl:gap-0 dark:text-white/80"
                                x-on:click="toggle()" title="Usuário Logado">
                                <img class="h-7 w-7 rounded-full xl:mr-2" src="assets/images/user.png"
                                    alt="Header Avatar" />
                                <span class="fw-medium hidden xl:block dark:text-white/80">Nome do usuario</span>
                                <svg class="w-4 h-4" width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.70711 11.2929C6.51957 11.1054 6.26522 11 6 11C5.73478 11 5.48043 11.1054 5.29289 11.2929C5.10536 11.4804 5 11.7348 5 12C5 12.2652 5.10536 12.5196 5.29289 12.7071L15.2929 22.7071C15.6834 23.0976 16.3166 23.0976 16.7071 22.7071L26.7071 12.7071C26.8946 12.5196 27 12.2652 27 12C27 11.7348 26.8946 11.4804 26.7071 11.2929C26.5196 11.1054 26.2652 11 26 11C25.7348 11 25.4804 11.1054 25.2929 11.2929L16 20.5858L6.70711 11.2929Z"
                                        fill="currentColor" />
                                </svg>
                            </button>
                            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms>
                                <li>
                                    <a href="javaScript:;" class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4">
                                            <path
                                                d="M20 22H18V20C18 18.3431 16.6569 17 15 17H9C7.34315 17 6 18.3431 6 20V22H4V20C4 17.2386 6.23858 15 9 15H15C17.7614 15 20 17.2386 20 20V22ZM12 13C8.68629 13 6 10.3137 6 7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7C18 10.3137 15.3137 13 12 13ZM12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        Meu Perfil
                                    </a>
                                </li>
                                <li>
                                    <a href="javaScript:;" class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4">
                                            <path
                                                d="M6.17071 18C6.58254 16.8348 7.69378 16 9 16C10.3062 16 11.4175 16.8348 11.8293 18H22V20H11.8293C11.4175 21.1652 10.3062 22 9 22C7.69378 22 6.58254 21.1652 6.17071 20H2V18H6.17071ZM12.1707 11C12.5825 9.83481 13.6938 9 15 9C16.3062 9 17.4175 9.83481 17.8293 11H22V13H17.8293C17.4175 14.1652 16.3062 15 15 15C13.6938 15 12.5825 14.1652 12.1707 13H2V11H12.1707ZM6.17071 4C6.58254 2.83481 7.69378 2 9 2C10.3062 2 11.4175 2.83481 11.8293 4H22V6H11.8293C11.4175 7.16519 10.3062 8 9 8C7.69378 8 6.58254 7.16519 6.17071 6H2V4H6.17071ZM9 6C9.55228 6 10 5.55228 10 5C10 4.44772 9.55228 4 9 4C8.44772 4 8 4.44772 8 5C8 5.55228 8.44772 6 9 6ZM15 13C15.5523 13 16 12.5523 16 12C16 11.4477 15.5523 11 15 11C14.4477 11 14 11.4477 14 12C14 12.5523 14.4477 13 15 13ZM9 20C9.55228 20 10 19.5523 10 19C10 18.4477 9.55228 18 9 18C8.44772 18 8 18.4477 8 19C8 19.5523 8.44772 20 9 20Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        Configurações
                                    </a>
                                </li>
                                <li>
                                    <a href="javaScript:;" class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4">
                                            <path
                                                d="M5.45455 15L1 18.5V3C1 2.44772 1.44772 2 2 2H17C17.5523 2 18 2.44772 18 3V15H5.45455ZM4.76282 13H16V4H3V14.3851L4.76282 13ZM8 17H18.2372L20 18.3851V8H21C21.5523 8 22 8.44772 22 9V22.5L17.5455 19H9C8.44772 19 8 18.5523 8 18V17Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        Mensagens
                                    </a>
                                </li>

                                <li class="h-px bg-black/5 dark:bg-darkborder block my-1"></li>
                                <li>
                                    <a href="{{ route('sys-logout') }}"
                                        class="text-black dark:text-white flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 h-4">
                                            <path
                                                d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C15.2713 2 18.1757 3.57078 20.0002 5.99923L17.2909 5.99931C15.8807 4.75499 14.0285 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C14.029 20 15.8816 19.2446 17.2919 17.9998L20.0009 17.9998C18.1765 20.4288 15.2717 22 12 22ZM19 16V13H11V11H19V8L24 12L19 16Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        Sair do Sistema
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Topbar -->

                <!-- Start Content -->
                <div
                    class="h-[calc(100vh-60px)] relative overflow-y-auto overflow-x-hidden p-4 space-y-4 detached-content">
                    <!-- Start Breadcrumb -->
                    {{-- <div>
                        <nav class="w-full">
                            <ul class="space-y-2 detached-breadcrumb">
                                <li class="text-xs dark:text-white/80">Sliced</li>
                                <li class="text-black dark:text-white font-semibold text-xl">
                                    Dashboard
                                </li>
                            </ul>
                        </nav>
                    </div> --}}
                    <!-- End Breadcrumb -->

                    <!-- Start All Card -->
                    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)]">
                        <livewire:main.MainCards />
                        <livewire:main.EvolucaoVendasGraph />
                        <livewire:main.Footer />
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
    <script src="assets/js/alpine-collaspe.min.js"></script>
    {{-- <script src="assets/js/alpine-persist.min.js"></script> --}}
    <!-- Chart Js -->
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/appexchart-app.js" defer></script>
    <script src="assets/js/perfect-scrollbar.min.js" defer></script>
    <!-- Custom js -->
    <script src="assets/js/custom.js" defer></script>
</body>

</html>

        <!-- Start Sidebar -->
        <nav
            class="sidebar fixed z-[9999] flex-none w-[360px] border-r dark:bg-darkborder border-black/10 transition-all duration-300 overflow-hidden">
            <div class="bg-white dark:bg-darklight h-full">
                <div class="p-1">
                    <a href="index.html" class="main-logo w-full">
                        <img src="{{ asset('assets/images/logo-color-300.png') }}" class="dark-logo logo dark:hidden"
                            alt="Logo" />
                        <img src="{{ asset('assets/images/logo-color-300.png') }}"
                            class="light-logo logo hidden dark:block" alt="Logo" />
                        <img src="{{ asset('assets/images/logo-color-300.png') }}" class="logo-icon hidden"
                            alt="Logo" />
                    </a>
                </div>

                <div class="h-[calc(100vh-60px)] overflow-y-auto overflow-x-hidden xpx-5 pb-4 space-y-1 detached-menu"
                    x-data="{ currentPage: '' }">


                    <div>
                        <ul>

                            <li>
                                <div
                                    class="menu nav-item py-3 px-2 mt-1 dark & hover:bg-[#6a80976e] dark & hover:text-white ">
                                    <a href="{{ route('app-dashboard') }}"
                                        class="flex items-center w-full text-sm text-gray-600 dark:text-white transition duration-200 ease-in-out transform focus:shadow-outline group hover:cursor-pointer">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                        </svg>

                                        <span class="inline-flex items-center text-base font-light ml-2">
                                            <p class="font-semibold uppercase">Painel Inicial</p>
                                        </span>


                                    </a>
                                </div>
                            </li>




                            @foreach ($options as $item)
                                <li>

                                    @if (!is_null($item->childs) && count($item->childs) > 0)
                                        <div x-data="{ open: false }">
                                            <div
                                                class="menu nav-item py-3 px-2 mt-1 dark & hover:bg-[#6a80976e] dark & hover:text-white ">
                                                <a class="flex items-center justify-between w-full text-sm text-gray-600 dark:text-white transition duration-200 ease-in-out transform focus:shadow-outline group hover:cursor-pointer"
                                                    @click="open=!open">

                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-7 h-7">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                                    </svg>

                                                    <span class="inline-flex items-center text-base font-light ml-2">
                                                        <p class="font-semibold uppercase">{{ $item->opcao }}</p>
                                                    </span>

                                                    <svg fill="currentColor" viewBox="0 0 20 20"
                                                        :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                                        class="inline w-5 h-5 ml-auto transition-transform duration-200 transform group-hover:text-accent rotate-0 chevron">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd">
                                                        </path>
                                                    </svg>

                                                </a>
                                            </div>
                                            <div class="p-2 pl-1 -px-px" x-show="open" @click.outside="open = false"
                                                style="display: none">
                                                @include('menu.app-submenu', [
                                                    'options' => $item->childs,
                                                    'module' => $module,
                                                ])
                                            </div>
                                        </div>
                                    @else
                                        @include('menu.app-submenu', [
                                            'options' => [$item],
                                            'module' => $module,
                                            'navigate' => $navigate,
                                        ])
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End sidebar -->

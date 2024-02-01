<ul>
    @foreach ($options as $option)
        <li class="pl-5">
            @php
                // $menu_controller = \Str::lower($option->controller);
                // $menu_action = '/' . \Str::lower($option->action) ?? '';
                // $menu_route = trim("{$module}/{$menu_controller}{$menu_action}");

                $menu_route = '';

                if (Route::has($option->rota)) {
                    $menu_route = route($option->rota);
                }

            @endphp

            @if ($menu_route)
                {{-- <a href="{{ $menu_route }}" --}}
                <a href="#" x-on:click.prevent="loadPage('{{ $menu_route }}')"
                    class="inline-flex items-center justify-between w-full px-1 py-2 mt-1 text-gray-900 dark:text-white transition duration-300 ease-in-out hover:font-bold dark & hover:bg-[#3a63a659]">
                    <span class="inline-flex items-center text-base font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5"
                            stroke="currentColor" class="w-3 h-3 -mt-1">
                            <path
                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                        <span class="ml-2">{{ $option->opcao }}</span>
                    </span>
                </a>
            @else
                <a
                    class="inline-flex items-center justify-between w-full px-1 py-2 mt-1 text-gray-900 dark:text-white transition duration-300 ease-in-out hover:font-bold dark & hover:bg-[#3a63a659]">
                    <span class="inline-flex items-center text-base font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5"
                            stroke="currentColor" class="w-3 h-3 -mt-1">
                            <path
                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                        <span class="ml-2">{{ $option->opcao }}</span>
                    </span>
                </a>
            @endif



        </li>
    @endforeach
</ul>

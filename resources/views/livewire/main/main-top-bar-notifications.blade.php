<div class="notification h-5" x-data="dropdown" x-on:click.outside="open = false" title="Notificações e Avisos">
    <button type="button" class="relative text-black dark:text-white/80" x-on:click="toggle()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 mx-auto">
            <path
                d="M5 18H19V11.0314C19 7.14806 15.866 4 12 4C8.13401 4 5 7.14806 5 11.0314V18ZM12 2C16.9706 2 21 6.04348 21 11.0314V20H3V11.0314C3 6.04348 7.02944 2 12 2ZM9.5 21H14.5C14.5 22.3807 13.3807 23.5 12 23.5C10.6193 23.5 9.5 22.3807 9.5 21Z"
                fill="currentColor"></path>
        </svg>
        <span class="absolute -top-px right-px h-2 w-2 bg-purple border border-white rounded-full"></span>
    </button>
    <div class="noti-area" x-cloak x-show="open" x-transition x-transition.duration.300ms>
        <h4 class="text-black dark:text-white/80 px-2 py-2.5 border-b border-black/10 flex items-center gap-2">
            Notificações e Avisos
            <span class="inline-block bg-purple/10 text-purple text-[10px] p-1 leading-none rounded">32</span>
        </h4>
        <ul class="max-h-56 overflow-y-auto">
            <li>
                <div class="flex gap-2 cursor-pointer group" x-show="showElement" x-data="{ showElement: true }" x-transition
                    x-transition.duration.300ms>
                    <div class="h-9 w-9 flex-none rounded-full overflow-hidden">
                        <img src="assets/images/avatar-1.png" class="object-cover" alt="avatar" />
                    </div>
                    <div class="flex-1 relative">
                        <p
                            class="whitespace-nowrap overflow-hidden text-ellipsis w-[185px] text-black dark:text-white pr-4">
                            Notificação 1
                        </p>
                        <p class="text-xs text-black/40 dark:text-darkmuted">
                            01/01/2024 15:35
                        </p>
                        <button type="button" x-on:click="showElement = false"
                            class="absolute top-1 dark:text-white/80 right-0 hidden group-hover:block hover:opacity-80 rotate-0 hover:rotate-180 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3.5 h-3.5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex gap-2 cursor-pointer group" x-show="showElement" x-data="{ showElement: true }" x-transition
                    x-transition.duration.300ms>
                    <div class="h-9 w-9 flex-none rounded-full overflow-hidden">
                        <img src="assets/images/avatar-4.png" class="object-cover" alt="avatar" />
                    </div>
                    <div class="flex-1 relative">
                        <p
                            class="whitespace-nowrap overflow-hidden text-ellipsis w-[185px] text-black dark:text-white pr-4">
                            Notificação 2
                        </p>
                        <p class="text-xs text-black/40 dark:text-darkmuted">
                            01/01/2024 15:35
                        </p>
                        <button type="button" x-on:click="showElement = false"
                            class="absolute top-1 dark:text-white/80 right-0 hidden group-hover:block hover:opacity-80 rotate-0 hover:rotate-180 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3.5 h-3.5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex gap-2 cursor-pointer group" x-show="showElement" x-data="{ showElement: true }" x-transition
                    x-transition.duration.300ms>
                    <div class="h-9 w-9 flex-none rounded-full overflow-hidden">
                        <img src="assets/images/avatar-13.png" class="object-cover" alt="avatar" />
                    </div>
                    <div class="flex-1 relative">
                        <p
                            class="whitespace-nowrap overflow-hidden text-ellipsis w-[185px] text-black dark:text-white pr-4">
                            Notificação 3
                        </p>
                        <p class="text-xs text-black/40 dark:text-darkmuted">
                            01/01/2024 15:35
                        </p>
                        <button type="button" x-on:click="showElement = false"
                            class="absolute top-1 dark:text-white/80 right-0 hidden group-hover:block hover:opacity-80 rotate-0 hover:rotate-180 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3.5 h-3.5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex gap-2 cursor-pointer group" x-show="showElement" x-data="{ showElement: true }" x-transition
                    x-transition.duration.300ms>
                    <div class="h-9 w-9 flex-none rounded-full overflow-hidden">
                        <img src="assets/images/avatar-19.png" class="object-cover" alt="avatar" />
                    </div>
                    <div class="flex-1 relative">
                        <p
                            class="whitespace-nowrap overflow-hidden text-ellipsis w-[185px] text-black dark:text-white pr-4">
                            Notificação 4
                        </p>
                        <p class="text-xs text-black/40 dark:text-darkmuted">
                            01/01/2024 15:35
                        </p>
                        <button type="button" x-on:click="showElement = false"
                            class="absolute top-1 dark:text-white/80 right-0 hidden group-hover:block hover:opacity-80 rotate-0 hover:rotate-180 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3.5 h-3.5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex gap-2 cursor-pointer group" x-show="showElement" x-data="{ showElement: true }" x-transition
                    x-transition.duration.300ms>
                    <div class="h-9 w-9 flex-none rounded-full overflow-hidden">
                        <img src="assets/images/avatar-24.png" class="object-cover" alt="avatar" />
                    </div>
                    <div class="flex-1 relative">
                        <p
                            class="whitespace-nowrap overflow-hidden text-ellipsis w-[185px] text-black dark:text-white pr-4">
                            Notificação 5
                        </p>
                        <p class="text-xs text-black/40 dark:text-darkmuted">
                            01/01/2024 15:35
                        </p>
                        <button type="button" x-on:click="showElement = false"
                            class="absolute top-1 dark:text-white/80 right-0 hidden group-hover:block hover:opacity-80 rotate-0 hover:rotate-180 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3.5 h-3.5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex gap-2 cursor-pointer group" x-show="showElement" x-data="{ showElement: true }"
                    x-transition x-transition.duration.300ms>
                    <div class="h-9 w-9 flex-none rounded-full overflow-hidden">
                        <img src="assets/images/avatar-1.png" class="object-cover" alt="avatar" />
                    </div>
                    <div class="flex-1 relative">
                        <p
                            class="whitespace-nowrap overflow-hidden text-ellipsis w-[185px] text-black dark:text-white pr-4">
                            Notificação 6
                        </p>
                        <p class="text-xs text-black/40 dark:text-darkmuted">
                            01/01/2024 15:35
                        </p>
                        <button type="button" x-on:click="showElement = false"
                            class="absolute top-1 dark:text-white/80 right-0 hidden group-hover:block hover:opacity-80 rotate-0 hover:rotate-180 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3.5 h-3.5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex gap-2 cursor-pointer group" x-show="showElement" x-data="{ showElement: true }"
                    x-transition x-transition.duration.300ms>
                    <div class="h-9 w-9 flex-none rounded-full overflow-hidden">
                        <img src="assets/images/avatar-4.png" class="object-cover" alt="avatar" />
                    </div>
                    <div class="flex-1 relative">
                        <p
                            class="whitespace-nowrap overflow-hidden text-ellipsis w-[185px] text-black dark:text-white pr-4">
                            Notificação 7
                        </p>
                        <p class="text-xs text-black/40 dark:text-darkmuted">
                            01/01/2024 15:35
                        </p>
                        <button type="button" x-on:click="showElement = false"
                            class="absolute top-1 dark:text-white/80 right-0 hidden group-hover:block hover:opacity-80 rotate-0 hover:rotate-180 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3.5 h-3.5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </li>
            <li>
                <div class="flex gap-2 cursor-pointer group" x-show="showElement" x-data="{ showElement: true }"
                    x-transition x-transition.duration.300ms>
                    <div class="h-9 w-9 flex-none rounded-full overflow-hidden">
                        <img src="assets/images/avatar-13.png" class="object-cover" alt="avatar" />
                    </div>
                    <div class="flex-1 relative">
                        <p
                            class="whitespace-nowrap overflow-hidden text-ellipsis w-[185px] text-black dark:text-white pr-4">
                            Notificação 8
                        </p>
                        <p class="text-xs text-black/40 dark:text-darkmuted">
                            01/01/2024 15:35
                        </p>
                        <button type="button" x-on:click="showElement = false"
                            class="absolute top-1 dark:text-white/80 right-0 hidden group-hover:block hover:opacity-80 rotate-0 hover:rotate-180 transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3.5 h-3.5">
                                <path
                                    d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z"
                                    fill="currentColor"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </li>
        </ul>
        <div class="px-2 py-2.5 border-t border-black/10 dark:border-darkborder">
            <a href="javascript:;"
                class="text-black dark:text-white dark:hover:text-purple hover:text-purple duration-300">Veja todas as
                notificações
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    class="w-3.5 h-3.5 inline-block relative -top-[1px]">
                    <path
                        d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                        fill="currentColor"></path>
                </svg>
            </a>
        </div>
    </div>
</div>

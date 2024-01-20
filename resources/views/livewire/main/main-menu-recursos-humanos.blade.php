                <!-- Recursos Humanos-->
                <div x-data="{ open: false }">
                    <div class="menu nav-item py-3 px-2 mt-1 dark & hover:bg-[#6a80976e] dark & hover:text-white ">
                        <a href="#"
                            class="flex items-center justify-between w-full text-sm text-gray-600 dark:text-white transition duration-200 ease-in-out transform focus:shadow-outline group"
                            @click="open=!open">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                            </svg>

                            <span class="inline-flex items-center text-base font-light">
                                <p class="font-semibold uppercase ml-2">Recursos Humanos</p>
                            </span>
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                class="inline w-5 h-5 ml-auto transition-transform duration-200 transform group-hover:text-accent rotate-0 chevron">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>

                        </a>
                    </div>




                    <div class="p-2 pl-1 -px-px" x-show="open" x-on:click.outside="opens = false"
                        style="display: none">
                        <ul>
                            <li>
                                <a href="#"
                                    class="inline-flex items-center justify-between w-full px-1 py-2 mt-1 text-gray-900 dark:text-white transition duration-300 ease-in-out hover:font-bold dark & hover:bg-[#3a63a659]">
                                    <span class="inline-flex items-center text-base font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                            stroke-width="1.5" stroke="currentColor" class="w-3 h-3 -mt-1">
                                            <path
                                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                                        </svg>
                                        <span class="ml-2">Alterar Vínculo</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="inline-flex items-center justify-between w-full px-1 py-2 mt-1 text-gray-900 dark:text-white transition duration-300 ease-in-out hover:font-bold dark & hover:bg-[#3a63a659]">
                                    <span class="inline-flex items-center text-base font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                            stroke-width="1.5" stroke="currentColor" class="w-3 h-3 -mt-1">
                                            <path
                                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                                        </svg>
                                        <span class="ml-2">Resetar Senha</span>
                                    </span>
                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class="inline-flex items-center justify-between w-full px-1 py-2 mt-1 text-gray-900 dark:text-white transition duration-300 ease-in-out hover:font-bold dark & hover:bg-[#3a63a659]">
                                    <span class="inline-flex items-center text-base font-light">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                            stroke-width="1.5" stroke="currentColor" class="w-3 h-3 -mt-1">
                                            <path
                                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                                        </svg>
                                        <span class="ml-2">Servidores da Unidade</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Gestão Escolar--

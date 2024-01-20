<div x-data="{ open: false }">
    <div class="menu nav-item py-3 px-2 mt-1 dark & hover:bg-[#6a80976e] dark & hover:text-white ">
        <a href="#"
            class="flex items-center justify-between w-full text-sm text-gray-600 dark:text-white transition duration-200 ease-in-out transform focus:shadow-outline group"
            @click="open=!open">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205 3 1m1.5.5-1.5-.5M6.75 7.364V3h-3v18m3-13.636 10.5-3.819" />
            </svg>



            <span class="inline-flex items-center text-base font-light">
                <p class="font-semibold uppercase ml-2">Gestão Escolar</p>
            </span>
            <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                class="inline w-5 h-5 ml-auto transition-transform duration-200 transform group-hover:text-accent rotate-0 chevron">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>

        </a>
    </div>




    <div class="p-2 pl-1 -px-px" x-show="open" x-on:click.outside="opens = false" style="display: none">
        <ul>
            <li>
                <a href="#"
                    class="inline-flex items-center justify-between w-full px-1 py-2 mt-1 text-gray-900 dark:text-white transition duration-300 ease-in-out hover:font-bold dark & hover:bg-[#3a63a659]">
                    <span class="inline-flex items-center text-base font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5"
                            stroke="currentColor" class="w-3 h-3 -mt-1">
                            <path
                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                        <span class="ml-2"> Cadastro de Alunos </span>
                    </span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="inline-flex items-center justify-between w-full px-1 py-2 mt-1 text-gray-900 dark:text-white transition duration-300 ease-in-out hover:font-bold dark & hover:bg-[#3a63a659]">
                    <span class="inline-flex items-center text-base font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5"
                            stroke="currentColor" class="w-3 h-3 -mt-1">
                            <path
                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                        <span class="ml-2"> Cadastro de Turmas </span>
                    </span>
                </a>
            </li>

            <li>
                <a href="#"
                    class="inline-flex items-center justify-between w-full px-1 py-2 mt-1 text-gray-900 dark:text-white transition duration-300 ease-in-out hover:font-bold dark & hover:bg-[#3a63a659]">
                    <span class="inline-flex items-center text-base font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5"
                            stroke="currentColor" class="w-3 h-3 -mt-1">
                            <path
                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                        <span class="ml-2">Alocar Professor</span>
                    </span>
                </a>
            </li>

            <li>
                <a href="#"
                    class="inline-flex items-center justify-between w-full px-1 py-2 mt-1 text-gray-900 dark:text-white transition duration-300 ease-in-out hover:font-bold dark & hover:bg-[#3a63a659]">
                    <span class="inline-flex items-center text-base font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5"
                            stroke="currentColor" class="w-3 h-3 -mt-1">
                            <path
                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                        <span class="ml-2">Reabertura de Diário</span>
                    </span>
                </a>
            </li>

            <li>
                <a href="#"
                    class="inline-flex items-center justify-between w-full px-1 py-2 mt-1 text-gray-900 dark:text-white transition duration-300 ease-in-out hover:font-bold dark & hover:bg-[#3a63a659]">
                    <span class="inline-flex items-center text-base font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5"
                            stroke="currentColor" class="w-3 h-3 -mt-1">
                            <path
                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                        <span class="ml-2">Grade Horária</span>
                    </span>
                </a>
            </li>

            <li>
                <a href="#"
                    class="inline-flex items-center justify-between w-full px-1 py-2 mt-1 text-gray-900 dark:text-white transition duration-300 ease-in-out hover:font-bold dark & hover:bg-[#3a63a659]">
                    <span class="inline-flex items-center text-base font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5"
                            stroke="currentColor" class="w-3 h-3 -mt-1">
                            <path
                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                        <span class="ml-2">Calendário Escolar</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="inline-flex items-center justify-between w-full px-1 py-2 mt-1 text-gray-900 dark:text-white transition duration-300 ease-in-out hover:font-bold dark & hover:bg-[#3a63a659]">
                    <span class="inline-flex items-center text-base font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5"
                            stroke="currentColor" class="w-3 h-3 -mt-1">
                            <path
                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                        <span class="ml-2"> Enturmação (FGB) </span>
                    </span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="inline-flex items-center justify-between w-full px-1 py-2 mt-1 text-gray-900 dark:text-white transition duration-300 ease-in-out hover:font-bold dark & hover:bg-[#3a63a659]">
                    <span class="inline-flex items-center text-base font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5"
                            stroke="currentColor" class="w-3 h-3 -mt-1">
                            <path
                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                        <span class="ml-2"> Itinerário Formativo (IF) </span>
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
                        <span class="ml-2">
                            Itinerário Formativo Integrador (IFI)
                        </span>
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
                        <span class="ml-2">
                            Itinerário Formativo Profissional (IFTP)
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="inline-flex items-center justify-between w-full px-1 py-2 mt-1 text-gray-900 dark:text-white transition duration-300 ease-in-out hover:font-bold dark & hover:bg-[#3a63a659]">
                    <span class="inline-flex items-center text-base font-light">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                            stroke-width="1.5" stroke="currentColor" class="w-3 h-3 -mt-[0.125rem]">
                            <path
                                d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                        </svg>
                        <span class="ml-2">Trilha de Aprendizagem </span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Gestão Escolar-->

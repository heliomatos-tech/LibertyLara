       <!-- Relatórios -->
       <div x-data="{ open: false }">
           <div class="menu nav-item py-3 px-2 mt-1 dark & hover:bg-[#6a80976e] dark & hover:text-white ">
               <a href="#"
                   class="flex items-center justify-between w-full text-sm text-gray-600 dark:text-white transition duration-200 ease-in-out transform focus:shadow-outline group"
                   @click="open=!open">

                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                       stroke="currentColor" class="w-6 h-6">
                       <path stroke-linecap="round" stroke-linejoin="round"
                           d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                   </svg>

                   <span class="inline-flex items-center text-base font-light">
                       <p class="font-semibold uppercase ml-2">Relatórios</p>
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
                               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                   stroke-width="1.5" stroke="currentColor" class="w-3 h-3 -mt-1">
                                   <path
                                       d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
                               </svg>
                               <span class="ml-2">Boletim de Frequência</span>
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
                               <span class="ml-2">Declaração Escolar</span>
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
                               <span class="ml-2">Relação de Alunos</span>
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
                               <span class="ml-2">Chamada Provisória</span>
                           </span>
                       </a>
                   </li>
               </ul>
           </div>
       </div>
       <!-- Relatórios-->

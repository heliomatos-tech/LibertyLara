      <!-- Diário de Classe-->
      <div x-data="{ open: false }">
          <div class="menu nav-item py-3 px-2 mt-1 dark & hover:bg-[#6a80976e] dark & hover:text-white ">
              <a href="#"
                  class="flex items-center justify-between w-full text-sm text-gray-600 dark:text-white transition duration-200 ease-in-out transform focus:shadow-outline group"
                  @click="open=!open">

                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="w-7 h-7">
                      <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                  </svg>

                  <span class="inline-flex items-center text-base font-light ml-2">
                      <p class="font-semibold uppercase">Diário de Classe</p>
                  </span>

                  <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                      class="inline w-5 h-5 ml-auto transition-transform duration-200 transform group-hover:text-accent rotate-0 chevron">
                      <path fill-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          clip-rule="evenodd">
                      </path>
                  </svg>

              </a>
          </div>
          <div class="p-2 pl-1 -px-px" x-show="open" @click.outside="open = false" style="display: none">
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
                              <span class="ml-2">Registro de Frequência</span>
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
                              <span class="ml-2">Registro de Aula</span>
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
                              <span class="ml-2">Instrumentos Avaliativos</span>
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
                              <span class="ml-2">Fechamento</span>
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
                              <span class="ml-2"> Minhas Turmas </span>
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
                                  Relatório - Frequência x Aulas
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
                              <span class="ml-2">Relatório - Itinerários Formativos</span>
                          </span>
                      </a>
                  </li>
              </ul>
          </div>
      </div>
      <!-- Diário de Classe-->

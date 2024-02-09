<div x-data="{ open: false }">
    <div class="flex justify-end">
        <button @click="open = true"
            class="border rounded dark:text-white/80 border-gray-600 hover:text-white dark:bg-black hover:bg-gray-700 !py-1 !px-3 mt-2 self-end">
            Informações ao Fisco
        </button>
    </div>
    <div @keydown.escape.window="open = false" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
        x-show="open" style="display: none" x-cloak>
        <!-- Modal -->
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white p-6 rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full"
                @click.away="open = false" x-transition:enter="ease-out duration-100"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0">
                <!-- Modal header -->
                <div class="flex items-start justify-between">
                    <div class="text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Title</h3>
                        <div class="mt-1">
                            <p class="text-sm text-gray-500">
                                Transporte </p>
                        </div>
                    </div>
                    <span class="cursor-pointer" @click="open = false">✕</span>
                </div>

                <!-- Modal body -->
                <div class="text-left my-2">
                    <p class="text-sm text-black">Transporte</p>
                </div>

                <!-- Modal footer -->
                <div class="flex items-center justify-end gap-2 mt-4">
                    <button type="button"
                        class="w-full inline-flex justify-center rounded-md border border-blue-500 px-4 py-2 text-base font-medium text-blue-500 hover:text-white hover:border-blue-400 hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:w-auto sm:text-sm"
                        @click="open = false">
                        Close
                    </button>
                    <button type="button"
                        class="w-full inline-flex justify-center rounded-md border border-transparent px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:w-auto sm:text-sm"
                        @click="open = false">
                        Accept
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

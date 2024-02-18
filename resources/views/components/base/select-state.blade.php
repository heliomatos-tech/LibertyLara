<div x-data="{ open: false, selected: '{{ $selectedState }}' }" x-on:click.away="open = false" class="relative">
    <div x-on:click="open = !open"
        class="cursor-pointer w-full text-base leading-normal form-input text-gray-800 border border-gray-200 rounded-md shadow-sm">
        <span x-text="selected || 'Selecione um estado...'" class="block truncate"></span>
        <!-- ... ícone de seta para baixo ... -->
    </div>
    <ul x-show="open" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="absolute mt-1 w-full bg-white border border-gray-200 rounded-md shadow-lg max-h-60 overflow-auto z-10">
        @foreach ($states as $code => $state)
            <li x-on:click="selected = '{{ $state }}'; open = false; $dispatch('state-selected', { state: '{{ $state }}', code: '{{ $code }}' })"
                class="cursor-pointer hover:bg-gray-200 px-4 py-2">{{ $state }}</li>
        @endforeach
    </ul>
</div>

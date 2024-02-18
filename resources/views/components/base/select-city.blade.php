<div x-data="{ open: false, selected: '{{ $selectedCity }}' }" x-on:click.away="open = false" class="relative">
    <div x-on:click="open = !open"
        class="cursor-pointer w-full text-base leading-normal form-input text-gray-800 border border-gray-200 rounded-md shadow-sm">
        <span x-text="selected || 'Selecione uma cidade...'" class="block truncate"></span>
        <!-- ... ícone de seta para baixo ... -->
    </div>
    <ul x-show="open" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="absolute mt-1 w-full bg-white border border-gray-200 rounded-md shadow-lg max-h-60 overflow-auto z-10">
        @foreach ($cities as $city)
            <li x-on:click="selected = '{{ $city }}'; open = false"
                class="cursor-pointer hover:bg-gray-200 px-4 py-2">{{ $city }}</li>
        @endforeach
    </ul>
</div>


<div x-data="{ open: false, selected: '{{ $selectedCity }}', cities: [] }" x-on:click.away="open = false" class="relative"
    x-on:state-selected.window="cities = $event.detail.state === '{{ $selectedState }}' ? {{ json_encode($cities[$selectedState]) }} : []">
    <!-- ... restante do código ... -->
    <ul x-show="open" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="absolute mt-1 w-full bg-white border border-gray-200 rounded-md shadow-lg max-h-60 overflow-auto z-10">
        <template x-for="city in cities" :key="city">
            <li x-on:click="selected = city; open = false" class="cursor-pointer hover:bg-gray-200 px-4 py-2">
                {{ city }}</li>
        </template>
    </ul>
</div>

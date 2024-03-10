<div x-data="{
    open: false,
    selected: '{{ $selectedText }}',
    value: '{{ $selectedValue }}',
    dropdownFitsBelow: true,
    checkDropdownPosition() {
        this.dropdownFitsBelow = window.innerHeight - this.$refs.dropdown.getBoundingClientRect().bottom > this.$refs.dropdown.offsetHeight;
    }
}" x-on:click.away="open = false" class="relative" x-ref="dropdown">
    <div x-on:click="open=!open; checkDropdownPosition()"
        class="flex items-center cursor-pointer w-full text-base leading-normal form-input text-gray-800 border border-gray-200 rounded-md shadow-sm hover">
        <span x-text="selected || 'Selecione...'" class="block truncate text-base"></span>
        <span class="absolute inset-y-0 right-0 flex items-center pr-2 pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0   0   20   20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10   3a1   1   0   01.707.293l3   3a1   1   0   01-1.414   1.414L10   5.414   7.707   7.707a1   1   0   01-1.414-1.414l3-3A1   1   0   0110   3zm-3.707   9.293a1   1   0   011.414   0L10   14.586l2.293-2.293a1   1   0   011.414   1.414l-3   3a1   1   0   01-1.414   0l-3-3a1   1   0   010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </span>
    </div>
    <input type="hidden" class="hidden" name="{{ $name }}" value="">
    <ul x-data="{{ $handle }}" xxx-data="handleSelect" x-show="open"
        x-transition:leave="transition ease-in duration-50" x-transition:leave-start="opacity-50" x-transition:leave-end
        :style="{
            'top': open ? (dropdownFitsBelow ? '100%' : 'auto') : 'auto',
            'bottom': open ? (dropdownFitsBelow ? 'auto' : 'calc(100% + .5rem)') : 'auto'
        }"
        x-cloak
        class="absolute mt-0 w-full bg-white dark:bg-[#343331] dark:text-gray-200 border dark:border-[#6a6a6a] rounded-sm shadow-xl max-h-60 overflow-auto z-10">
        {!! $mounted !!}
    </ul>
</div>

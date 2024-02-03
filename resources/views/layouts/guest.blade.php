<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

{{-- <head> --}}
<livewire:main.header />
{{-- </head> --}}

<body>
    <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
        @yield('main-content')
    </div>
</body>

</html>

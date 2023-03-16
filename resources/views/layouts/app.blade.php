<html>
    <head>
        <title>{{ config('app.name') }} | @yield('title', 'Homepage')</title>
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body>
        <div class="container py-24 max-w-2xl mx-auto">
            @yield('content')
        </div>
        @vite('resources/js/app.js')
        @livewireScripts
        @livewire('livewire-ui-modal')
        @stack('scripts')
    </body>
</html>

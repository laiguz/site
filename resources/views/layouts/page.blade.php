<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @livewire('site.layout.seo')
    <title>{{ config('app.name', 'Laravel') }}</title>
    <x-favicons></x-favicons>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @livewire('site.layout.navigation-menu')
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        @livewire('site.layout.footer')
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>

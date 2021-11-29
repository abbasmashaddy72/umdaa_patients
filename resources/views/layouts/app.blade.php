<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles
    @powerGridStyles
    @stack('styles')

    <style>
        .hover\:bg-red-700:hover {
            background-color: #c53030;
        }

        .bg-red-500 {
            background-color: #f56565;
        }

        .hover\:bg-green-700:hover {
            background-color: #047857;
        }

        .bg-green-500 {
            background-color: #10B981;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

    </style>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <div class="max-w-full py-4 mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                @include('components.message')
            </div>
        </div>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <footer class="relative pt-1 bg-white border-b-2 border-blue-700 footer">
        <div class="container max-w-full">
            <div class="flex flex-col items-center border-t-2 border-gray-300">
                <div class="py-6 text-center sm:w-2/3">
                    <p class="mb-2 text-sm font-bold text-grey-800">
                        © {{ now()->year }} by UMDAA Health Care
                    </p>
                </div>
            </div>
        </div>
    </footer>

    @livewireScripts
    @powerGridScripts
    @livewire('livewire-ui-modal')
    @stack('scripts')
</body>

</html>

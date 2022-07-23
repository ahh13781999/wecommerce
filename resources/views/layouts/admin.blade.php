<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>پنل ادمین</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    @livewireStyles
</head>

<body class="font-secondary">
    <div x-data="app()" @resize.window="window.innerWidth > 1024 ? asideOpen=true : asideOpen=false "
        class="h-full w-full bg-gray-50" x-cloak>

        {{-- Header --}}
           <x-admin-header>
           </x-admin-header>
        {{-- Header --}}

        {{-- Main --}}
        <div class="flex flex-row h-full w-full overflow-x-auto">

            {{-- Sidebar --}}
                   <x-admin-sidebar>
                   </x-admin-sidebar>
            {{-- Sidebar --}}

            <div class="xl:basis-5/6 lg:basis-4/5 basis-full h-full">

                {{-- MainContent --}}
                {{ $slot }}
                {{-- MainContent --}}

                {{-- Footer --}}
                <footer class="bg-white">

                </footer>
                {{-- Footer --}}

            </div>


        </div>
        {{-- Main --}}

    </div>
    <script>
        function app() {
            return {
                adminDropdown: false,
                asideOpen: true,
            }
        }
    </script>

    @livewireScripts
</body>

</html>

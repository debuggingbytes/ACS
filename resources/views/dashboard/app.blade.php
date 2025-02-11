<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ACS Admin Dashboard</title>
    {{-- Tailwind CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/c5608c8cee.js" crossorigin="anonymous"></script>
    @livewireStyles

</head>

<body class="bg-slate-200">
    <header>
        <nav
            class="bg-gradient-to-b from-slate-900 to-gray-700 px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
            <div class="flex flex-wrap justify-between items-center mx-auto">
                <a href="https://albertacraneservice.com/" wire:navigate class="flex items-center">
                    <img src="{{ asset('img/acs-logo-new.png') }}" class="mr-3 h-6 sm:h-16"
                        alt="Used Cranes | Alberta Crane Service">
                </a>
                <x-admin-nav />
            </div>
        </nav>
    </header>
    <!-- Main content area -->
    <main class="block min-h-screen">
        <div class="w-full px-1  lg:h-screen lg:px-2 lg:py-4">
            <div
                class="mt-20 md:mt-0 flex flex-col md:flex-row md:justify-between mb-5 bg-slate-100 rounded-md shadow-md p-2">
                <h2 class="text-xl uppercase font-bold">Admin Dashboard</h2>
                <span class="text-xl font-bold">
                    Welcome! {{ucwords(Auth::user()->name)}}
                </span>
            </div>
            <div class='flex gap-2 pb-10 w-full'>
                <x-dashboard.sidebar />
                <div class="w-full block bg-slate-100 shadow-md rounded-md lg:h-fit xl:w-3/4">
                    {{ $slot }}
                </div>
            </div>
            <div class="flex justify-between mb-5 bg-slate-100 rounded-md shadow-md p-2">
                Some random information here?
            </div>
        </div>
        </div>
    </main>
    <div class="block p-2 bg-slate-200">&nbsp;</div>
    <!-- end main content -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <wireui:scripts />

    @livewireScripts
    @yield('scripts')
</body>

</html>
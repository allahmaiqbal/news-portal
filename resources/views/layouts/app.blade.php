<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('/') }}">

    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    {{ module_vite_react_refresh() }}
    {{ module_vite_assets_unique_hot_path(['resources/js/app.js']) }}
    <!-- Custom CSS -->
    @stack('styles')
</head>

<body>

    {{-- <div id="reactRoot"></div>

    <div id="vueRoot">
        <demo-component />
    </div> --}}

    @include('layouts.navigation')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-2">
                <x-alert-handler />
            </div>
            <div class="col-12">
                <!-- Page Content -->
                {{ $slot }}
            </div>
            <div class="col-12 mt-5">
                @include('layouts.copyright')
            </div>
        </div>
    </div>

    <!-- Custom Scripts -->
    @stack('scripts')
    @yield('scripts')
</body>

</html>

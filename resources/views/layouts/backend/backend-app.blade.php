<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('/') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">


    <title>@yield('title') | {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    {{-- <link rel="shortcut icon"
        href="{{ module_asset('resources/statics/backend/resources/images/logos/icon-logo.svg') }}" type="image/x-icon"> --}}

    {{ module_vite_react_refresh() }}
    {{ module_vite_assets_unique_hot_path([
        'resources/scss/backend/master.scss',
        'resources/statics/backend/js/backend.js',
    ]) }}

    {{-- {{ module_asset("resources/js/app.js") }} --}}
    <!-- Custom CSS -->
    @stack('styles')
</head>

<body>

    @include('layouts.backend.partial.sidebar')
    <div class="mainbar">
        @include('layouts.backend.partial.header')
        <div class="container">
            <x-alert-handler />
            {{ $slot }}
        </div>

        <div class="col-12 mt-5">
            @include('layouts.copyright')
        </div>
    </div>

    <!-- Custom Scripts -->
    @stack('scripts')
    <script>
        function asideExpand() {
            document.querySelector(".page-aside").classList.toggle("hide")
            document.querySelector(".mainbar").classList.toggle("expand")
            document.querySelector(".page-aside-layer").classList.toggle("show")
        }

        document.querySelector(".page-aside-layer").addEventListener("click", function() {
            document.querySelector(".page-aside-layer").classList.remove("show")
            document.querySelector(".page-aside").classList.remove("hide")
            document.querySelector(".mainbar").classList.remove("expand")
        })
    </script>
</body>

</html>

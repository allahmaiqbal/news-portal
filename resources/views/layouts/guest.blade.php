<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    {{ module_vite_react_refresh() }}
    {{ module_vite_assets_unique_hot_path(['resources/js/app.js']) }}
    <!-- Custom CSS -->
    @stack('styles')
</head>

<body>
<div class="container min-vh-100 d-flex flex-column justify-content-center">
    <div class="row">
        <div class="col-12">
            {{ $slot }}
        </div>
        <div class="col-12 mt-5">
            <p class="fs-6 text-center text-secondary">
                @include('layouts.copyright')
            </p>
        </div>
    </div>
</div>
<!-- Custom Scripts -->
@stack('scripts')
</body>

</html>

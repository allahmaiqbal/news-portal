<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="base-url" content="{{ url('/') }}">
        <title>@yield('title')</title>

       {{ module_vite_react_refresh('build-setting') }}
       {{-- Laravel Vite - CSS File --}}
       {{ module_vite_assets_unique_hot_path(['Resources/assets/sass/app.scss'], 'build-setting') }}
       {{-- Laravel Vite - JS File --}}
       {{ module_vite_assets_unique_hot_path(['Resources/assets/js/app.js'], 'build-setting') }}
    </head>
    <body>
        <div id="vueRoot">
            <demo-component/>
        </div>
        <div id="reactRoot"></div>
        @section('content')
        @show
    </body>
</html>

----------------Use one of top or bottom----------------

@push('styles')
    {{-- React HRM --}}
    {{--{{ module_vite_react_refresh('build-setting') }}--}}
    {{-- Laravel Vite - CSS File --}}
    {{--{{ module_vite_assets_unique_hot_path(['Resources/assets/sass/app.scss'], 'build-setting') }}--}}
    {{-- Laravel Vite - JS File --}}
    {{--{{ module_vite_assets_unique_hot_path(['Resources/assets/js/app.js'], 'build-setting') }}--}}
@endpush

<x-app-layout>
    @section('content')
    @show
</x-app-layout>

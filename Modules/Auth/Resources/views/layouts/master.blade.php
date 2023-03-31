@push('styles')
    {{--{{ module_vite_react_refresh('build-auth') }}--}}
    {{-- Laravel Vite - CSS File --}}
    {{-- {{ module_vite_assets_unique_hot_path(['Resources/assets/sass/app.scss'], 'build-auth') }} --}}
    {{-- Laravel Vite - JS File --}}
    {{-- {{ module_vite_assets_unique_hot_path(['Resources/assets/js/app.js'], 'build-auth') }} --}}
@endpush

<x-guest-layout>
    @yield('content')
</x-guest-layout>

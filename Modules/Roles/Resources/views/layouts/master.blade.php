@push('styles')
    {{-- {{ module_vite_react_refresh('build-roles') }} --}}
    {{-- Laravel Vite - CSS File --}}
    {{-- {{ module_vite_assets_unique_hot_path(['Resources/assets/sass/app.scss'], 'build-roles') }} --}}
    {{-- Laravel Vite - JS File --}}
    {{-- {{ module_vite_assets_unique_hot_path(['Resources/assets/js/app.js'], 'build-roles') }} --}}
@endpush

<x-app-layout>
    @section('content')
    @show
</x-app-layout>

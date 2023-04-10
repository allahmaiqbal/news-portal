@push('styles')
    {{-- {{ module_vite_react_refresh('build-passwordchange') }} --}}
    {{-- Laravel Vite - CSS File --}}
    {{-- {{ module_vite_assets_unique_hot_path(['Resources/assets/sass/app.scss'], 'build-passwordchange') }} --}}
    {{-- Laravel Vite - JS File --}}
    {{-- {{ module_vite_assets_unique_hot_path(['Resources/assets/js/app.js'], 'build-passwordchange') }} --}}
@endpush

{{-- <x-app-layout>
    @section('content')
    @show
</x-app-layout> --}}
<x-backend.backend-layout>
    @section('content')
    @show
</x-backend.backend-layout>

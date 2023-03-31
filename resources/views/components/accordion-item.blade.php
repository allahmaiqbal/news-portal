@props([
    'name' => '',
    'data' => '',
    'indexRoute' => '',
    'createRoute' => '',
    'exact' => true,
    'icon' => '',
])
@php
$currentRouteName = Route::currentRouteName();
[$currentRoute, $routeName] = explode('.', $currentRouteName);

// print_r($currentRouteName);

@endphp

<li class="accordion-item">
    <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#{{ $data }}"
        aria-expanded="false" aria-controls="{{ $data }}">
        <i class="bi {{ $icon }}"></i>
        <span>{{ $name }}</span>
    </a>

    <ul id="{{ $data }}"
        class="accordion-collapse collapse {{ $currentRouteName == $indexRoute || $currentRouteName == $createRoute  ? '' : 'collapsed' }}"
        aria-labelledby="heading{{ $data }}" data-bs-parent="#asideAccordion">
        <li>
            <a href="{{ $indexRoute  }}"
                class="nav-link {{ $currentRouteName == $indexRoute || $currentRouteName == $createRoute  ? 'active' : '' }}">
                All Records
            </a>
        </li>
        <li>
            <a href="{{ $createRoute }}" class="nav-link {{ $currentRouteName == $createRoute ? 'active' : '' }}">
                New Entry
            </a>
        </li>
    </ul>
</li>

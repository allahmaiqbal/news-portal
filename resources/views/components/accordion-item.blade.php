@props([
    'name' => '',
    'data' => '',
    'indexRoute' => '',
    'editRoute' => 'reporters.edit',
    'showRoute' => 'reporters.show',
    'createRoute' => '',
    'exact' => true,
    'icon' => '',
])

<li class="accordion-item">
    <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#{{ $data }}"
        aria-expanded="false" aria-controls="{{ $data }}">
        <i class="bi {{ $icon }}"></i>
        <span>{{ $name }}</span>
    </a>

    <ul id="{{ $data }}"
        class="accordion-collapse {{ url()->current() == $indexRoute || url()->current() == $editRoute || url()->current() == $showRoute || url()->current() == $createRoute ? '' : 'collapse' }}"
        aria-labelledby="heading{{ $data }}" data-bs-parent="#asideAccordion">
        <li>
            <a href="{{ $indexRoute }}" class="nav-link {{ request()->routeIs($indexRoute) ? 'active' : '' }}">
                All Records
            </a>
        </li>
    </ul>
</li>


{{-- <li class="accordion-item">
    <a href="#" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#{{ $data }}"
        aria-expanded="false" aria-controls="{{ $data }}">
        <i class="bi {{ $icon }}"></i>
        <span>{{ $name }}</span>
    </a>

    <ul id="{{ $data }}"
        class="accordion-collapse {{ url()->current() == $indexRoute || url()->current() == $createRoute ? '' : 'collapse' }}"
        aria-labelledby="heading{{ $data }}" data-bs-parent="#asideAccordion">
        <li>
            <a href="{{ $indexRoute }}" class="nav-link {{ url()->current() == $indexRoute ? 'active' : '' }}">
                All Records
            </a>
        </li>
        <li>
            <a href="{{ $createRoute }}" class="nav-link {{ url()->current() == $createRoute ? 'active' : '' }}">
                New Entry
            </a>
        </li>
    </ul>
</li> --}}


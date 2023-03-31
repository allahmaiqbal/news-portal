<!-- sidebar -->
<aside class="page-aside">
    <!-- accordion menu -->
    <!-- aside brand -->
    <div class="aside-brand">
        <a href="dashboard.html">
            {{-- <img src="{{ module_asset('resources/statics/backend/resources/images/logos/logo_with_name.svg') }}"
                alt=""> --}}
        </a>
    </div>
    <!-- End aside-brand -->

    <ul class="accordion" id="asideAccordion">
        <!-- Basic -->
        <li class="ps-3 py-1 fw-bold">Basic</li>

        <li class="accordion-item">
            <a href="{{ route('admin-dashboard.index') }}" class="single-nav-link">
                <i class="bi bi-house"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <x-accordion-item icon="bi-person" name="Reporter" data="reporterData" indexRoute="{{ route('reporters.index') }}"
            createRoute="{{ route('reporters.create') }}" />

        <x-accordion-item icon="bi-newspaper" name="Pages" data="pagesData" indexRoute="{{ route('pages.index') }}"
                createRoute="{{ route('pages.create') }}" />

        <x-accordion-item icon="bi-list" name="Category" data="categoryData" indexRoute="{{ route('category.index') }}"
            createRoute="{{ route('category.create') }}" />

        <x-accordion-item icon="bi-list" name="subCategory" data="subCategoryData" indexRoute="{{ route('sub-category.index') }}"
            createRoute="{{ route('sub-category.create') }}" />

        <x-accordion-item icon="bi-list" name="Tag" data="tagData" indexRoute="{{ route('tag.index') }}"
            createRoute="{{ route('tag.create') }}" />
        <x-accordion-item icon="bi-newspaper" name="Posts" data="postsData" indexRoute="{{ route('posts.index') }}"
            createRoute="{{ route('posts.create') }}" />

    </ul>
</aside>
<!-- End sidebar -->

<!-- page-aside-layer -->
<div class="page-aside-layer"></div>

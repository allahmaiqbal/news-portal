@php
    $currentRouteName = Route::currentRouteName();
    [$currentRoute, $routeName] = explode('.', $currentRouteName);
    // print_r($currentRouteName);
@endphp

<!-- sidebar -->
<aside class="page-aside">
    <!-- accordion menu -->
    <!-- aside brand -->
    <div class="aside-brand">
        <a href="dashboard.html">
            <img src="{{asset('images/logo.png') }}" height="50px" alt="">
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



        <li class="accordion-item">
            <a href="#" class="accordion-button {{ $currentRoute == 'category' ? '' : 'collapsed' }}"
                data-bs-toggle="collapse" data-bs-target="#category"
                aria-expanded="{{ $currentRoute == 'category' ? 'true' : 'false' }}"
                aria-controls="category">
                <i class="bi bi-menu-button-wide"></i>
                <span class="me-auto">Menubar</span>
            </a>

            <ul id="category"
                class="accordion-collapse collapse {{ $currentRoute == 'category' || $currentRoute == 'pages' ? 'show' : '' }}"
                data-bs-parent="#page">
                <li>
                    <a href="{{ route('pages.index') }}"
                        class="nav-link {{ $currentRouteName == 'pages.index' || $currentRouteName == 'pages.create' || $currentRouteName == 'pages.edit' ? 'active' : '' }}"
                        class="nav-link"><span>Page</span></a>
                </li>
                <li>
                    <a href="{{ route('category.index') }}"
                        class="nav-link {{ $currentRouteName == 'category.index' || $currentRouteName == 'category.create' || $currentRouteName == 'category.edit' ? 'active' : '' }}"
                        class="nav-link"><span>Category</span></a>
                </li>
            </ul>
        </li>

        <li class="accordion-item">
            <a href="#" class="accordion-button {{ $currentRoute == 'tag' ? '' : 'collapsed' }}"
                data-bs-toggle="collapse" data-bs-target="#tag"
                aria-expanded="{{ $currentRoute == 'tag' ? 'true' : 'false' }}"
                aria-controls="tag">
                <i class="bi bi-collection"></i>
                <span class="me-auto">Tag</span>
            </a>

            <ul id="tag"
                class="accordion-collapse collapse {{ $currentRoute == 'tag' ? 'show' : '' }}"
                data-bs-parent="#page">
                <li>
                    <a href="{{ route('tag.index') }}"
                        class="nav-link {{ $currentRouteName == 'tag.index'||$currentRouteName == 'tag.create'  || $currentRouteName == 'tag.edit'||$currentRouteName == 'tag.show' ? 'active' : '' }}"
                        class="nav-link"><span>All tags</span>
                    </a>

                </li>

            </ul>
        </li>

        <li class="accordion-item">
            <a href="#" class="accordion-button {{ $currentRoute == 'posts' ? '' : 'collapsed' }}"
                data-bs-toggle="collapse" data-bs-target="#posts"
                aria-expanded="{{ $currentRoute == 'posts' ? 'true' : 'false' }}"
                aria-controls="posts">
                <i class="bi bi-credit-card-2-front"></i>
                <span class="me-auto">Posts</span>
            </a>

            <ul id="posts"
                class="accordion-collapse collapse {{ $currentRoute == 'posts' ? 'show' : '' }}"
                data-bs-parent="#page">
                <li>
                    <a href="{{ route('posts.index') }}"
                        class="nav-link {{ $currentRouteName == 'posts.index' || $currentRouteName == 'posts.edit'||$currentRouteName == 'posts.show' ? 'active' : '' }}"
                        class="nav-link"><span>All posts</span>
                    </a>

                    <a href="{{ route('posts.create') }}"
                        class="nav-link {{ $currentRouteName == 'posts.create'  ? 'active' : '' }}"
                        class="nav-link"><span>Create posts</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="accordion-item">
            <a href="#" class="accordion-button {{ $currentRoute == 'reporters' ? '' : 'collapsed' }}"
                data-bs-toggle="collapse" data-bs-target="#reporters"
                aria-expanded="{{ $currentRoute == 'reporters' ? 'true' : 'false' }}"
                aria-controls="reporters">
                <i class="bi bi-person"></i>
                <span class="me-auto">Reporter</span>
            </a>

            <ul id="reporters"
                class="accordion-collapse collapse {{ $currentRoute == 'reporters' ? 'show' : '' }}"
                data-bs-parent="#page">
                <li>
                    <a href="{{ route('reporters.index') }}"
                        class="nav-link {{ $currentRouteName == 'reporters.index' || $currentRouteName == 'reporters.edit'||$currentRouteName == 'reporters.show' ? 'active' : '' }}"
                        class="nav-link"><span>All posts</span>
                    </a>

                </li>

            </ul>
        </li>

        <li class="accordion-item">
            <a href="#" class="accordion-button {{ $currentRoute == 'add-advertise' ? '' : 'collapsed' }}"
                data-bs-toggle="collapse" data-bs-target="#advertisement"
                aria-expanded="{{ $currentRoute == 'add-advertise' ? 'true' : 'false' }}"
                aria-controls="advertisement">
                <i class="bi bi-badge-ad"></i>
                <span class="me-auto">Advertisement</span>
            </a>

            <ul id="advertisement"
                class="accordion-collapse collapse {{ $currentRoute == 'add-advertise' ? 'show' : '' }}"
                data-bs-parent="#page">
                <li>
                    <a href="{{ route('add-advertise.page') }}"
                        class="nav-link {{ $currentRouteName == 'add-advertise.page'  ? 'active' : '' }}"
                        class="nav-link"><span>All advertisment</span>
                    </a>

                </li>

            </ul>
        </li>

        <li class="accordion-item">
            <a href="#" class="accordion-button {{ $currentRoute == 'basic-info' ? '' : 'collapsed' }}"
                data-bs-toggle="collapse" data-bs-target="#basic-info"
                aria-expanded="{{ $currentRoute == 'basic-info' ? 'true' : 'false' }}"
                aria-controls="basic-info">
                <i class="bi bi-file-earmark-text"></i>
                <span class="me-auto">Basic information</span>
            </a>

            <ul id="basic-info"
                class="accordion-collapse collapse {{ $currentRoute == 'basic-info' ? 'show' : '' }}"
                data-bs-parent="#page">
                <li>
                    <a href="{{ route('basic-info.page') }}"
                        class="nav-link {{ $currentRouteName == 'basic-info.page'  ? 'active' : '' }}"
                        class="nav-link"><span>Contact</span>
                    </a>

                </li>

            </ul>
        </li>

        <li class="accordion-item">
            <a href="#" class="accordion-button {{ $currentRoute == 'video' ? '' : 'collapsed' }}"
                data-bs-toggle="collapse" data-bs-target="#video"
                aria-expanded="{{ $currentRoute == 'video' ? 'true' : 'false' }}"
                aria-controls="video">
                <i class="bi bi-file-earmark-text"></i>
                <span class="me-auto">Vidos section</span>
            </a>

            <ul id="video"
                class="accordion-collapse collapse {{ $currentRoute == 'video' ? 'show' : '' }}"
                data-bs-parent="#video">
                <li>
                    <a href="{{ route('video.create') }}"
                        class="nav-link {{ $currentRouteName == 'video.index'|| $currentRouteName == 'video.create' || $currentRouteName == 'video.edit'  ? 'active' : '' }}"
                        class="nav-link"><span>video</span>
                    </a>

                </li>

            </ul>
        </li>

        <div class="d-grid gap-2" style="margin-top: 20px">
            <a href="{{ route('dashboard') }}" target="_blank" class="btn custom btn-outline-warning btn-sm">Visit website</a>
        </div>


    </ul>

        {{-- <x-accordion-item icon="bi-person" name="Reporter" data="reporterData" indexRoute="{{ route('reporters.index') }}"
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
            createRoute="{{ route('posts.create') }}" /> --}}

    </ul>
</aside>
<!-- End sidebar -->

<!-- page-aside-layer -->
<div class="page-aside-layer"></div>

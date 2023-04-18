<section class="main-nav bg-white sticky-top">
    <nav class="navbar navbar-expand-lg first-nav d-print-none">
        <div class="container">

            <a class="navbar-brand d-print-none" href="{{ route('dashboard') }}" >
                <img src="{{ asset('images/logo.png') }}" class="" alt="...">
            </a>

            <div class="input-group d-none d-lg-flex">
                <div class="input-group d-none d-lg-flex">
                    <form action="{{ route('search-news.pages') }}" class="input-group" method="GET" required>
                        <input type="text" class="form-control search-input rounded-0 px-3 py-2" name="q" type="search" value="{{ request('q') }}" placeholder="নিউজ খুঁজুন" aria-label="Search" onchange="enableButton()" id="searchInput">
                        <button class="btn search-btn bg-black text-white rounded-0 px-3" type="submit" required disabled id="searchBtn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
             </a>
            </div>

            <p class="date ms-auto">
                @php
                $banglaDateTime = \App\Helpers\formatDate(now(), 'EEEE ,dd MMMM yyyy ,N ');
            @endphp
           {{ $banglaDateTime }}

    @php
    // Calculate the current Bangla year
    $currentYear = date('Y');
    $banglaYear = $currentYear - 593;
    if ($currentYear < 2025) {
        $banglaYear -= 1;
    }
    // Calculate the current Bangla month
    $banglaMonths = [
        'বৈশাখ', 'জ্যৈষ্ঠ', 'আষাঢ়', 'শ্রাবণ', 'ভাদ্র', 'আশ্বিন', 'কার্তিক', 'অগ্রহায়ণ', 'পৌষ', 'মাঘ', 'ফাল্গুন', 'চৈত্র'
    ];
    $currentMonth = date('n');
    $banglaMonth = $banglaMonths[$currentMonth - 1];

    // Convert the Bangla year and month to Bangla digits
    $banglaDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
    $banglaYearDigits = str_split($banglaYear);
    $banglaYearNumber = '';
    foreach ($banglaYearDigits as $digit) {
        $banglaYearNumber .= $banglaDigits[$digit];
    }
    @endphp

   {{ $banglaMonth }}, {{ $banglaYearNumber }}
                {{-- বুধবার, ১৫ ফেব্রুয়ারি ২০২৩, ফাল্গুন ১৪২৯ --}}
            </p>


            <button class="nav-toggler side-contact d-lg-none border-0 ms-auto">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="dropdown-md position-absolute pt-2 pb-5 d-lg-none ">

                <div class="logo d-flex justify-content-between align-items-center mb-3 px-3">
                    <a class="navbar-brand" href="#">
                        {{-- <img src="{{module_asset ("resources/statics/frontend/img/logo.png") }}" alt="Logo" width="67px"> --}}
                    </a>
                    <span class="text-center nav-close close-btn">
                        <i class="fa-solid fa-xmark"></i>
                    </span>
                </div>

                <div class="button ms-auto px-3">
                    <a href="{{ route('live-tv.pages') }}" class="enter">লাইভ টিভি</a>
                    <a href="{{ route('dashboard') }}" class="enter">সকল খবর</a>
                </div>

                <div class="input-group px-3">
                    <input type="text" class="form-control search-input rounded-0 px-3 py-2" type="search" placeholder="নিউজ খুঁজুন" aria-label="Search">
                    <button class="btn search-btn bg-black text-white rounded-0 px-3" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>

                <ul class="navbar-nav">

                    @foreach ($pages as $page )
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('category.pages',$page->slug) }}">
                             {{$page->name}}
                            </a>
                        </li>
                    @endforeach
                    {{-- <li class="nav-item">
                        <a class="nav-link active" href="./categories.html">
                            বাংলাদেশ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            রাজনীতি
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            আন্তর্জাতিক
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            খেলা
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            বিনোদন
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            স্বাস্থ্য
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            বাণিজ্য
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            রংধনু স্পেশাল
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            শিক্ষা
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            মুক্তকথা
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            ধর্ম
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            চাকরি
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            বিজ্ঞান ও প্রযুক্তি
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            সময় প্রবাস
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            সাহিত্য ও সংস্কৃতি
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            লাইফস্টাইল
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            অন্যান্য
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg second-nav d-none d-lg-block">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav main">

                 @foreach ($pages->take(7) as $page)
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('category.pages',$page->slug) }}">
                            {{ $page->name }}
                        </a>
                    </li>
                @endforeach

                <li class="nav-item dropdown">
                    <span class="nav-link dropdown-toggle">আরও</span>
                    <ul class="dropdownmenu">
                        @foreach ($pages->slice(7) as $page)
                            <li>
                                <a class="dropdown-item" href="{{ route('category.pages',$page->slug) }}">
                                  {{ $page->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>


                    {{-- <li class="nav-item">
                        <a class="nav-link active" href="./categories.html">
                            বাংলাদেশ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./categories.html">
                            রাজনীতি
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./categories.html">
                            আন্তর্জাতিক
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            খেলা
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            বিনোদন
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            স্বাস্থ্য
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            বাণিজ্য
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <span class="nav-link dropdown-toggle">আরও</span>
                        <ul class="dropdownmenu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    রংধনু স্পেশাল
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    শিক্ষা
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    মুক্তকথা
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    ধর্ম
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    চাকরি
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    বিজ্ঞান ও প্রযুক্তি
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    রংধনু  প্রবাস
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    সাহিত্য ও সংস্কৃতি
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    লাইফস্টাইল
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    অন্যান্য
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
                <div class="button ms-auto">
                    <a href="{{ route('live-tv.pages') }}" class="enter" >লাইভ টিভি</a>
                    <a href="{{ route('dashboard') }}" class="enter">সকল খবর</a>
                </div>
            </div>
        </div>
    </nav>
</section>
@push('scripts')
<script>
    function enableButton() {
        const input = document.querySelector('#searchInput');
        const button = document.querySelector('#searchBtn');

        if (input.value.trim() !== '') {
            button.disabled = false;
        } else {
            button.disabled = true;
        }
    }
</script>

@endpush

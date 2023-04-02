@extends('dashboard::layouts.master')

@section('title', 'Dashboard')

@section('content')

    <!-- hero-area start -->
    <section class="hero-area">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                {{-- <img src="{{module_asset ("resources/statics/frontend/img/news-img/news_1.jpg") }}" class="" alt="..."> --}}

                <div class="overlay position-absolute d-flex align-items-center">
                    <div class="container">
                        <a href="./categories.html" class="btn category text-danger mb-3"> খেলা</a>
                        <a href="./single-news.html" class="header text-white d-block">
                            <h1 class="title">
                                ইংল্যান্ডের বিপক্ষে ব্যাটিংয়ে বাংলাদেশ
                            </h1>
                            <p class="desc">
                                ওয়ানডে ও টি-টোয়েন্টি সংস্করণে ইংল্যান্ড বিশ্বচ্যাম্পিয়ন হওয়ার পর প্রথমবারের মতো তাদের বিপক্ষে সিরিজ খেলছে বাংলাদেশ।
                                ওয়ানডে ও টি-টোয়েন্টি সিরিজের আগে নানা কারণে বিতর্কিত টাইগাররা। এমন অবস্থায় মিরপুরের হোম অব ক্রিকেটে ইংলিশ
                                বধের স্বপ্ন নিয়ে নামছে তামিম ইকবালের দল।
                            </p>
                        </a>
                    </div>
                </div>


              </div>
              <div class="carousel-item">
                {{-- <img src="{{module_asset ("resources/statics/frontend/img/news-img/news_10.jpg") }}" class="" alt="..."> --}}

                <div class="overlay position-absolute d-flex align-items-center">
                    <div class="container">
                        <a href="./categories.html" class="btn category text-danger mb-3"> বাংলাদেশ</a>
                        <a href="./single-news.html" class="header text-white d-block">
                            <h1 class="title">
                                রফতানির নতুন বাজার খুঁজতে কূটনীতিকদের নির্দেশ প্রধানমন্ত্রীর
                            </h1>
                            <p class="desc">
                                ওয়ানডে ও টি-টোয়েন্টি সংস্করণে ইংল্যান্ড বিশ্বচ্যাম্পিয়ন হওয়ার পর প্রথমবারের মতো তাদের বিপক্ষে সিরিজ খেলছে বাংলাদেশ।
                                ওয়ানডে ও টি-টোয়েন্টি সিরিজের আগে নানা কারণে বিতর্কিত টাইগাররা। এমন অবস্থায় মিরপুরের হোম অব ক্রিকেটে ইংলিশ
                                বধের স্বপ্ন নিয়ে নামছে তামিম ইকবালের দল।
                            </p>
                        </a>
                    </div>
                </div>

              </div>
              <div class="carousel-item">
                {{-- <img src="{{module_asset ("resources/statics/frontend/img/news-img/news_12.jpg") }}" class="" alt="..."> --}}

                <div class="overlay position-absolute d-flex align-items-center">
                    <div class="container">
                        <a href="./categories.html" class="btn category text-danger mb-3"> খেলা</a>
                        <a href="./single-news.html" class="header text-white d-block">
                            <h1 class="title">
                                বার্সা খেলোয়াড়দের ওপর ‘জাল নোট’ ছুঁড়ে বিলবাও সমর্থকদের প্রতিবাদ
                            </h1>
                            <p class="desc">
                                ওয়ানডে ও টি-টোয়েন্টি সংস্করণে ইংল্যান্ড বিশ্বচ্যাম্পিয়ন হওয়ার পর প্রথমবারের মতো তাদের বিপক্ষে সিরিজ খেলছে বাংলাদেশ।
                                ওয়ানডে ও টি-টোয়েন্টি সিরিজের আগে নানা কারণে বিতর্কিত টাইগাররা। এমন অবস্থায় মিরপুরের হোম অব ক্রিকেটে ইংলিশ
                                বধের স্বপ্ন নিয়ে নামছে তামিম ইকবালের দল।
                            </p>
                        </a>
                    </div>
                </div>

              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <!-- hero-area end -->

    <!-- latest-news start -->
    <section class="latest-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4">
                    <a href="#" class="title d-block fs-5 fw-normal pb-2 mb-4">
                        সর্বশেষ খবর
                    </a>

                    <div class="row g-2 g-lg-3">
                       @php
                           $post_slug = ''
                       @endphp
                        @foreach ($posts->take(9) as $post )

                        @php
                                $post_slug = $post->slug;
                        @endphp
                            <div class="col-sm-6 col-md-4">
                                <div class="card h-100 border-0 shadow rounded-0 ps-2 pt-2">
                                    <figure class="d-flex">
                                        <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class="me-3">
                                        <p>
                                            <span class="category">
                                                {{ $post->category->name }}
                                            </span>

                                            <span class="time text-muted d-block mb-2">
                                            {{ $post->published_at->diffForHumans()}}
                                            </span>
                                        </p>
                                    </figure>

                                    <a href="{{ route('news.pages',$post->slug) }}"  class="news-details">
                                        <h4 class="header fw-normal">
                                            {{ $post->title }}
                                        </h4>
                                        <p class="desc text-muted fw-medium">
                                            {!!  Illuminate\Support\Str::limit($post->content, 100, ' ......')  !!}
                                        </p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="button">
                        <a href="{{ route('breaking-news.pages') }}" class="btn btn-outline-danger rounded-0 w-100 mt-3 shadow">
                            আরও সর্বশেষ খবর
                        </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <a href="#" class="title d-block fs-5 fw-normal pb-2 mb-4">
                        সর্বাধিক পঠিত
                    </a>

                    @foreach ($viewPosts->take(7) as $viewPost )
                    <a href="{{ route('news.pages',$viewPost->slug) }}" class="d-block mb-3">
                        <figure class="d-flex shadow overflow-hidden">
                            <div class="fig-img">
                                <img src="{{ asset( $viewPost->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class="me-2 overflow-hidden">
                            </div>
                            <div class="captions pt-2">
                                <p class="category d-block mb-1 fw-medium">
                                    {{ $viewPost->category->name }}
                                </p>
                                <p class="figure-caption">
                                    {{ $viewPost->title }}
                                </p>
                            </div>
                        </figure>
                    </a>

                    @endforeach

                    <div class="button">
                        <a href="{{ route('view-news.pages') }}" class="btn btn-outline-danger w-100 rounded-0 shadow-sm mt-3">
                            সর্বাধিক পঠিত
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest-news end -->

    <div class="ads my-3">
        <img src="https://placehold.co/768x100/png" alt="">
    </div>

    <!-- national-news-area start -->
    <section class="all-news">
        <div class="container">
            <a href="./national.html" class="title d-block fs-5 fw-normal pb-2 mb-4">
                বাংলাদেশ
            </a>

            <div class="row g-3">
                @foreach ($bangladesh_posts->take(1) as $post )
                    <div class="col-lg-6">
                        <a href="">

                            <div class="card main-news border-0 rounded-0">
                                <div class="card-img rounded-0">
                                    <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class="card-img-top rounded-0">
                                </div>
                                <div class="card-body">
                                    <p class="place text-danger">
                                       {{ $post->category->name }}
                                    </p>
                                    <h1 class="card-title fw-light mb-4">
                                        {{ $post->title }}
                                    </h1>
                                    <p class="card-text">
                                        {!!  Illuminate\Support\Str::limit($post->content, 100, ' ......')  !!}
                                    </p>
                                    </p>
                                    <p class="time text-muted mt-2">
                                        {{ $post->published_at->diffForHumans()}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
               @endforeach

                <div class="col-lg-6">
                    <div class="row g-3">

                    @foreach ($bangladesh_posts->take(4) as $post )
                       <div class="col-6">
                        <a href="#">
                            <div class="card news h-100 rounded-0 border-0">
                                <div class="card-img rounded-0">
                                    <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class="card-img-top rounded-0">
                                </div>
                                <div class="card-body">
                                    <p class="place text-danger">
                                         {{ $post->category->name }}
                                    </p>
                                    <h4 class="card-title fw-normal">
                                       {{ $post->title }}
                                    </h4>
                                    <p class="card-text">
                                        {!!  Illuminate\Support\Str::limit($post->content, 100, ' ......')  !!}
                                    </p>
                                    <p class="time text-muted mt-2">
                                        {{ $post->published_at->diffForHumans()}}
                                    </p>
                                </div>
                            </div>
                        </a>
                       </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- national-news-area end -->


    <!-- inter-national-news-area start -->
    <section class="all-news bg-white">
        <div class="container">

            <a href="#" class="title d-block fs-5 fw-normal pb-2 mb-4">
                আন্তর্জাতিক
            </a>

           <div class="row g-3">
                @foreach ($international_posts->take(1) as $post )
                    <div class="col-lg-6">
                        <a href="{{ route('news.pages',$post->slug) }}">

                            <div class="card main-news border-0 rounded-0">
                                <div class="card-img rounded-0">
                                    <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class="card-img-top rounded-0">
                                </div>
                                <div class="card-body">
                                    <p class="place text-danger">
                                       {{ $post->category->name }}
                                    </p>
                                    <h1 class="card-title fw-light mb-4">
                                        {{ $post->title }}
                                    </h1>
                                    <p class="card-text">
                                        {!!  Illuminate\Support\Str::limit($post->content, 100, ' ......')  !!}
                                    </p>
                                    </p>
                                    <p class="time text-muted mt-2">
                                        {{ $post->published_at->diffForHumans()}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
               @endforeach
                <div class="col-lg-6">
                    <div class="row g-3">
                    @foreach ($international_posts->take(4) as $post )
                       <div class="col-6">
                        <a href="{{ route('news.pages',$post->slug) }}">
                            <div class="card news h-100 rounded-0 border-0">
                                <div class="card-img rounded-0">
                                    <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class="card-img-top rounded-0">
                                </div>
                                <div class="card-body">
                                    <p class="place text-danger">
                                         {{ $post->category->name }}
                                    </p>
                                    <h4 class="card-title fw-normal">
                                       {{ $post->title }}
                                    </h4>
                                    <p class="card-text">
                                        {!!  Illuminate\Support\Str::limit($post->content, 100, ' ......')  !!}
                                    </p>
                                    <p class="time text-muted mt-2">
                                        {{ $post->published_at->diffForHumans()}}
                                    </p>
                                </div>
                            </div>
                        </a>
                       </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <!-- inter-national-news-area end -->

    <div class="ads my-3">
        <img src="https://placehold.co/768x100/png" alt="">
    </div>

    <!-- sports-news-area start -->
    <section class="all-news">
        <div class="container">

            <a href="#" class="title d-block fs-5 fw-normal pb-2 mb-4">
                খেলা
            </a>

            <div class="row g-3">
                @foreach($sports_posts->take(1) as $post )
                    <div class="col-lg-6">
                        <a href="{{ route('news.pages',$post->slug) }}">
                            <div class="card main-news border-0 rounded-0">
                                <div class="card-img rounded-0">
                                    <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class="card-img-top rounded-0">
                                </div>
                                <div class="card-body">
                                    <p class="place text-danger">
                                       {{ $post->category->name }}
                                    </p>
                                    <h1 class="card-title fw-light mb-4">
                                        {{ $post->title }}
                                    </h1>
                                    <p class="card-text">
                                        {!!  Illuminate\Support\Str::limit($post->content, 100, ' ......')  !!}
                                    </p>
                                    </p>
                                    <p class="time text-muted mt-2">
                                        {{ $post->published_at->diffForHumans()}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
               @endforeach

                <div class="col-lg-6">
                    <div class="row g-3">
                    @foreach ($sports_posts->take(4) as $post )
                       <div class="col-6">
                        <a href="{{ route('news.pages',$post->slug) }}">
                            <div class="card news h-100 rounded-0 border-0">
                                <div class="card-img rounded-0">
                                    <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class="card-img-top rounded-0">
                                </div>
                                <div class="card-body">
                                    <p class="place text-danger">
                                         {{ $post->category->name }}
                                    </p>
                                    <h4 class="card-title fw-normal">
                                       {{ $post->title }}
                                    </h4>
                                    <p class="card-text">
                                        {!!  Illuminate\Support\Str::limit($post->content, 100, ' ......')  !!}
                                    </p>
                                    <p class="time text-muted mt-2">
                                        {{ $post->published_at->diffForHumans()}}
                                    </p>
                                </div>
                            </div>
                        </a>
                       </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <!-- sports-news-area end -->

    <!-- video-section start -->
    <section class="videos ">
        <div class="container">

            <div class="row">
                <div class="col-lg-7 mb-3">
                    <a href="#" class="title d-block fs-5 fw-normal pb-2 mb-4">
                        ভিডিও
                    </a>
                    <div class="news-buletin">
                        <iframe class="buletin mb-4" src="https://www.youtube.com/embed/-R7MFU4eepw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                        <p class="category text-danger mb-2">
                            বুলেটিন
                        </p>

                        <h2 class="bulletin-title fw-normal">
                            শীর্ষ সংবাদ | দুপুর ১২টা | ০৫ মার্চ ২০২৩ | Rongdhonu TV | Latest Bangladeshi News
                        </h2>
                    </div>

                </div>
                <div class="col-lg-5">
                    <h6 class="title d-block fs-5 fw-normal pb-3 mb-4">
                        পরবর্তী ভিডিও
                    </h6>

                    <a href="#"  class="more-video d-block bg-white shadow">
                        <div class="row g-3">
                            <div class="col-lg-5 col-md-4 col-5 m-0">
                                <div class="news-img position-relative me-3">
                                    <div class="icon bg-danger position-absolute top-50 start-50 translate-middle rounded-circle text-center">
                                        <i class="fa-solid fa-play text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8 col-7">
                                <div class="news-text">
                                    <span class="category d-block text-danger mb-2">
                                        বুলেটিন
                                    </span>

                                    <p class="bulletin-title fw-normal">
                                        শীর্ষ সংবাদ | দুপুর ১২টা | ০৫ মার্চ ২০২৩ | Rongdhonu TV
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#"  class="more-video d-block bg-white shadow">
                        <div class="row g-3">
                            <div class="col-lg-5 col-md-4 col-5 m-0">
                                <div class="news-img position-relative me-3">
                                    <div class="icon bg-danger position-absolute top-50 start-50 translate-middle rounded-circle text-center">
                                        <i class="fa-solid fa-play text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8 col-7">
                                <div class="news-text">
                                    <span class="category d-block text-danger mb-2">
                                        বুলেটিন
                                    </span>

                                    <p class="bulletin-title fw-normal">
                                        শীর্ষ সংবাদ | দুপুর ১২টা | ০৫ মার্চ ২০২৩ | Rongdhonu TV
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#"  class="more-video d-block bg-white shadow">
                        <div class="row g-3">
                            <div class="col-lg-5 col-md-4 col-5 m-0">
                                <div class="news-img position-relative me-3">
                                    <div class="icon bg-danger position-absolute top-50 start-50 translate-middle rounded-circle text-center">
                                        <i class="fa-solid fa-play text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8 col-7">
                                <div class="news-text">
                                    <span class="category d-block text-danger mb-2">
                                        বুলেটিন
                                    </span>

                                    <p class="bulletin-title fw-normal">
                                        শীর্ষ সংবাদ | দুপুর ১২টা | ০৫ মার্চ ২০২৩ | Rongdhonu TV
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#"  class="more-video d-block bg-white shadow">
                        <div class="row g-3">
                            <div class="col-lg-5 col-md-4 col-5 m-0">
                                <div class="news-img position-relative me-3">
                                    <div class="icon bg-danger position-absolute top-50 start-50 translate-middle rounded-circle text-center">
                                        <i class="fa-solid fa-play text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8 col-7">
                                <div class="news-text">
                                    <span class="category d-block text-danger mb-2">
                                        বুলেটিন
                                    </span>

                                    <p class="bulletin-title fw-normal">
                                        শীর্ষ সংবাদ | দুপুর ১২টা | ০৫ মার্চ ২০২৩ | Rongdhonu TV
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#"  class="more-video d-block bg-white shadow">
                        <div class="row g-3">
                            <div class="col-lg-5 col-md-4 col-5 m-0">
                                <div class="news-img position-relative me-3">
                                    <div class="icon bg-danger position-absolute top-50 start-50 translate-middle rounded-circle text-center">
                                        <i class="fa-solid fa-play text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8 col-7">
                                <div class="news-text">
                                    <span class="category d-block text-danger mb-2">
                                        বুলেটিন
                                    </span>

                                    <p class="bulletin-title fw-normal">
                                        শীর্ষ সংবাদ | দুপুর ১২টা | ০৫ মার্চ ২০২৩ | Rongdhonu TV
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </section>
    <!-- video-section end -->

    <!-- intertainment-news-area start -->
    <section class="all-news">
        <div class="container">

            <a href="#" class="title d-block fs-5 fw-normal pb-2 mb-4">
                বিনোদন
            </a>

            <div class="row g-3">
                @foreach ($entertainment_posts->take(1) as $post )
                    <div class="col-lg-6">
                        <a href="{{ route('news.pages',$post->slug) }}">

                            <div class="card main-news border-0 rounded-0">
                                <div class="card-img rounded-0">
                                    <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class="card-img-top rounded-0">
                                </div>
                                <div class="card-body">
                                    <p class="place text-danger">
                                       {{ $post->category->name }}
                                    </p>
                                    <h1 class="card-title fw-light mb-4">
                                        {{ $post->title }}
                                    </h1>
                                    <p class="card-text">
                                        {!!  Illuminate\Support\Str::limit($post->content, 100, ' ......')  !!}
                                    </p>
                                    </p>
                                    <p class="time text-muted mt-2">
                                        {{ $post->published_at->diffForHumans()}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                <div class="col-lg-6">
                    <div class="row g-3">
                    @foreach ($entertainment_posts as $post )
                       <div class="col-6">
                        <a href="{{ route('news.pages',$post->slug) }}">
                            <div class="card news h-100 rounded-0 border-0">
                                <div class="card-img rounded-0">
                                    <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class="card-img-top rounded-0">
                                </div>
                                <div class="card-body">
                                    <p class="place text-danger">
                                         {{ $post->category->name }}
                                    </p>
                                    <h4 class="card-title fw-normal">
                                       {{ $post->title }}
                                    </h4>
                                    <p class="card-text">
                                        {!!  Illuminate\Support\Str::limit($post->content, 100, ' ......')  !!}
                                    </p>
                                    <p class="time text-muted mt-2">
                                        {{ $post->published_at->diffForHumans()}}
                                    </p>
                                </div>
                            </div>
                        </a>
                       </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>
    <!-- intertainment-news-area end -->

    <div class="ads my-3">
        <img src="https://placehold.co/768x100/png" alt="">
    </div>

    <!-- politics-news-area start -->
    <section class="all-news bg-white">
        <div class="container">

            <a href="#" class="title d-block fs-5 fw-normal pb-2 mb-4">
                রাজনীতি
            </a>

            <div class="row g-3">
                @foreach ($politics_posts->take(1) as $post )
                    <div class="col-lg-6">
                        <a href="{{ route('news.pages',$post->slug) }}">

                            <div class="card main-news border-0 rounded-0">
                                <div class="card-img rounded-0">
                                    <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class="card-img-top rounded-0">
                                </div>
                                <div class="card-body">
                                    <p class="place text-danger">
                                       {{ $post->category->name }}
                                    </p>
                                    <h1 class="card-title fw-light mb-4">
                                        {{ $post->title }}
                                    </h1>
                                    <p class="card-text">
                                        {!!  Illuminate\Support\Str::limit($post->content, 100, ' ......')  !!}
                                    </p>
                                    </p>
                                    <p class="time text-muted mt-2">
                                        {{ $post->published_at->diffForHumans()}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
               @endforeach
                <div class="col-lg-6">
                    <div class="row g-3">
                    @foreach ($politics_posts as $post )
                       <div class="col-6">
                        <a href="{{ route('news.pages',$post->slug) }}">
                            <div class="card news h-100 rounded-0 border-0">
                                <div class="card-img rounded-0">
                                    <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class="card-img-top rounded-0">
                                </div>
                                <div class="card-body">
                                    <p class="place text-danger">
                                         {{ $post->category->name }}
                                    </p>
                                    <h4 class="card-title fw-normal">
                                       {{ $post->title }}
                                    </h4>
                                    <p class="card-text">
                                        {!!  Illuminate\Support\Str::limit($post->content, 100, ' ......')  !!}
                                    </p>
                                    <p class="time text-muted mt-2">
                                        {{ $post->published_at->diffForHumans()}}
                                    </p>
                                </div>
                            </div>
                        </a>
                       </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- politics-news-area end -->

    {{-- <div class="mt-5">
        <x-alert message="Shabbaash!! You are logged in!" type="success" dismissible/>

        <div class="row">

            <div class="col-md-6">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title display-3">Outlet</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="#" class="btn btn-primary stretched-link">Goto dashboard</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title display-3">CRM</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="#" class="btn btn-primary stretched-link">Goto dashboard</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title display-3">HRM</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="#" class="btn btn-primary stretched-link">Goto dashboard</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card text-center mb-3">
                    <div class="card-body">
                        <h5 class="card-title display-3">Accounting</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional
                            content.</p>
                        <a href="#" class="btn btn-primary stretched-link">Goto dashboard</a>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}
@endsection

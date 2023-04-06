@extends('dashboard::layouts.master')
@section('title', $category->name)
@section('content')
   <!-- hero-area start -->
   <section class="category-header">
    <div class="container py-5">
        <h1 class="category-title fw-normal pb-1 mb-3">
            {{ $category ? $category->name:'' }}
        </h1>
        <div class="row">
            <div class="col-lg-8 mb-3">
               @foreach ($category->posts->take(1) as $post )
                <div class="last-news"  style="background-image: url('{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}')">
                    <div class="overlay position-absolute d-flex align-items-center" >
                        <div class="container">
                            <a  href="{{ route('news.pages',$post->slug) }}" class="header text-white d-block mx-3">
                                <h1 class="title">
                                   {{$post->title }}
                                </h1>
                                <p class="desc fw-medium">
                                    {!!  Illuminate\Support\Str::limit($post->content, 100, ' ......')  !!}
                                </p>
                            </a>
                            <a href="{{ route('news.pages',$post->slug) }}" class="btn btn-danger rounded-0 px-4 pt-2 m-3">
                                বিস্তারিত
                            </a>
                        </div>
                    </div>
                </div>

               @endforeach

            </div>

            <div class="col-lg-4">

                @foreach ($category->posts->take(5) as $post)
                  <a href="{{ route('news.pages',$post->slug) }}" class="d-block mb-3">
                    <figure class="d-flex shadow overflow-hidden pe-2">
                        <div class="fig-img">
                            @if ($post->hasMedia(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR))
                             <img src="{{ $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR) }}" alt="" class=" me-2 overflow-hidden">
                           @endif

                        </div>
                        <div class="captions pt-2">
                            <p class="category d-block mb-1 fw-medium">
                              {{ $post->category->name }}
                            </p>
                            <p class="figurecaption">
                                {{ $post->title}}
                            </p>
                            <span class="time text-muted d-block mb-2">
                                @php
                                \Carbon\Carbon::setLocale('bn');
                                @endphp
                               {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans(null, false, false) }}
                            </span>
                        </div>
                    </figure>
                </a>

               @endforeach
            </div>
        </div>
    </div>
</section>
<!-- hero-area end -->

<!-- latest-news start -->
<section class="latest-news ">
    <div class="container">
        <div class="row" >
            <div class="col-lg-8 mb-4">
                <a href="#" class="title d-block fs-5 fw-normal pb-2 mb-4">
                    সর্বশেষ খবর
                </a>

                <div class="row g-2 g-lg-3">

                   @foreach ($allPosts->take(9) as $post)
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

            <div class="col-md-4">
                <a href="#" class="title d-block fs-5 fw-normal pb-2 mb-4">
                    সর্বাধিক পঠিত
                </a>
                @foreach ($viewPosts as $post )
                    <a href="{{ route('news.pages',$post->slug) }}" class="d-block mb-3">
                        <figure class="d-flex shadow overflow-hidden pe-2">
                            <div class="fig-img">
                                <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class="me-2 overflow-hidden">
                            </div>

                            <div class="captions pt-2">
                                <p class="category d-block mb-1 fw-medium">
                                   {{ $post->category->name }}
                                </p>
                                <p class="figurecaption">
                                    {{ $post->title }}
                                </p>
                                <span class="time text-muted d-block mb-2">
                                    {{ $post->published_at->diffForHumans()}}
                                </span>
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


<!-- more-news-area start -->
<section class="more-news">
    <div class="container">
        <span class="title d-block fs-5 fw-normal pb-2 mb-4">
            আরও সংবাদ
        </span>

        <div class="row">
            @foreach ($category->posts as $post)
                <div class="col-12">
                    <a href="{{ route('news.pages',$post->slug) }}" class="d-block mb-3">
                        <figure class="d-flex shadow overflow-hidden pe-lg-5">
                            <div class="fig-img">
                                <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR))  }}" alt="" class=" me-3 overflow-hidden object-fit-cover">
                            </div>

                            <div class="captions pt-2">
                                <span class="category text-danger d-block mb-2 fw-medium">
                                   {{ $post->category->name }}
                                </span>
                                <h2 class="figurecaption fw-normal">
                                  {{ $post->title }}
                                </h2>
                                <p class="desc mb-2">
                                    {!!  Illuminate\Support\Str::limit($post->content, 100, ' ......')  !!}
                                </p>
                                <span class="time text-muted d-block mb-2">
                                    {{ $post->published_at->diffForHumans()}}
                                </span>
                            </div>
                        </figure>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- more-news-area end -->

@endsection

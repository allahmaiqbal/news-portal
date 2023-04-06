@extends('dashboard::layouts.master')

@section('title', 'search news')
@section('content')
    @if(count($news) > 0)
    <section class="search-result">
        <div class="container">
            <h2 class="category-title fw-normal pb-1 mb-3">
                {{ $searchData }}
            </h2>
            <div class="row g-4">
                @foreach($news->take(3) as $post)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('news.pages',$post->slug) }}" class="card h-100 border-0 rounded-0 shadow">
                        <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class="card-img-top rounded-0">
                        <div class="card-body">
                            <p class="d-flex justify-content-between mb-2">
                                <span class="place text-danger">
                                    {{ $post->category->name }}
                                </span>
                                <span class="time text-muted">
                                    @php
                                    \Carbon\Carbon::setLocale('bn');
                                    @endphp
                                    {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans(null, false, false) }}

                                </span>
                            </p>
                            <h2 class="card-title fw-light mb-2">
                                {{ $post->title }}
                            </h2>
                            <p class="card-text">
                                {!!  Illuminate\Support\Str::limit($post->content, 100, ' ......')  !!}
                            </p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @if(count($news) > 3)
    <section class="more-news">
        <div class="container">
            <span class="title d-block fs-5 fw-normal pb-2 mb-4">
                আরও সংবাদ
            </span>
            <div class="row">
                @foreach($news->skip(3) as $post)
                <div class="col-12">
                    <a href="{{ route('news.pages',$post->slug) }}" class="d-block mb-3">
                        <figure class="d-flex shadow overflow-hidden pe-lg-5">
                            <div class="fig-img">
                                <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class="me-3 overflow-hidden object-fit-cover">
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
                                    <span class="time text-muted">
                                        <span class="time text-muted d-block mb-2">
                                            @php
                                            \Carbon\Carbon::setLocale('bn');
                                            @endphp
                                           {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans(null, false, false) }}
                                        </span>
                                    </span>
                                </span>
                            </div>
                        </figure>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    @else
    <section class="more-news">
       <h1 class="text-center">দুঃখিত ! আপনার অনুরোধকৃত তথ্যটি খুঁজে পাই নি।</h1>
    </section>
    @endif




    <!-- more-news-area end -->
    <!-- more-news-area start -->
    {{-- <section class="more-news">
        <div class="container">
            <span class="title d-block fs-5 fw-normal pb-2 mb-4">
                সর্বাধিক পঠিত
            </span>
            @if(count($news) > 0)
            <div class="mt-4">
                <h4>Search Results:</h4>
                <ul>
                    @foreach($news->take(1) as $post)
                        <li>{{ $post->title }}</li>
                    @endforeach
                </ul>
            </div>

            @if(count($news) > 2)
                <div class="mt-4">
                    <h4>Other Search Results:</h4>
                    <ul>
                        @foreach($news->skip(1) as $post)
                            <li>{{ $post->title }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @else
                <div class="mt-4">
                    <p>No news found.</p>
                </div>
            @endif

        </div>
    </section> --}}
    <!-- more-news-area end -->

@endsection

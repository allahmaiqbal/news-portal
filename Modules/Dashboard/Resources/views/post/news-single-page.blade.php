@extends('dashboard::layouts.master')

@section('title', 'Pages')
@section('content')
 <!-- single-news-area start -->
 <section class="single-news">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 mb-3">
                <div class="ads mb-3">
                    <img src="#" alt="">
                </div>
                <p class="category-title d-block fs-5 fw-normal pb-2 mb-4">
                    সম্পূর্ণ নিউজ
                </p>
                <div class="row g-3 mb-3">
                    <div class="col-1">
                        <div class="reportar-img">
                            @if ($post->reporter->getFirstMediaUrl(\Modules\Reporter\Entities\Reporter::MEDIA_COLLECTION_AVATAR))
                            <img  src="{{ $post->reporter->getFirstMediaUrl(\Modules\Reporter\Entities\Reporter::MEDIA_COLLECTION_AVATAR) }}"  alt="" width="100%">
                           @endif

                        </div>
                    </div>
                    <div class="col-11">
                        <div class="reportar-sec">
                            <p class="reportar-title border-bottom mb-1">
                              {{ $post->reporter->name }}
                            </p>
                            <p class="sgl-page-views-count">
                                @php
                                    $banglaDateTime = \App\Helpers\formatDate($post->pulished_at, 'EEEE ,dd MMMM yyyy ,N ');
                                @endphp
                               {{ $banglaDateTime }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="full-news">
                    <figure>
                        <img src="{{  $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)  }}" alt="">
                        <p class="figcaption d-flex justify-content-between pt-2 px-1">
                            <span class="img-title">
                                {{ $post->image_title }}
                            </span>
                            <span class="time text-muted">
                                @php
                                \Carbon\Carbon::setLocale('bn');
                                @endphp
                               {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans(null, false, false) }}

                            </span>
                        </p>
                    </figure>

                    <span class="cetagory text-danger">
                        রংধনু স্পেশাল
                    </span>

                    <h1 class="news-header">
                        {{ $post->title }}
                    </h1>
                    <p class="news-desc lh-lg">
                    {!! $post->content !!}
                    </p>
                </div>
            </div>
            <div class="col-lg-4">

                <a href="#" class="category-title d-block fs-5 fw-normal pb-2 mb-4">
                    সাম্প্রতিক খবর
                </a>

              @foreach ($latestPosts->take(5) as $post )
                <a href="{{ route('news.pages',$post->slug) }}" class="d-block mb-3">
                    <figure class="d-flex shadow overflow-hidden pe-2">
                        <div class="fig-img">
                            <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR))  }}" alt="" class=" me-2 overflow-hidden">
                        </div>

                        <div class="captions pt-2">
                            <p class="category d-block mb-1 fw-medium">
                               {{ $post->category->name }}
                            </p>
                            <p class="figurecaption">
                                {{ $post->title }}
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

                 <div class="button mb-3">
                    <a href="{{ route('breaking-news.pages') }}" class="btn btn-outline-danger rounded-0 w-100 mt-3 shadow">
                        আরও সাম্প্রতিক খবর
                    </a>
                </div>

                <iframe class="fb-page mb-3" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fthemaxsop&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=false&appId" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                <div class="ads mb-3">
                    <img src="https://placehold.co/300x600/png" alt="">
                </div>
            </div>
        </div>


        <button onclick="window.print()" class="print text-capitalize">
            print
        </button>
    </div>
</section>
<!-- single-news-area end -->
@endsection

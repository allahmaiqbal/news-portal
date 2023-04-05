@extends('dashboard::layouts.master')

@section('title', 'সর্বাধিক পঠিত')
@section('content')
    <!-- more-news-area start -->
    <section class="more-news">
        <div class="container">
            <span class="title d-block fs-5 fw-normal pb-2 mb-4">
                সর্বাধিক পঠিত
            </span>

            <div class="row">
               @foreach ($viewPosts as $post)
               <div class="col-12">
                    <a href="{{ route('news.pages',$post->slug) }}" class="d-block mb-3">
                        <figure class="d-flex shadow overflow-hidden pe-lg-5">
                            <div class="fig-img">
                                <img src="{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}" alt="" class=" me-3 overflow-hidden object-fit-cover">
                            </div>

                            <div class="captions pt-2">
                                <span class="category text-danger d-block mb-2 fw-medium">
                                    {{-- {{ $post->$category->name }} --}}
                                </span>
                                <h2 class="figurecaption fw-normal">
                                    {{ $post->title }}
                                </h2>
                                <p class="desc mb-2">
                                    {!!  Illuminate\Support\Str::limit($post->content, 100, ' ......')  !!}
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
                </div>
               @endforeach
               <div class="button">
                    <a href="" class="btn btn-outline-danger w-100 rounded-0 shadow-sm mt-3">
                        আরও পড়ুন
                    </a>
              </div>
            </div>
        </div>
    </section>
    <!-- more-news-area end -->

@endsection

@extends('dashboard::layouts.master')

@section('title', 'breaking news')
@section('content')
    <!-- more-news-area start -->
    <section class="more-news">
        <div class="container">
            <span class="title d-block fs-5 fw-normal pb-2 mb-4">
                সর্বশেষ সংবাদ
            </span>

            <div class="row">
               @foreach ($allLatestPosts as $post)
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

                {{-- <div class="col-12">
                    <a href="#" class="d-block mb-3">
                        <figure class="d-flex shadow overflow-hidden pe-lg-5">
                            <div class="fig-img">
                                <img src="./img/news-img/news_9.jpg" alt="" class=" me-3 overflow-hidden object-fit-cover">
                            </div>

                            <div class="captions pt-2">
                                <span class="category text-danger d-block mb-2 fw-medium">
                                    বাংলাদেশ
                                </span>
                                <h2 class="figurecaption fw-normal">
                                    বারবার বিস্ফোরণ: অক্সিজেন প্ল্যান্টগুলোর নেই সেফটি প্ল্যানের অনুমোদন
                                </h2>
                                <p class="desc mb-2">
                                    চট্টগ্রামের সীতাকুণ্ডের সাত অক্সিজেন প্ল্যান্টর মধ্যে বেশির ভাগেরই নেই সেফটি প্ল্যানের অনুমোদন।
                                    অক্সিজেন কারখানাগুলোতে রয়েছে নানা ধরনের ঘাটতি ও অসংগতি। আর জনবহুল পরিবেশে শিল্পপ্রতিষ্ঠান
                                    গড়ে তোলার কোনো নিয়ম নেই বলে জানান বিশেষজ্ঞরা।
                                </p>
                                <span class="time text-muted d-block mb-2">
                                    ১ ঘণ্টা আগে
                                </span>
                            </div>
                        </figure>
                    </a>
                </div>

                <div class="col-12">
                    <a href="#" class="d-block mb-3">
                        <figure class="d-flex shadow overflow-hidden pe-lg-5">
                            <div class="fig-img">
                                <img src="./img/news-img/news_26.jpg" alt="" class=" me-3 overflow-hidden object-fit-cover">
                            </div>

                            <div class="captions pt-2">
                                <span class="category text-danger d-block mb-2 fw-medium">
                                    বাংলাদেশ
                                </span>
                                <h2 class="figurecaption fw-normal">
                                    বারবার বিস্ফোরণ: অক্সিজেন প্ল্যান্টগুলোর নেই সেফটি প্ল্যানের অনুমোদন
                                </h2>
                                <p class="desc mb-2">
                                    চট্টগ্রামের সীতাকুণ্ডের সাত অক্সিজেন প্ল্যান্টর মধ্যে বেশির ভাগেরই নেই সেফটি প্ল্যানের অনুমোদন।
                                    অক্সিজেন কারখানাগুলোতে রয়েছে নানা ধরনের ঘাটতি ও অসংগতি। আর জনবহুল পরিবেশে শিল্পপ্রতিষ্ঠান
                                    গড়ে তোলার কোনো নিয়ম নেই বলে জানান বিশেষজ্ঞরা।
                                </p>
                                <span class="time text-muted d-block mb-2">
                                    ১ ঘণ্টা আগে
                                </span>
                            </div>
                        </figure>
                    </a>
                </div>

                <div class="col-12">
                    <a href="#" class="d-block mb-3">
                        <figure class="d-flex shadow overflow-hidden pe-lg-5">
                            <div class="fig-img">
                                <img src="./img/news-img/news_28.jpg" alt="" class=" me-3 overflow-hidden object-fit-cover">
                            </div>

                            <div class="captions pt-2">
                                <span class="category text-danger d-block mb-2 fw-medium">
                                    বাংলাদেশ
                                </span>
                                <h2 class="figurecaption fw-normal">
                                    বারবার বিস্ফোরণ: অক্সিজেন প্ল্যান্টগুলোর নেই সেফটি প্ল্যানের অনুমোদন
                                </h2>
                                <p class="desc mb-2">
                                    চট্টগ্রামের সীতাকুণ্ডের সাত অক্সিজেন প্ল্যান্টর মধ্যে বেশির ভাগেরই নেই সেফটি প্ল্যানের অনুমোদন।
                                    অক্সিজেন কারখানাগুলোতে রয়েছে নানা ধরনের ঘাটতি ও অসংগতি। আর জনবহুল পরিবেশে শিল্পপ্রতিষ্ঠান
                                    গড়ে তোলার কোনো নিয়ম নেই বলে জানান বিশেষজ্ঞরা।
                                </p>
                                <span class="time text-muted d-block mb-2">
                                    ১ ঘণ্টা আগে
                                </span>
                            </div>
                        </figure>
                    </a>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- more-news-area end -->

@endsection

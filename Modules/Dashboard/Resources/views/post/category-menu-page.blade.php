@extends('dashboard::layouts.master')

@section('title', 'Pages')
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
                <div class="last-news">
                    <div class="overlay position-absolute d-flex align-items-center"  style="background-image: url('{{ asset( $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR)) }}')">
                        <div class="container">
                            <a href="{{ route('news.pages',$post->slug) }}" class="header text-white d-block mx-3">
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

                @foreach ($category->posts->take(4) as $post)
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
                                ১ ঘণ্টা আগে
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
<section class="latest-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4">
                <a href="#" class="title d-block fs-5 fw-normal pb-2 mb-4">
                    সর্বশেষ খবর
                </a>

                <div class="row g-2 g-lg-3">

                  @foreach ($category->posts as $post )

                    <div class="col-sm-6 col-md-4">
                        <div class="card h-100 border-0 shadow rounded-0 ps-2 pt-2">
                            <figure class="d-flex">
                                <img src="{{ $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR) }}" alt="" class="me-3">
                                <p>
                                    <span class="category">
                                     {{ $post->category->name }}
                                    </span>

                                    <span class="time text-muted d-block mb-2">
                                        ১ ঘণ্টা আগে
                                    </span>
                                </p>
                            </figure>

                            <a href="{{ route('news.pages',$post->slug) }}" class="news-details">
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

                    <div class="col-sm-6 col-md-4">
                        <div class="card h-100 border-0 shadow rounded-0 ps-2 pt-2">
                            <figure class="d-flex">
                                <img src="./img/news-img/news_5.jpeg" alt="" class="me-3">
                                <p>
                                    <span class="category">
                                        বাংলাদেশ
                                    </span>

                                    <span class="time text-muted d-block mb-2">
                                        ১ ঘণ্টা আগে
                                    </span>
                                </p>
                            </figure>

                            <a href="./single-news.html"  class="news-details">
                                <h4 class="header fw-normal">
                                    রফতানির নতুন বাজার খুঁজতে কূটনীতিকদের নির্দেশ প্রধানমন্ত্রীর
                                </h4>
                                <p class="desc text-muted fw-medium">
                                    ওয়ানডে ও টি-টোয়েন্টি সংস্করণে ইংল্যান্ড বিশ্বচ্যাম্পিয়ন হওয়ার পর প্রথমবারের মতো তাদের বিপক্ষে সিরিজ খেলছে বাংলাদেশ।
                                    ওয়ানডে ও টি-টোয়েন্টি সিরিজের আগে নানা কারণে বিতর্কিত টাইগাররা। এমন অবস্থায় মিরপুরের হোম অব ক্রিকেটে ইংলিশ
                                    বধের স্বপ্ন নিয়ে নামছে তামিম ইকবালের দল।
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="card h-100 border-0 shadow rounded-0 ps-2 pt-2">
                            <figure class="d-flex">
                                <img src="./img/news-img/news_17.jpg" alt="" class="me-3">
                                <p>
                                    <span class="category">
                                        আন্তর্জাতিক
                                    </span>

                                    <span class="time text-muted d-block mb-2">
                                        ১ ঘণ্টা আগে
                                    </span>
                                </p>
                            </figure>

                            <a href="./single-news.html"  class="news-details">
                                <h4 class="header fw-normal">
                                    ইরাকে আগ্রাসন ভুল ছিল বলে মনে করেন অধিকাংশ মার্কিনি
                                </h4>
                                <p class="desc text-muted fw-medium">
                                    বিশ বছর আগে আজকের এ দিনে (২০ মার্চ) ইরাকে স্থল হামলা শুরু করেছিল যুক্তরাষ্ট্র।
                                    বিমান শুরু করেছিল আরও একদিন আগেই অর্থাৎ ১৯ মার্চ। প্রায় ৮ বছর চলা সেই যুদ্ধে কেবল
                                    ২ লাখের বেশি বেসামরিক ইরাকি নিহত হয়েছিল। সেই যুদ্ধ শুরুর ২০ বছর পর এসে অধিকাংশ
                                    মার্কিনি মনে করছেন ইরাক যুদ্ধ ভুল ছিল। অনলাইন সংবাদমাধ্যম এক্সিওস ও জরিপ সংস্থা
                                    ইপসসের জরিপ থেকে এ তথ্য উছে এসেছে।
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="card h-100 border-0 shadow rounded-0 ps-2 pt-2">
                            <figure class="d-flex">
                                <img src="./img/news-img/news_7.jpg" alt="" class="me-3">
                                <p>
                                    <span class="category">
                                        রাজনীতি
                                    </span>

                                    <span class="time text-muted d-block mb-2">
                                        ১ ঘণ্টা আগে
                                    </span>
                                </p>
                            </figure>

                            <a href="./single-news.html"  class="news-details">
                                <h4 class="header fw-normal">
                                    আ.লীগের ফাঁদে আর পা দেবে না বিএনপি: ফখরুল
                                </h4>
                                <p class="desc text-muted fw-medium">
                                    আগের মতো আর নির্বাচন করতে দেয়া হবে না বলে হুঁশিয়ারি দিয়ে বিএনপি মহাসচিব মির্জা ফখরুল
                                    ইসলাম আলমগীর বলেছেন, ‘আওয়ামী লীগের পাতা ফাঁদে আর পা দেবে না বিএনপি।
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="card h-100 border-0 shadow rounded-0 ps-2 pt-2">
                            <figure class="d-flex">
                                <img src="./img/news-img/news_23.jpg" alt="" class="me-3">
                                <p>
                                    <span class="category">
                                        বাংলাদেশ
                                    </span>

                                    <span class="time text-muted d-block mb-2">
                                        ১ ঘণ্টা আগে
                                    </span>
                                </p>
                            </figure>

                            <a href="./single-news.html"  class="news-details">
                                <h4 class="header fw-normal">
                                    স্মার্ট বাহিনী হিসেবে শিগগিরই আত্মপ্রকাশ করবে র‌্যাব: মহাপরিচালক
                                </h4>
                                <p class="desc text-muted fw-medium">
                                    কোনো সন্ত্রাসী শক্তিই রাষ্ট্রের জন্য চ্যালেঞ্জ নয় উল্লেখ করে র‌্যাব মহাপরিচালক এম খুরশীদ হোসেন বলেছেন,
                                    স্মার্ট বাহিনী হিসেবে খুব শিগগিরই আত্মপ্রকাশ করবে র‌্যাব; মানবাধিকার সমুন্নত রেখেই মোকাবিলা করা হবে সন্ত্রাসবাদ।
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="card h-100 border-0 shadow rounded-0 ps-2 pt-2">
                            <figure class="d-flex">
                                <img src="./img/news-img/news_18.jpg" alt="" class="me-3">
                                <p>
                                    <span class="category">
                                        আন্তর্জাতিক
                                    </span>

                                    <span class="time text-muted d-block mb-2">
                                        ১ ঘণ্টা আগে
                                    </span>
                                </p>
                            </figure>

                            <a href="./single-news.html"  class="news-details">
                                <h4 class="header fw-normal">
                                    পারমাণবিক যুদ্ধের প্রস্তুতি নেয়ার নির্দেশ কিমের
                                </h4>
                                <p class="desc text-muted fw-medium">
                                    যুক্তরাষ্ট্র ও দক্ষিণ কোরিয়ার বিরুদ্ধে পারমাণবিক যুদ্ধের জন্য দেশের সশস্ত্র বাহিনীকে প্রস্তুতি নেয়ার
                                    নির্দেশ দিয়েছেন উত্তর কোরিয়ার প্রেসিডেন্ট কিম জং উন। দেশ দুটি পারমাণবিক অস্ত্র ব্যবহার করে
                                     যৌথ সামরিক মহড়া চালাচ্ছে এমন অভিযোগ এনে এ নির্দেশ দিয়েছেন তিনি। উত্তর কোরিয়ার
                                     সংবাদ সংস্থা কেসিএনএ-এর বরাত দিয়ে বার্তা সংস্থা রয়টার্স এ তথ্য জানিয়েছে।
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="card h-100 border-0 shadow rounded-0 ps-2 pt-2">
                            <figure class="d-flex">
                                <img src="./img/news-img/news_12.jpg" alt="" class="me-3">
                                <p>
                                    <span class="category">
                                        খেলা
                                    </span>

                                    <span class="time text-muted d-block mb-2">
                                        ১ ঘণ্টা আগে
                                    </span>
                                </p>
                            </figure>

                            <a href="./single-news.html" class="news-details">
                                <h4 class="header fw-normal">
                                    রিয়ালের মুখের হাসি কেড়ে নিল বার্সেলোনা
                                </h4>
                                <p class="desc text-muted fw-medium">
                                    ওয়ানডে ও টি-টোয়েন্টি সংস্করণে ইংল্যান্ড বিশ্বচ্যাম্পিয়ন হওয়ার পর প্রথমবারের মতো তাদের বিপক্ষে সিরিজ খেলছে বাংলাদেশ।
                                    ওয়ানডে ও টি-টোয়েন্টি সিরিজের আগে নানা কারণে বিতর্কিত টাইগাররা। এমন অবস্থায় মিরপুরের হোম অব ক্রিকেটে ইংলিশ
                                    বধের স্বপ্ন নিয়ে নামছে তামিম ইকবালের দল।
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="card h-100 border-0 shadow rounded-0 ps-2 pt-2">
                            <figure class="d-flex">
                                <img src="./img/news-img/news_5.jpeg" alt="" class="me-3">
                                <p>
                                    <span class="category">
                                        বাংলাদেশ
                                    </span>

                                    <span class="time text-muted d-block mb-2">
                                        ১ ঘণ্টা আগে
                                    </span>
                                </p>
                            </figure>

                            <a href="./single-news.html"  class="news-details">
                                <h4 class="header fw-normal">
                                    রফতানির নতুন বাজার খুঁজতে কূটনীতিকদের নির্দেশ প্রধানমন্ত্রীর
                                </h4>
                                <p class="desc text-muted fw-medium">
                                    ওয়ানডে ও টি-টোয়েন্টি সংস্করণে ইংল্যান্ড বিশ্বচ্যাম্পিয়ন হওয়ার পর প্রথমবারের মতো তাদের বিপক্ষে সিরিজ খেলছে বাংলাদেশ।
                                    ওয়ানডে ও টি-টোয়েন্টি সিরিজের আগে নানা কারণে বিতর্কিত টাইগাররা। এমন অবস্থায় মিরপুরের হোম অব ক্রিকেটে ইংলিশ
                                    বধের স্বপ্ন নিয়ে নামছে তামিম ইকবালের দল।
                                </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="card h-100 border-0 shadow rounded-0 ps-2 pt-2">
                            <figure class="d-flex">
                                <img src="./img/news-img/news_17.jpg" alt="" class="me-3">
                                <p>
                                    <span class="category">
                                        আন্তর্জাতিক
                                    </span>

                                    <span class="time text-muted d-block mb-2">
                                        ১ ঘণ্টা আগে
                                    </span>
                                </p>
                            </figure>

                            <a href="./single-news.html"  class="news-details">
                                <h4 class="header fw-normal">
                                    ইরাকে আগ্রাসন ভুল ছিল বলে মনে করেন অধিকাংশ মার্কিনি
                                </h4>
                                <p class="desc text-muted fw-medium">
                                    বিশ বছর আগে আজকের এ দিনে (২০ মার্চ) ইরাকে স্থল হামলা শুরু করেছিল যুক্তরাষ্ট্র।
                                    বিমান শুরু করেছিল আরও একদিন আগেই অর্থাৎ ১৯ মার্চ। প্রায় ৮ বছর চলা সেই যুদ্ধে কেবল
                                    ২ লাখের বেশি বেসামরিক ইরাকি নিহত হয়েছিল। সেই যুদ্ধ শুরুর ২০ বছর পর এসে অধিকাংশ
                                    মার্কিনি মনে করছেন ইরাক যুদ্ধ ভুল ছিল। অনলাইন সংবাদমাধ্যম এক্সিওস ও জরিপ সংস্থা
                                    ইপসসের জরিপ থেকে এ তথ্য উছে এসেছে।
                                </p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="button">
                    <a href="#" class="btn btn-outline-danger rounded-0 w-100 mt-3 shadow">
                        আরও সর্বশেষ খবর
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <a href="#" class="title d-block fs-5 fw-normal pb-2 mb-4">
                    সর্বাধিক পঠিত
                </a>

                <a href="#" class="d-block mb-3">
                    <figure class="d-flex shadow overflow-hidden pe-2">
                        <div class="fig-img">
                            <img src="./img/news-img/news_25.png" alt="" class=" me-2 overflow-hidden">
                        </div>

                        <div class="captions pt-2">
                            <p class="category d-block mb-1 fw-medium">
                                খেলা
                            </p>
                            <p class="figurecaption">
                                ঐতিহাসিক ৭ই মার্চের ভাষণের কতটুকু ধারণ করতে পেরেছি আমরা?
                            </p>
                            <span class="time text-muted d-block mb-2">
                                ১ ঘণ্টা আগে
                            </span>
                        </div>
                    </figure>
                </a>

                <a href="#" class="d-block mb-3">
                    <figure class="d-flex shadow overflow-hidden pe-2">
                        <div class="fig-img">
                            <img src="./img/news-img/news_23.jpg" alt="" class="me-2 overflow-hidden">
                        </div>

                        <div class="captions pt-2">
                            <p class="category d-block mb-1 fw-medium">
                                বাংলাদেশ
                            </p>
                            <p class="figurecaption">
                                রফতানির নতুন বাজার খুঁজতে কূটনীতিকদের নির্দেশ প্রধানমন্ত্রীর
                            </p>
                            <span class="time text-muted d-block mb-2">
                                ১ ঘণ্টা আগে
                            </span>
                        </div>
                    </figure>
                </a>

                <a href="#" class="d-block mb-3">
                    <figure class="d-flex shadow overflow-hidden pe-2">
                        <div class="fig-img">
                            <img src="./img/news-img/news_25.png" alt="" class="me-2 overflow-hidden">
                        </div>

                        <div class="captions pt-2">
                            <p class="category d-block mb-1 fw-medium">
                                রাজনীতি
                            </p>
                            <p class="figurecaption">
                                ঐতিহাসিক ৭ই মার্চের ভাষণের কতটুকু ধারণ করতে পেরেছি আমরা?
                            </p>
                            <span class="time text-muted d-block mb-2">
                                ১ ঘণ্টা আগে
                            </span>
                        </div>
                    </figure>
                </a>

                <a href="#" class="d-block mb-3">
                    <figure class="d-flex shadow overflow-hidden pe-2">
                        <div class="fig-img">
                            <img src="./img/news-img/news_23.jpg" alt="" class="me-2 overflow-hidden">
                        </div>

                        <div class="captions pt-2">
                            <p class="category d-block mb-1 fw-medium">
                             আন্তর্জাতিক
                            </p>
                            <p class="figurecaption">
                                রফতানির নতুন বাজার খুঁজতে কূটনীতিকদের নির্দেশ প্রধানমন্ত্রীর
                            </p>
                            <span class="time text-muted d-block mb-2">
                                ১ ঘণ্টা আগে
                            </span>
                        </div>
                    </figure>
                </a>

                <a href="#" class="d-block mb-3">
                    <figure class="d-flex shadow overflow-hidden pe-2">
                        <div class="fig-img">
                            <img src="./img/news-img/news_25.png" alt="" class=" me-2 overflow-hidden">
                        </div>

                        <div class="captions pt-2">
                            <p class="category d-block mb-1 fw-medium">
                                বাংলাদেশ
                            </p>
                            <p class="figurecaption">
                                ঐতিহাসিক ৭ই মার্চের ভাষণের কতটুকু ধারণ করতে পেরেছি আমরা?
                            </p>
                            <span class="time text-muted d-block mb-2">
                                ১ ঘণ্টা আগে
                            </span>
                        </div>
                    </figure>
                </a>


                <div class="button">
                    <a href="#" class="btn btn-outline-danger w-100 rounded-0 shadow-sm mt-3">
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
            <div class="col-12">
                <a href="#" class="d-block mb-3">
                    <figure class="d-flex shadow overflow-hidden pe-lg-5">
                        <div class="fig-img">
                            <img src="./img/news-img/news_25.png" alt="" class=" me-3 overflow-hidden object-fit-cover">
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
                            {{-- <img src="{{ asset("images/news_28.jpg") }}" alt="" class=" me-3 overflow-hidden object-fit-cover"> --}}
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
        </div>
    </div>
</section>
<!-- more-news-area end -->

@endsection

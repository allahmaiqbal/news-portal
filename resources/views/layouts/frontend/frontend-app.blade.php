
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- fontwasome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="./css/style.css"> --}}
    {{ module_vite_react_refresh() }}
    {{ module_vite_assets_unique_hot_path([
        'resources/scss/frontend/style.scss',
        'resources/statics/frontend/js/main.js',
    ]) }}
        @stack('styles')
</head>
<body>

    <!-- Navbar start -->

    @include('layouts.frontend.partial.navbar')

    <!-- Navbar end -->

    <div class="">
        {{ $slot }}
    </div>

    {{-- <!-- hero-area start -->
    <section class="hero-area">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{module_asset ("resources/statics/frontend/img/news-img/news_1.jpg") }}" class="" alt="...">

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
                <img src="{{module_asset ("resources/statics/frontend/img/news-img/news_10.jpg") }}" class="" alt="...">

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
                <img src="{{module_asset ("resources/statics/frontend/img/news-img/news_12.jpg") }}" class="" alt="...">

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

                        <div class="col-sm-6 col-md-4">
                            <div class="card h-100 border-0 shadow rounded-0 ps-2 pt-2">
                                <figure class="d-flex">
                                    <img src="{{module_asset ("resources/statics/frontend/img/news-img/news_12.jpg") }}" class="" alt="..." class="me-3">
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
                                    <img src="{{module_asset ("resources/statics/frontend/img/news-img/news_5.jpeg") }}" class="" alt="..." class="me-3">
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
                                    <img src="{{module_asset ("resources/statics/frontend/img/news-img/news_17.jpg") }}" class="" alt="..." class="me-3">
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
                                    <img src="{{module_asset ("resources/statics/frontend/img/news-img/news_17.jpg") }}" class="" alt="..." class="me-2">
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
                                    <img src="./resources/statics/frontend/img/news-resources/statics/frontend/img/news_23.jpg" alt="" class="me-3">
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
                                    <img src="./resources/statics/frontend/img/news-resources/statics/frontend/img/news_18.jpg" alt="" class="me-3">
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
                                    <img src="./resources/statics/frontend/img/news-resources/statics/frontend/img/news_12.jpg" alt="" class="me-3">
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
                                    <img src="./resources/statics/frontend/img/news-resources/statics/frontend/img/news_5.jpeg" alt="" class="me-3">
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
                                    <img src="{{module_asset ("resources/statics/frontend/img/news-img/news_9.jpg") }}" class="" alt="..." class="me-3">
                                    <img src="./img/news-img/news_9.jpg" class="card-img-top rounded-0">
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

                <div class="col-lg-4">
                    <a href="#" class="title d-block fs-5 fw-normal pb-2 mb-4">
                        সর্বাধিক পঠিত
                    </a>

                    <a href="#" class="d-block mb-3">
                        <figure class="d-flex shadow overflow-hidden">
                            <div class="fig-img">
                                <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_5.jpeg") }}" alt="" class="me-2 overflow-hidden">
                            </div>
                            <div class="captions pt-2">
                                <p class="category d-block mb-1 fw-medium">
                                    খেলা
                                </p>
                                <p class="figure-caption">
                                    রফতানির নতুন বাজার খুঁজতে কূটনীতিকদের নির্দেশ প্রধানমন্ত্রীর
                                </p>
                            </div>
                        </figure>
                    </a>

                    <a href="#" class="d-block mb-3">
                        <figure class="d-flex shadow rounded-1 overflow-hidden">
                            <div class="fig-img">
                                <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_1.jpg") }}" alt="" class="me-2 overflow-hidden">
                            </div>

                            <div class="captions pt-2">
                                <p class="category d-block mb-1 fw-medium">
                                    খেলা
                                </p>
                                <p class="figure-caption">
                                    ঐতিহাসিক ৭ই মার্চের ভাষণের কতটুকু ধারণ করতে পেরেছি আমরা?
                                </p>
                            </div>
                        </figure>
                    </a>

                    <a href="#" class="d-block mb-3">
                        <figure class="d-flex shadow rounded-1 overflow-hidden">
                            <div class="fig-img">
                                <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_2.jpg") }}" alt="" class="me-2 overflow-hidden">
                            </div>

                            <div class="captions pt-2">
                                <p class="category d-block mb-1 fw-medium">
                                    খেলা
                                </p>
                                <p class="figure-caption">
                                    রফতানির নতুন বাজার খুঁজতে কূটনীতিকদের নির্দেশ প্রধানমন্ত্রীর
                                </p>
                            </div>
                        </figure>
                    </a>

                    <a href="#" class="d-block mb-3">
                        <figure class="d-flex shadow rounded-1 overflow-hidden">
                            <div class="fig-img">
                                <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_3.jpg") }}" alt="" class="me-2 overflow-hidden">
                            </div>

                            <div class="captions pt-2">
                                <p class="category d-block mb-1 fw-medium">
                                    খেলা
                                </p>
                                <p class="figure-caption">
                                    বার্সা খেলোয়াড়দের ওপর ‘জাল নোট’ ছুঁড়ে বিলবাও সমর্থকদের প্রতিবাদ
                                </p>
                            </div>
                        </figure>
                    </a>

                    <a href="#" class="d-block mb-3">
                        <figure class="d-flex shadow rounded-1 overflow-hidden">
                            <div class="fig-img">
                                <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_4.jpg") }}" alt="" class="me-2 overflow-hidden">
                            </div>

                            <div class="captions pt-2">
                                <p class="category d-block mb-1 fw-medium">
                                    খেলা
                                </p>
                                <p class="figure-caption">
                                    ঐতিহাসিক ৭ই মার্চের ভাষণের কতটুকু ধারণ করতে পেরেছি আমরা?
                                </p>
                            </div>
                        </figure>
                    </a>

                    <a href="#" class="d-block mb-3">
                        <figure class="d-flex shadow rounded-1 overflow-hidden">
                            <div class="fig-img">
                                <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_5.jpeg") }}" alt="" class="me-2 overflow-hidden">
                            </div>

                            <div class="captions pt-2">
                                <p class="category d-block mb-1 fw-medium">
                                    আন্তর্জাতিক
                                </p>
                                <p class="figure-caption">
                                    রফতানির নতুন বাজার খুঁজতে কূটনীতিকদের নির্দেশ প্রধানমন্ত্রীর
                                </p>
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
                <div class="col-lg-6">
                    <a href="#">
                        <div class="card main-news border-0 rounded-0">
                            <div class="card-img rounded-0">
                                <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_9.jpg") }}" alt="" class="card-img-top rounded-0">
                            </div>
                            <div class="card-body">
                                <p class="place text-danger">
                                    খুলনা
                                </p>
                                <h1 class="card-title fw-light mb-4">
                                    খুলনায় চিকিৎসকদের কর্মবিরতি অব্যাহত রাখার ঘোষণা
                                </h1>
                                <p class="card-text">
                                    চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                    চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                    হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                </p>
                                <p class="time text-muted mt-2">
                                    ৪৩ মিনিট আগে
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">
                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_10.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>
                                    <div class="card-body">
                                        <p class="place text-danger">
                                            খুলনা
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            আ. লীগ ক্ষমতায় আসার পর বেড়েছে এডিবির সহযোগিতা: প্রধানমন্ত্রী
                                        </h4>
                                        <p class="card-text">
                                            ডাচ্‌-বাংলা ব্যাংক লিমিটেডের টাকা ছিনতাইয়ের ঘটনায় নতুন করে আরও ৫৮ লাখ ৭ হাজার টাকা উদ্ধার হয়েছে বলে জানিয়েছে ঢাকা মহানগর গোয়েন্দা পুলিশ (ডিবি)
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">

                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_3.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>

                                    <div class="card-body">
                                        <p class="place text-danger">
                                            খুলনা
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            দেশে আরও সাতজন করোনা শনাক্ত
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">

                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_7.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>

                                    <div class="card-body">
                                        <p class="place text-danger">
                                            খুলনা
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            বিদ্যুৎ হলো জনগণের টাকা লুটের খাত: ফখরুল
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">

                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_4.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>

                                    <div class="card-body">
                                        <p class="place text-danger">
                                            খুলনা
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            খুলনায় চিকিৎসকদের কর্মবিরতি অব্যাহত রাখার ঘোষণা
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                      </div>
                </div>
            </div>

        </div>
    </section>
    <!-- national-news-area end -->


    <!-- inter-national-news-area start -->
    <section class="all-news bg-white">
        <div class="container">

            <a href="./international.html" class="title d-block fs-5 fw-normal pb-2 mb-4">
                আন্তর্জাতিক
            </a>

            <div class="row g-3">
                <div class="col-lg-6">
                    <a href="#">
                        <div class="card main-news border-0 rounded-0">
                            <div class="card-img rounded-0">
                                <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_14.jpg") }}" alt="" class="card-img-top rounded-0">
                            </div>
                            <div class="card-body">
                                <p class="place text-danger">
                                    আন্তর্জাতিক
                                </p>
                                <h1 class="card-title fw-light mb-4">
                                    এক দশকের দেনদরবার শেষে সমুদ্র চুক্তি স্বাক্ষর
                                </h1>
                                <p class="card-text">
                                    চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                    চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                    হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                </p>
                                <p class="time text-muted mt-2">
                                    ৪৩ মিনিট আগে
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">
                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_15.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>
                                    <div class="card-body">
                                        <p class="place text-danger">
                                            আন্তর্জাতিক
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            চীনের সামরিক বাজেট বেড়ে দাঁড়াল ২২৪ বিলিয়ন ডলারে
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6 mb-3">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">

                                    <div class="card-img rounded-0">
                                        <img src="./resources/statics/frontend/img/news-resources/statics/frontend/img/news_16.jpg" class="card-img-top rounded-0">
                                    </div>

                                    <div class="card-body">
                                        <p class="place text-danger">
                                            আন্তর্জাতিক
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            এক দশকের দেনদরবার শেষে সমুদ্র চুক্তি স্বাক্ষর
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6 mb-3">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">

                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_17.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>

                                    <div class="card-body">
                                        <p class="place text-danger">
                                            আন্তর্জাতিক
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            স্কিন ক্যানসারে আক্রান্ত হয়েছিলেন বাইডেন!
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6 mb-3">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">

                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_18.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>

                                    <div class="card-body">
                                        <p class="place text-danger">
                                            আন্তর্জাতিক
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            ইরানে শিক্ষার্থীদের বিষপ্রয়োগে ‘বিদেশি শত্রু’ জড়িত: রাইসি
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                      </div>
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

            <a href="./sports.html" class="title d-block fs-5 fw-normal pb-2 mb-4">
                খেলা
            </a>

            <div class="row g-3">
                <div class="col-lg-6">
                    <a href="#">
                        <div class="card main-news border-0 rounded-0">
                            <div class="card-img rounded-0">
                                <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_11.jpg") }}" alt="" class="card-img-top rounded-0">
                            </div>
                            <div class="card-body">
                                <p class="place text-danger">
                                    খেলা
                                </p>
                                <h1 class="card-title fw-light mb-4">
                                    ন্যান্তেসের বিপক্ষে গোল করে মেসির এক হাজারের মাইলফলক
                                </h1>
                                <p class="card-text">
                                    চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                    চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                    হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                </p>
                                <p class="time text-muted mt-2">
                                    ৪৩ মিনিট আগে
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">
                                    <div class="card-img rounded-0">
                                        <img src="./resources/statics/frontend/img/news-resources/statics/frontend/img/news_4.jpg" class="card-img-top rounded-0">
                                    </div>
                                    <div class="card-body">
                                        <p class="place text-danger">
                                            খেলা
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            ইংল্যান্ডের বিপক্ষে ব্যাটিংয়ে বাংলাদেশ
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">

                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_12.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>

                                    <div class="card-body">
                                        <p class="place text-danger">
                                            খেলা
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            কাভানিকে হটিয়ে পিএসজির সর্বোচ্চ গোলদাতা এখন এমবাপ্পে
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">

                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_13.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>

                                    <div class="card-body">
                                        <p class="place text-danger">
                                            খেলা
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            নড়াইল থেকে ক্রিকেটার বের করে আনতে মাশরাফীর উদ্যোগ
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">

                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_19.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>

                                    <div class="card-body">
                                        <p class="place text-danger">
                                            খেলা
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            পন্টিং না পারলেও ভারতের মাটিতে পেরেছেন স্মিথ
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                      </div>
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
                <div class="col-lg-6">
                    <a href="#">
                        <div class="card main-news border-0 rounded-0">
                            <div class="card-img rounded-0">
                                <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_21.jpg") }}" alt="" class="card-img-top rounded-0">
                            </div>
                            <div class="card-body">
                                <p class="place text-danger">
                                    বিনোদন
                                </p>
                                <h1 class="card-title fw-light mb-4">
                                    ন্যান্তেসের বিপক্ষে গোল করে মেসির এক হাজারের মাইলফলক
                                </h1>
                                <p class="card-text">
                                    চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                    চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                    হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                </p>
                                <p class="time text-muted mt-2">
                                    ৪৩ মিনিট আগে
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">
                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_20.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>
                                    <div class="card-body">
                                        <p class="place text-danger">
                                            বিনোদন
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            ইংল্যান্ডের বিপক্ষে ব্যাটিংয়ে বাংলাদেশ
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">

                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_21.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>

                                    <div class="card-body">
                                        <p class="place text-danger">
                                            বিনোদন
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            কাভানিকে হটিয়ে পিএসজির সর্বোচ্চ গোলদাতা এখন এমবাপ্পে
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">

                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_22.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>

                                    <div class="card-body">
                                        <p class="place text-danger">
                                            বিনোদন
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            নড়াইল থেকে ক্রিকেটার বের করে আনতে মাশরাফীর উদ্যোগ
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">

                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_20.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>

                                    <div class="card-body">
                                        <p class="place text-danger">
                                            বিনোদন
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            পন্টিং না পারলেও ভারতের মাটিতে পেরেছেন স্মিথ
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                      </div>
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
                <div class="col-lg-6">
                    <a href="#">
                        <div class="card main-news border-0 rounded-0">
                            <div class="card-img rounded-0">
                                <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_20.jpg") }}" alt="" class="card-img-top rounded-0">
                            </div>
                            <div class="card-body">
                                <p class="place text-danger">
                                    বিনোদন
                                </p>
                                <h1 class="card-title fw-light mb-4">
                                    ন্যান্তেসের বিপক্ষে গোল করে মেসির এক হাজারের মাইলফলক
                                </h1>
                                <p class="card-text">
                                    চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                    চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                    হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                </p>
                                <p class="time text-muted mt-2">
                                    ৪৩ মিনিট আগে
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">
                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_21.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>
                                    <div class="card-body">
                                        <p class="place text-danger">
                                            বিনোদন
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            ইংল্যান্ডের বিপক্ষে ব্যাটিংয়ে বাংলাদেশ
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">

                                    <div class="card-img rounded-0">
                                        <img src="{{ module_asset("resources/statics/frontend/img/news-img/news_12.jpg") }}" alt="" class="card-img-top rounded-0">
                                    </div>

                                    <div class="card-body">
                                        <p class="place text-danger">
                                            বিনোদন
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            কাভানিকে হটিয়ে পিএসজির সর্বোচ্চ গোলদাতা এখন এমবাপ্পে
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">

                                    <div class="card-img rounded-0">
                                        <img src="./resources/statics/frontend/img/news-resources/statics/frontend/img/news_13.jpg" class="card-img-top rounded-0">
                                    </div>

                                    <div class="card-body">
                                        <p class="place text-danger">
                                            বিনোদন
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            নড়াইল থেকে ক্রিকেটার বের করে আনতে মাশরাফীর উদ্যোগ
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-6">
                            <a href="#">
                                <div class="card news h-100 rounded-0 border-0">

                                    <div class="card-img rounded-0">
                                        <img src="./resources/statics/frontend/img/news-resources/statics/frontend/img/news_19.jpg" class="card-img-top rounded-0">
                                    </div>

                                    <div class="card-body">
                                        <p class="place text-danger">
                                            বিনোদন
                                        </p>
                                        <h4 class="card-title fw-normal">
                                            পন্টিং না পারলেও ভারতের মাটিতে পেরেছেন স্মিথ
                                        </h4>
                                        <p class="card-text">
                                            চিকিৎসকের ওপর হামলাকারী পুলিশের এএসআই নাঈম গ্রেফতার না হওয়া পর্যন্ত খুলনার সরকারি-বেসরকারি সব হাসপাতালে
                                            চিকিৎসকদের কর্মবিরতি অব্যাহত থাকবে। এ ছাড়া  বৃহস্পতিবার (২ মার্চ) বেলা ১১টায় শহীদ শেখ আবু নাসের বিশেষায়িত
                                            হাসপাতাল চত্বরে বিক্ষোভ সমাবেশ করার সিদ্ধান্ত নেয়া হয়েছে।
                                        </p>
                                        <p class="time text-muted mt-2">
                                            ৪৩ মিনিট আগে
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                      </div>
                </div>
            </div>

        </div>
    </section>
    <!-- politics-news-area end --> --}}


    <!-- footer-area start -->
     @include('layouts.frontend.partial.footer')
    <!-- footer-area end -->

    {{-- <script src="./js/main.js"></script>

    <!-- bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> --}}
    <!-- Custom Scripts -->
    <script>
        const contact = document.querySelector(".side-contact");
        const menu = document.querySelector(".dropdown-md");
        const close = document.querySelector(".close-btn");

        contact.addEventListener("click", () => {
        console.log("khalil");
        menu.classList.add('visible')
        });
        close.addEventListener("click", () => {
        console.log("khalil");
        menu.classList.remove('visible')
        });
    </script>
    @stack('scripts')

</body>
</html>

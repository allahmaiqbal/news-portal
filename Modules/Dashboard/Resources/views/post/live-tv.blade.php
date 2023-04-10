@extends('dashboard::layouts.master')

@section('title', 'সম্পূর্ণ নিউজ')
@section('content')
 <!-- single-news-area start -->
     <!-- video-area start -->
     <section class="video-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mx-auto">
                    <h4 class="header fw-normal mb-4 pb-2">রংধনু টিভি লাইভ</h4>
                    <div class="video">
                        <iframe class="mb-3" src="https://www.youtube.com/embed/-R7MFU4eepw" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
                        <div class="share-in-social d-flex justify-content-center align-items-center">
                            <h4 class="share mt-2 me-3">
                                শেয়ার করুন :
                            </h4>
                            <div class="social">
                                <a href="#" target="_blank">
                                    <img src="{{ asset('images/social/facebook-logo.svg') }}" alt="">
                                </a>
                                <a href="#" target="_blank">
                                    <img src="{{ asset('images/social/google-news-logo.svg') }}" alt="">
                                </a>
                                <a href="#" target="_blank">
                                    <img src="{{ asset('images/social/instagram-logo.svg') }}" alt="">
                                </a>
                                <a href="#" target="_blank">
                                    <img src="{{ asset('images/social/twitter-logo.svg') }}" alt="">
                                </a>
                                <a href="#" target="_blank">
                                    <img src="{{ asset('images/social/whatsapp-logo.svg') }}" alt="">
                                </a>
                                <a href="#" target="_blank">
                                    <img src="{{ asset('images/social/youtube-logo.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video-area end -->
<!-- single-news-area end -->
@endsection

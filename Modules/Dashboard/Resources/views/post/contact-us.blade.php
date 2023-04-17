@extends('dashboard::layouts.master')

@section('title', 'about us')
@section('content')
     <!-- contact-section start -->
     <section class="contact-us">
        <div class="container">
            <h1 class="section-header fw-normal border-bottom border-danger text-capitalize pb-2 mb-4">
                contact address
            </h1>
            @foreach (explode('|', $address) as $address )
            <p class="mb-2">
                <span class="title fw-medium">
                {{ $address }}
                </span>
            </p>
            @endforeach

            {{-- <p class="mb-3">
                <span class="title fw-medium">
                    প্রধান অফিস
                </span>

                <span>
                    ৩/১৬ মুক্তিযোদ্ধো কমপ্লেক্স,
                </span>
            </p>

            <p class="mb-3">
                চিড়িয়াখানা রোড,মিরপুর ঢাকা-১২১৬
            </p>

            <p class="mb-3">
                <span class="title fw-medium">
                    শাখা অফিস,
                </span>
                <span>
                    দরগা মহল্লা রোড,
                </span>

            </p>

            <p class="mb-3">
                ত্রিশাল পৌরসভা,, ময়মনসিংহ
            </p> --}}

            <p class="mb-3">
                <span class="title fw-medium">
                    ফোনঃ
                </span>
                <a href="tel:+৮৮০১৭১৫৮১৮৭৮৩">
                  {{ $phone }}
                </a>
            </p>

            <p class="mb-3">
                <span class="title fw-medium">
                    ইমেইলঃ
                </span>
                <a href="email:example@gmail.com">
                   {{ $email }}
                </a>
            </p>

            <p class="mb-3">
                <span class="title fw-medium">
                    ওয়েবসাইটঃ
                </span>
                <a href="rongdhonutvnews24.com" target="_blank">
                  {{ $site }}
                </a>
            </p>
        </div>
    </section>
    <!-- contact-section end -->

@endsection

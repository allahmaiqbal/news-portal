@extends('dashboard::layouts.master')

@section('title', 'about us')
@section('content')
    <!-- about-section start -->
    <section class="about-us">
        <div class="container">
            <h1 class="section-header fw-normal border-bottom border-danger text-capitalize pb-2 mb-4">
                about rongdhonu TV ltd
            </h1>

            <p class="about-desc">
               {{ $aboutUs }}
            </p>
        </div>
    </section>
    <!-- about-section end -->

@endsection

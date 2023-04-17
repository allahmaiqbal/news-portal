@extends('dashboard::layouts.master')

@section('title', 'about us')
@section('content')
      <!-- contact-section start -->
      <section class="contact-us">
        <div class="container">
            <h1 class="section-header fw-normal border-bottom border-danger text-capitalize pb-2 mb-4">
                Privacy Policy & Terms and Conditions
            </h1>

            <strong class="d-block mb-2">
                Privacy
            </strong>
            <p class="">
                {{ $termsCondition }}
            </p>
        </div>
    </section>
    <!-- contact-section end -->

@endsection

@extends('auth::layouts.master')

@section('title', 'Verify Email')

@section('content')
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="mx-auto" style="width: 200px; height: 200px;">
                <a href="{{ url('/') }}">
                    <x-application-logo/>
                </a>
            </div>

            <x-alert
                message="Thanks for signing up! Before getting started,
                 could you verify your email address by clicking on the link we just emailed to you?
                  If you didn't receive the email,
                   we will gladly send you another."></x-alert>

            @if (session('status') == 'verification-link-sent')
                <x-alert
                    message="A new verification link has been sent to the email address you provided during registration."
                    type="info" dismissable></x-alert>
            @else
                <x-alert :message="session('status')" type="info"></x-alert>
            @endif

            <div class="card mx-auto shadow-sm">
                <div class="card-header text-center">
                    <h4>Verify Email</h4>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <div class="d-grid">
                            <button class="btn btn-dark">Resend Verification Email</button>
                        </div>
                    </form>

                    <form method="POST" action="{{ route('logout') }}" class="mt-5">
                        @csrf
                        <div class="text-center">
                            <button class="btn btn-secondary">Logout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

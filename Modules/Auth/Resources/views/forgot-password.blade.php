@extends('auth::layouts.master')

@section('title', 'Recover Password')

@section('content')
    <div class="row">
        <div class="col-lg-6 offset-lg-3">

            <div class="mx-auto" style="width: 200px; height: 200px;">
                <a href="{{ url('/') }}">
                    <x-application-logo/>
                </a>
            </div>

            <x-alert :message="session('status')" type="success"></x-alert>

            <x-alert type="info" message="Forgot your password? No problem.
             Just let us know your email address,
              and we will email you a password reset link that will allow you to choose a new one."/>

            <div class="card mx-auto shadow-sm">
                <div class="card-body">

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label required">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   placeholder="Enter email address" required autofocus>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-dark">Email Password Reset Link</button>
                        </div>

                        @if(Route::has('login'))
                            <div class="mt-2 text-center">
                                Already have an account? <a href="{{ route('login') }}">Login</a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

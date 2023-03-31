@extends('auth::layouts.master')

@section('title', 'Login')

@section('content')
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="mx-auto" style="width: 200px; height: 200px;">
                <a href="{{ url('/') }}">
                    <x-application-logo/>
                </a>
            </div>

            <x-alert :message="session('status')" type="success"></x-alert>

            <div class="card mx-auto shadow-sm">
                <div class="card-header text-center">
                    <h4>Login</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label required">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                   name="email"
                                   placeholder="Enter email address" value="{{ old('email') }}">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label required">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   id="password" name="password"
                                   placeholder="Enter password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="remember-me"
                                               name="remember">
                                        <label class="form-check-label" for="remember-me">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-6 text-end">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                           href="{{ route('password.request') }}">
                                            Forgot your password?
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>

                        @if(Route::has('register'))
                            <div class="mt-2 text-center">
                                Don't have an account? <a href="{{ route('register') }}">Register</a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('auth::layouts.master')

@section('title', 'Registration')

@section('content')
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="mx-auto" style="width: 200px; height: 200px;">
                <a href="{{ url('/') }}">
                    <x-application-logo/>
                </a>
            </div>
            <div class="card mx-auto shadow-sm">
                <div class="card-header text-center">
                    <h4>Register</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label required">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                   name="name"
                                   placeholder="Enter name" value="{{ old('name') }}">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="email" class="form-label required">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                           id="email"
                                           name="email"
                                           placeholder="Enter email address" value="{{ old('email') }}">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                        else.
                                    </div>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="phone" class="form-label required">Phone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                           id="phone"
                                           name="phone"
                                           placeholder="Enter phone number" value="{{ old('phone') }}">
                                    <div id="phoneHelp" class="form-text">We'll never share your phone with anyone
                                        else.
                                    </div>
                                    @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6 mb-3 mb-md-0">
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

                                <div class="col-md-6">
                                    <label for="password-confirmation" class="form-label required">Confirm
                                        Password</label>
                                    <input type="password"
                                           class="form-control @error('password_confirmation') is-invalid @enderror"
                                           id="password-confirmation" name="password_confirmation"
                                           placeholder="Retype password">
                                    @error('password_confirmation')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Register</button>
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

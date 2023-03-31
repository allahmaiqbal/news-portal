@extends('auth::layouts.master')

@section('title', 'Reset Password')

@section('content')
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="mx-auto" style="width: 200px; height: 200px;">
                <a href="{{ url('/') }}">
                    <x-application-logo/>
                </a>
            </div>
            <div class="card mx-auto shadow-sm">
                <div class="card-header text-center">
                    <h4>Password Reset</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="mb-3">
                            <label for="email" class="form-label required">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                   name="email" value="{{ old('email', $request->email) }}"
                                   placeholder="Enter email address" required readonly>
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
                                   placeholder="Enter password" autofocus required>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password-confirmation" class="form-label required">Confirm Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   id="password-confirmation" name="password_confirmation"
                                   placeholder="Retype password" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Reset Password</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

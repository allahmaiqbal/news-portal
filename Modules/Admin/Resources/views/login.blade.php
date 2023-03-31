@extends('admin::layouts.master')

@section('title', 'Admin')

@section('content')
    <!-- authentication -->
    <section class="authentication">

        <!-- main wrapper -->
        <div class="wrapper">
            <!-- alert -->
            @if(session()->has('error'))
                <div class="alert alert-danger p-2 mb-0 border-0 rounded-0" role="alert">
                    {{ session()->get('error') }}
                </div>
            @endif

            <div class="wrap-content">
                <div class="p-4 pt-2">
                    <!-- Brand logo -->
                    <div class="text-center">
                        <img src="{{ module_asset('resources/statics/backend/resources/images/logos/logo_with_name.svg') }}" class="logo" alt="Brand logo">
                    </div>
                    <hr>

                    <!-- page title -->
                    <div class="text-center mt-2 mb-3">
                        <h3 class="main-title">Signin</h3>
                    </div>

                    <!-- Sum text -->
                    <p class="px-4 text-center mb-3">
                        <small>
                            All the features is available in one account, Including HRM & CRM.
                            <a href="#" target="_blank">Learn more</a>
                        </small>
                    </p>

                    <!-- form -->
                    <form method="POST" action="{{ route('admin-login') }}">
                        @csrf
                        <div class="row g-3">
                            <!-- user ID -->
                            <div class="col-12">
                                <label for="email" class="form-label required">Email address</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="access@example.com" required>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <!-- password input -->
                            <div class="col-12">
                                <label for="password" class="form-label required">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password"
                                           placeholder="**********" required>
                                    <a href="#" class="pass-eye" onclick="show()"><i class="bi bi-eye-fill"></i></a>
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <!-- checkbox input -->
                            <div class="col-12">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" class="form-check-input" id="remember" value="">
                                    <label class="form-check-label" for="remember">Remember me</label>
                                </div>
                            </div>


                            <!-- button -->
                            <div class="col-12">
                                <button type="submit" class="btn w-100 btn-success custom-btn mr-2">
                                    <i class="bi bi-lock"></i>
                                    <span>Signin</span>
                                </button>
                            </div>

                        </div>
                    </form>

                    <!-- Sign in terms of use -->
                    <div class="text-center text-small my-2">
                        <small>
                            By clicking signin, you agree to our <br>
                            <a href="#" class="text-small">Terms</a>
                            and have read and acknowledge our
                            <a href="#" class="text-small">Global Privacy Statement.</a>

                            <p class="fw-bold mt-2">Updated on December 3, 2020</p>
                        </small>
                    </div>
                    <hr>

                    <div class="mt-2 text-center">
                        <!-- forgot password -->
                        <small class="d-block"><a href="forgot_password.html" >I forgot my Email address or Password</a></small>

                        <!-- Sign Up -->
                        <small class="d-block">New to this system? <a href="signup.html">Signup</a></small>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="row text-light text-small mt-2">
                <div class="col-md-8">
                    &copy; 2020
                    <a href="https://maxsop.com/" class="text-small" target="_blank">MaxSOP</a>.
                    <span> All rights reserved.</span>
                </div>

                <div class="col-md-4 text-end" style="word-spacing: 5px;">
                    <a href="#" class="text-small" target="_blank">Privacy</a> |
                    <a href="#" class="text-small" target="_blank">Support</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        function show() {
            var input = document.getElementsByName("password")[0],
                type = input.getAttribute("type");

            if (type === "password") {
                input.type = "text";
                document.querySelector('.bi-eye-fill').classList.add("bi-eye-slash-fill");
            } else {
                input.type = "password";
                document.querySelector('.bi-eye-fill').classList.remove("bi-eye-slash-fill");
            }
        }
    </script>
@endpush

@extends('layouts.guest')
@section('content')
<!-- BACKGROUND-IMAGE -->
<div class="login-img">
    <!-- global-loader -->
    <div id="global-loader">
        <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- global-loader closed -->
    <!-- PAGE -->
    <div class="page">
        <div class="">
            <!-- Theme-Layout -->
            <!-- CONTAINER OPEN -->


            <div class="container-login100">
                <div class="wrap-login100 p-8">
                    <div class="col-login mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/vert.jpg') }}" class="header-brand-img" alt="">
                        </div>
                    </div>
                    <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <span class="login100-form-title">
                            Registration
                        </span>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                            <i class="mdi mdi-account-card-details" aria-hidden="true"></i>
                                        </a>
                                        <input id="name" class="input100 form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="First Name" :value="old('name')" required autofocus />
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                            <i class="mdi mdi-email" aria-hidden="true"></i>
                                        </a>
                                        <input id="email" class="input100 form-control @error('email') is-invalid @enderror" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                            <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                                        </a>
                                        <input id="password" class="input100 form-control @error('password') is-invalid @enderror" name="password" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                            <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                                        </a>
                                        <input id="password_confirmation" class="input100 form-control" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pt-3">
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit" name="submit" value="Register">Register</button>
                        </div>
                        <div class="text-center pt-3">
                            <p class="text-dark mb-0">Already have account?<a href="{{ route('login') }}" class="text-primary ms-1">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!-- End PAGE -->
</div>
<!-- BACKGROUND-IMAGE CLOSED -->
@endsection
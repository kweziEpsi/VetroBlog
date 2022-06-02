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
                <div class="wrap-login100 p-6">
                    <div class="col-login mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/vert.jpg') }}" class="header-brand-img" alt="">
                        </div>
                    </div>
                    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <span class="login100-form-title pb-5">
                            Login
                        </span>
                        <div class="panel panel-primary">
                            <div class="panel-body tabs-menu-body p-0 pt-5">
                                <div class="tab-content">
                                    <div class="tab-pane active">
                                        <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input id="email" class="input100 form-control" type="email" name="email" :value="old('email')" placeholder="Enter Email" required autofocus />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input id="password" class="input100 form-control" type="password" name="password" placeholder="Enter Password" required autocomplete="new-password" />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="text-end pt-4">
                                            @if (Route::has('password.request'))
                                            <p class="mb-0"><a href="{{ route('password.request') }}" class="text-primary ms-1">Forgot Password?</a></p>
                                            @endif
                                        </div>
                                        <div class="container-login100-form-btn">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit" name="submit" value="Login">Login</button>
                                        </div>
                                        <div class="text-center pt-3">
                                            <p class="text-dark mb-0">Not a member?<a href="{{ route('register') }}" class="text-primary ms-1">Sign UP</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
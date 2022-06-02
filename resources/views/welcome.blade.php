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
            <!-- Theme-Layout -->
            <div class="col-login mx-auto">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/vert.jpg') }}" class="header-brand-img" alt="">
                    </div>
                </div>
            <!-- CONTAINER OPEN -->
            <div class="container-login100">
                <div class="wrap-login100 p-8">
                    <form class="login100-form validate-form">
                        <div class="container-login100-form-btn pt-0">
                            <a href="{{ route('login') }}" class="login100-form-btn btn-primary">
                                Login
                            </a>
                        </div>
                        <label class="login-social-icon"><span>OR</span></label>
                        <div class="container-login100-form-btn pt-0">
                            <a href="{{ route('register') }}" class="login100-form-btn btn-secondary">
                                Register
                            </a>
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
@extends('auth-layout')
@section('title', 'Login')
@section('content')

    <main id="main-container">
        <div class="bg-body-dark">
            <div class="hero-static content content-full px-1">
                <div class="row mx-0 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="py-4 text-center">
                            <a class="link-fx fw-bold" href="#">
                                <i class="fa fa-fire"></i>
                                <span class="fs-4 text-body-color">Let's</span><span class="fs-4">Teach</span>
                            </a>
                            <h1 class="h3 fw-bold mt-4 mb-1">
                                Welcome Back!
                            </h1>
                            <h2 class="fs-5 lh-base fw-normal text-muted mb-0">
                                Hope you're having a great day today!
                            </h2>
                        </div>

                        <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="block block-themed block-rounded block-fx-shadow">
                                <div class="block-header bg-gd-dusk">
                                    <h3 class="block-title">Please Sign In</h3>
                                </div>
                                <div class="block-content">
                                    <div class="mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" autocomplete="current-email" placeholder="Enter Email">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" autocomplete="current-password">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 d-sm-flex align-items-center">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="remember_me" name="remember_me">
                                                <label class="form-check-label" for="remember_me">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <button type="submit" class="btn btn-sm btn-alt-primary fw-medium">
                                                &nbsp;<i class="fa-solid fa-right-to-bracket opacity-75"></i>&nbsp;&nbsp;Sign In
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content block-content-full text-center">
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('login.google') }}" data-toggle="tooltip" data-placement="top" title="Google Sign In!"
                                           class="px-4 py-2 card shadow-sm">
                                            <div class="d-flex align-items-center w-100">
                                                <img src="{{ asset('assets/media/brand_logos/google.png') }}" class="" alt="google"
                                                     style="width: 30px; height: 30px;">
                                                <p style="margin-bottom: 0 !important; margin-left: 10px;">Continue using Google</p>
                                            </div>
                                        </a>
                                        <a href="{{ route('login.github') }}" data-toggle="tooltip" data-placement="top" title="GitHub Sign In!"
                                           class="px-4 py-2 card shadow-sm">
                                            <div class="d-flex align-items-center w-100">
                                                <img src="{{ asset('assets/media/brand_logos/github.png') }}" class="" alt="github"
                                                     style="width: 30px; height: 30px;">
                                                <p style="margin-bottom: 0 !important; margin-left: 10px;">Continue using GitHub</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="block-content block-content-full bg-body-light text-center d-flex justify-content-between">
                                    <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="{{ route('register') }}">
                                        <i class="fa fa-user-plus opacity-75 me-1"></i> Create Account
                                    </a>
                                    @if (Route::has('password.request'))
                                        <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="{{ route('password.request') }}">
                                            <i class="fa-solid fa-unlock-keyhole opacity-75 me-1"></i> Forgot Password
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

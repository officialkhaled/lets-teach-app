@extends('auth-layout')
@section('title', 'Reset Password')
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
                            <h2 class="h3 fw-bold mt-4 mb-1">
                                Password Reset Token
                            </h2>
                            <h5 class="fs-5 lh-base fw-normal text-muted mb-0">
                                Reset your password
                            </h5>
                        </div>

                        <form action="{{ route('password.store') }}" method="POST">
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="block block-themed block-rounded block-fx-shadow">
                                <div class="block-header bg-gd-dusk">
                                    <h3 class="block-title">Reset Password</h3>
                                </div>
                                <div class="block-content">
                                    <div class="mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" autocomplete="current-email"
                                               placeholder="Enter Email" value="{{ old('email', $request->email) }}">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password"
                                               autocomplete="new-password" required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="password_confirmation">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                                               placeholder="Confirm your password" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="block-content block-content-full bg-body-light text-center d-flex justify-content-end">
                                    <button type="submit" class="btn btn-sm btn-alt-primary fw-medium">
                                        <i class="fa-solid fa-save opacity-75"></i>&nbsp;&nbsp;Reset Password&nbsp;
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@extends('auth-layout')
@section('title', 'Forgot Password')
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
                                Forgot your password?
                            </h2>
                            <h5 class="fs-5 lh-base fw-normal text-muted mb-0">
                                No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                            </h5>
                        </div>

                        <form action="{{ route('password.email') }}" method="POST">
                            @csrf

                            <div class="block block-themed block-rounded block-fx-shadow">
                                <div class="block-header bg-gd-dusk">
                                    <h3 class="block-title">Reset Password</h3>
                                </div>
                                <div class="block-content">
                                    <div class="mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" autocomplete="current-email" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="block-content block-content-full bg-body-light text-center d-flex justify-content-end">
                                    <button type="submit" class="btn btn-sm btn-alt-primary fw-medium">
                                        &nbsp;<i class="fa-solid fa-right-to-bracket opacity-75"></i>&nbsp;&nbsp;Send Reset Link&nbsp;
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


{{--<x-guest-layout>--}}
{{--    <div class="mb-4 text-sm text-gray-600">--}}
{{--        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}--}}
{{--    </div>--}}

{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')"/>--}}

{{--    <form method="POST" action="{{ route('password.email') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')"/>--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus/>--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2"/>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Email Password Reset Link') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}

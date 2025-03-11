@extends('auth-layout')
@section('title', 'Confirm Password')
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
                                Confirm your password
                            </h2>
                            <h5 class="fs-5 lh-base fw-normal text-muted mb-0">
                                This is a secure area of the application. Please confirm your password before continuing.
                            </h5>
                        </div>

                        <form action="{{ route('password.confirm') }}" method="POST">
                            @csrf

                            <div class="block block-themed block-rounded block-fx-shadow">
                                <div class="block-header bg-gd-dusk">
                                    <h3 class="block-title">Confirm Password</h3>
                                </div>
                                <div class="block-content">
                                    <div class="mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                               required autocomplete="current-password" placeholder="Enter Password">
                                    </div>
                                </div>
                                <div class="block-content block-content-full bg-body-light text-center d-flex justify-content-between">
                                    <button type="submit" class="btn btn-sm btn-alt-primary fw-medium">
                                        <i class="fa-solid fa-save opacity-75"></i>&nbsp;&nbsp;Confirm&nbsp;
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
{{--        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}--}}
{{--    </div>--}}

{{--    <form method="POST" action="{{ route('password.confirm') }}">--}}
{{--        @csrf--}}

{{--        <!-- Password -->--}}
{{--        <div>--}}
{{--            <x-input-label for="password" :value="__('Password')"/>--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                          type="password" name="password" required autocomplete="current-password"/>--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2"/>--}}
{{--        </div>--}}

{{--        <div class="flex justify-end mt-4">--}}
{{--            <x-primary-button>--}}
{{--                {{ __('Confirm') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}

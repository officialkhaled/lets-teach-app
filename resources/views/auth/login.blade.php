<!doctype html>
<html lang="en" class="remember-theme">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Login</title>

    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
          integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <script src="{{ asset('assets/js/setTheme.js') }}"></script>
</head>

<body>

<div id="page-container" class="main-content-boxed">

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
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" autocomplete="current-password">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 d-sm-flex align-items-center push">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="remember_me" name="remember_me">
                                                <label class="form-check-label" for="remember_me">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-sm-end push">
                                            <button type="submit" class="btn btn-sm btn-alt-primary fw-medium">
                                                &nbsp;<i class="fa-solid fa-right-to-bracket opacity-75"></i>&nbsp;&nbsp;Sign In&nbsp;
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content block-content-full bg-body-light text-center d-flex justify-content-between">
                                    <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="{{ route('register') }}">
                                        <i class="fa fa-plus opacity-50 me-1"></i> Create Account
                                    </a>
                                    @if (Route::has('password.request'))
                                        <a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="{{ route('password.request') }}">
                                            Forgot Password
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
</div>

<script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/op_auth_signin.min.js') }}"></script>

</body>
</html>

<!doctype html>
<html lang="en" class="remember-theme">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>@yield('title', 'Let\'s Teach App'){{ View::hasSection('title') ? ' | Let\'s Teach App' : '' }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
          integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <script src="{{ asset('assets/js/setTheme.js') }}"></script>

    @yield('style')
</head>

<body>

<div id="page-container" class="main-content-boxed">

    @yield('content')

</div>

<script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>
<script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/op_auth_signin.min.js') }}"></script>

@if (session()->has('success') || session()->has('error'))
    @php
        $key = session()->has('success') ? 'success' : 'error';
        $icon = session()->has('success') ? 'fa-solid fa-square-check' : 'fa-solid fa-triangle-exclamation';
    @endphp

    <script>
        Codebase.helpers('jq-notify', {
            align: 'right',
            from: 'top',
            type: '{{ $key }}',
            icon: '{{ $icon }} me-2',
            message: '{{ session()->get($key) }}'
        });
    </script>
@endif

@yield('script')

</body>
</html>

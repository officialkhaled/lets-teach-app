<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CRM Software') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    {{--    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css"/>

    <style>
        .opacity-25 {
            opacity: 25%;
        }

        .opacity-50 {
            opacity: 50%;
        }

        .opacity-75 {
            opacity: 75%;
        }

        .btn {
            font-weight: bold;
        }

        .btn-primary, .btn-warning, .btn-info, .btn-danger, .btn-secondary, .btn-success {
            color: #fff !important;
        }

        .btn-primary:hover {
            background-color: #025197 !important;
        }

        .waves-effect {
            position: relative;
            cursor: pointer;
            display: inline-block;
            overflow: hidden;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
        }

        .bg-gradient {
            background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.192), rgba(255, 255, 255, 0)) !important;
        }

        .btn-success {
            background-color: #5CB85C !important;
            border-color: #5CB85C !important;
        }

        .btn-success:hover {
            background-color: #367c36 !important;
            border-color: #367c36 !important;
        }

        .btn-warning {
            background-color: #F0AD54 !important;
            border-color: #F0AD54 !important;
        }

        .btn-warning:hover {
            background-color: #d38012 !important;
            border-color: #d38012 !important;
        }

        .btn-info {
            background-color: #61BDE5 !important;
            border-color: #61BDE5 !important;
        }

        .btn-info:hover {
            background-color: #2094c5 !important;
            border-color: #2094c5 !important;
        }

        .btn-pdf {
            background-color: #C14643 !important;
            border-color: #C14643 !important;
        }

        .btn-pdf:hover {
            background-color: #862e2d !important;
            border-color: #862e2d !important;
        }

        .btn-excel {
            background-color: #5CB85C !important;
            border-color: #5CB85C !important;
        }

        .btn-excel:hover {
            background-color: #367c36 !important;
            border-color: #367c36 !important;
        }

        .btn-primary {
            background-color: #0275D8 !important;
            border-color: #0275D8 !important;
        }

        .btn-primary:hover {
            background-color: #01447e !important;
            border-color: #01447e !important;
        }

        .btn-refresh {
            background-color: #F0AD4E !important;
            border-color: #F0AD4E !important;
        }

        .btn-refresh:hover {
            background-color: #d38312 !important;
            border-color: #d38312 !important;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    @if (isset($header))
        <header class="bg-white shadow">
            <div class="mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <main>
        {{ $slot }}
    </main>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $.fn.select2.defaults.set("theme", "bootstrap-5");
    $.fn.select2.defaults.set("placeholder", "Select");

    function formSubmit(event) {
        event.preventDefault();
        this.closest('form').submit();
    }

    function previewAvatar(event) {
        const input = event.target;
        const preview = document.getElementById('preview_avatar');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function pageRefresh() {
        window.location.reload();
    }
</script>

@yield('scripts')

</body>
</html>

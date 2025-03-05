<!doctype html>
<html lang="en" class="remember-theme">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Let's Teach App</title>

    @include('components.common.links-styles')
</head>

<body>
<!--
  Available classes for #page-container:

  SIDEBAR & SIDE OVERLAY

	'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
	'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
	'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
	'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
	'sidebar-dark'                              Dark themed sidebar

	'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
	'side-overlay-o'                            Visible Side Overlay by default

	'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

	'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

  HEADER

	''                                          Static Header if no class is added
	'page-header-fixed'                         Fixed Header

  HEADER STYLE

	''                                          Classic Header style if no class is added
	'page-header-modern'                        Modern Header style
	'page-header-dark'                          Dark themed Header (works only with classic Header style)
	'page-header-glass'                         Light themed Header with transparency by default
												(absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
	'page-header-glass page-header-dark'        Dark themed Header with transparency by default
												(absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

  MAIN CONTENT LAYOUT

	''                                          Full width Main Content if no class is added
	'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
	'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-fixed page-header-modern main-content-boxed">
    @include('components.common.sidebar')
    @include('components.common.header')

    @yield('content')

    @include('components.common.footer')
</div>

@include('components.common.scripts')

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

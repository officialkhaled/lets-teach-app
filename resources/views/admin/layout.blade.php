<!doctype html>
<html lang="en" data-theme="corporate" style="-ms-overflow-style: none !important; scrollbar-width: none !important;">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Dashboard | Let's Teach App</title>
	
	@include('components.common.css')
</head>
<body>

<div class="container-sm h-lvh">
	@include('components.common.header')
	
	<div class="min-h-screen bg-gray-100">
		@yield('content')
	</div>
	
	@include('components.common.loader')
	
	@include('components.common.footer')
</div>

@include('components.common.script')

<script>

    window.addEventListener('beforeunload', function (e) {
        document.getElementById('loadingScreen').style.display = 'flex';
    });
    window.addEventListener('load', function (e) {
        document.getElementById('loadingOverlay').style.display = 'none';
    });

</script>

</body>
</html>
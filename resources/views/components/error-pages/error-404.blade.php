<!doctype html>
<html lang="en" class="remember-theme">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<title>404 Not Found!</title>
	
	<link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
	<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
	<link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">
	
	<script src="{{ asset('assets/js/setTheme.js') }}"></script>
</head>

<body>

<div id="page-container" class="main-content-boxed">
	<main id="main-container">
		<div class="hero bg-body-extra-light">
			<div class="hero-inner">
				<div class="content content-full">
					<div class="py-4 text-center">
						<div class="display-1 fw-bold text-danger">
							<i class="fa fa-exclamation-triangle opacity-50 me-1"></i> 404
						</div>
						<h1 class="fw-bold mt-5 mb-2">Oops.. The page you are looking for was not found!</h1>
						<h2 class="fs-4 fw-medium text-muted mb-5">We are sorry but you have to redirect now..</h2>
						<a class="btn btn-lg btn-alt-secondary" href="{{ route('dashboard') }}">
							<i class="fa fa-arrow-left opacity-50 me-1"></i> Go Back
						</a>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>

<script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>
</body>
</html>
<!doctype html>
<html lang="en" data-theme="corporate">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Welcome | Let's Teach App</title>
	
	@include('components.common.css')
</head>
<body>

<div class="container-lg h-lvh">
	{{-- Navbar --}}
	@include('components.common.header')
	
	
	<div class="hero bg-base-200 min-h-screen">
		<div class="hero-content flex-col lg:flex-row-reverse">
			<div>
				<img src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp" class="max-w-sm rounded-lg shadow-2xl" alt="Hero Image"/>
			</div>
			<div>
				<h1 class="text-5xl font-bold">Box Office News!</h1>
				<p class="py-6">
					Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
					quasi. In deleniti eaque aut repudiandae et a id nisi.
				</p>
				<button class="btn btn-primary btn-sm btn-white waves-effect bg-gradient">
					Get Started&nbsp;<i class="fas fa-play"></i></button>
			</div>
		</div>
	</div>
	
	
	@include('components.common.footer')
</div>

@include('components.common.script')

</body>
</html>
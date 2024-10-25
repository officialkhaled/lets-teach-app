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
	
	<div class="flex p-80">
		<div class="mx-auto">
			<button class="btn btn-primary btn-sm btn-white waves-effect bg-gradient">
				Click Me <i class="fas fa-video"></i>
			</button>
		</div>
	</div>
	
	@include('components.common.footer')
</div>

@include('components.common.script')

</body>
</html>
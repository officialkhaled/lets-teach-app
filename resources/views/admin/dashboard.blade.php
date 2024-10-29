<!doctype html>
<html lang="en" data-theme="corporate">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Dashboard | Let's Teach App</title>
	
	@include('components.common.css')
</head>
<body>

<div class="container-sm h-lvh">
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
	
	<div class="carousel w-full">
		<div id="item1" class="carousel-item w-full">
			<img
					src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp"
					class="w-full" alt=""/>
		</div>
		<div id="item2" class="carousel-item w-full">
			<img
					src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.webp"
					class="w-full" alt=""/>
		</div>
		<div id="item3" class="carousel-item w-full">
			<img
					src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.webp"
					class="w-full" alt=""/>
		</div>
		<div id="item4" class="carousel-item w-full">
			<img
					src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.webp"
					class="w-full" alt=""/>
		</div>
	</div>
	<div class="flex w-full justify-center gap-2 py-2">
		<a href="#item1" class="btn btn-xs">1</a>
		<a href="#item2" class="btn btn-xs">2</a>
		<a href="#item3" class="btn btn-xs">3</a>
		<a href="#item4" class="btn btn-xs">4</a>
	</div>
	
	
	<div class="container mx-auto overflow-x-auto py-12">
		<table class="table">
			<thead>
			<tr class="hover">
				<th></th>
				<th>Name</th>
				<th>Job</th>
				<th>Favorite Color</th>
			</tr>
			</thead>
			<tbody>
			<tr class="hover">
				<th>1</th>
				<td>Cy Ganderton</td>
				<td>Quality Control Specialist</td>
				<td>Blue</td>
			</tr>
			<tr class="hover">
				<th>2</th>
				<td>Hart Hagerty</td>
				<td>Desktop Support Technician</td>
				<td>Purple</td>
			</tr>
			<tr class="hover">
				<th>3</th>
				<td>Brice Swyre</td>
				<td>Tax Accountant</td>
				<td>Red</td>
			</tr>
			</tbody>
		</table>
	</div>
	
	@include('components.common.footer')
</div>

@include('components.common.script')

</body>
</html>
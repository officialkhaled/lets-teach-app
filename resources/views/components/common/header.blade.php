<div class="navbar bg-base-100 px-4">
	<div class="navbar-start">
		<div class="dropdown">
			<div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
				</svg>
			</div>
			<ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
				<li>
					@auth
						<a href="{{ route('admin.index') }}">Home</a>
					@endauth
					@guest
						<a href="{{ route('dashboard') }}">Home</a>
					@endguest
				</li>
				<li>
					@auth
						<a href="{{ route('admin.view') }}">Table</a>
					@endauth
				</li>
				<li>
					<a href="#">Link</a>
				</li>
				<li>
					<a>Dropdown</a>
					<ul class="p-2" style="z-index: 1">
						<li>
							<a href="#">Menu 1</a>
						</li>
						<li>
							<a href="#">Menu 2</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
		
		<a class="btn btn-ghost text-xl">APP</a>
	</div>
	
	<div class="navbar-center hidden lg:flex">
		<ul class="menu menu-horizontal px-1">
			<li>
				@auth
					<a href="{{ route('admin.index') }}">Home</a>
				@endauth
				@guest
					<a href="{{ view('dashboard') }}">Home</a>
				@endguest
			</li>
			<li>
				@auth
					<a href="{{ route('admin.view') }}">Table</a>
				@endauth
			</li>
			<li>
				<a href="#">Link</a>
			</li>
			<li>
				<details>
					<summary>Dropdown</summary>
					<ul class="p-2" style="z-index: 1">
						<li>
							<a href="#">Menu 1</a>
						</li>
						<li>
							<a href="#">Menu 2</a>
						</li>
					</ul>
				</details>
			</li>
		</ul>
	</div>
	
	<div class="navbar-end">
		<input type="checkbox" value="dark" class="toggle theme-controller mr-1"/>
		
		@auth
			<form method="POST" action="{{ route('logout') }}">
				@csrf
				<button class="btn btn-secondary btn-sm btn-white waves-effect bg-gradient ml-1">
					<i class="fas fa-sign-out-alt"></i> Logout
				</button>
			</form>
		@endauth
		
		@guest
			<a href="{{ route('login') }}" class="btn btn-info btn-sm btn-white waves-effect bg-gradient ml-1 mr-1">
				<i class="fas fa-power-off"></i> Login
			</a>
			<a href="{{ route('register') }}" class="btn btn-error btn-sm btn-white waves-effect bg-gradient ml-1 mr-1">
				<i class="fas fa-location-arrow"></i> Register
			</a>
		@endguest
	</div>
</div>
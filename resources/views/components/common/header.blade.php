<header id="page-header">
	<div class="content-header" style="padding-top: 0;">
		
		{{-- Left Part --}}
		<div class="space-x-1">
			<button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle" title="Toggle Sidebar">
				<i class="fa fa-fw fa-bars"></i>
			</button>
			
			<button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="header_search_on" title="Search...">
				<i class="fa fa-fw fa-search"></i>
			</button>
			
			<div class="dropdown d-inline-block">
				<button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-themes-dropdown" title="Theme"
						data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-fw fa-brush"></i>
				</button>
				<div class="dropdown-menu dropdown-menu-lg p-0" aria-labelledby="page-header-themes-dropdown">
					
					{{--					<div class="px-3 py-2 bg-body-light rounded-top">--}}
					{{--						<h5 class="fs-sm text-center mb-0">--}}
					{{--							Color Themes--}}
					{{--						</h5>--}}
					{{--					</div>--}}
					{{--					<div class="p-3">--}}
					{{--						<div class="row g-0 text-center">--}}
					{{--							<div class="col-2">--}}
					{{--								<a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">--}}
					{{--									<i class="fa fa-2x fa-circle"></i>--}}
					{{--								</a>--}}
					{{--							</div>--}}
					{{--							<div class="col-2">--}}
					{{--								<a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">--}}
					{{--									<i class="fa fa-2x fa-circle"></i>--}}
					{{--								</a>--}}
					{{--							</div>--}}
					{{--							<div class="col-2">--}}
					{{--								<a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">--}}
					{{--									<i class="fa fa-2x fa-circle"></i>--}}
					{{--								</a>--}}
					{{--							</div>--}}
					{{--							<div class="col-2">--}}
					{{--								<a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">--}}
					{{--									<i class="fa fa-2x fa-circle"></i>--}}
					{{--								</a>--}}
					{{--							</div>--}}
					{{--							<div class="col-2">--}}
					{{--								<a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">--}}
					{{--									<i class="fa fa-2x fa-circle"></i>--}}
					{{--								</a>--}}
					{{--							</div>--}}
					{{--							<div class="col-2">--}}
					{{--								<a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">--}}
					{{--									<i class="fa fa-2x fa-circle"></i>--}}
					{{--								</a>--}}
					{{--							</div>--}}
					{{--						</div>--}}
					{{--					</div>--}}
					
					<div class="px-3 py-2 bg-body-light rounded-top">
						<h5 class="fs-sm text-center mb-0">
							Mode
						</h5>
					</div>
					<div class="px-2 py-3">
						<div class="row g-1 text-center">
							<div class="col-4">
								<button type="button" class="dropdown-item mb-0 d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_off" data-dark-mode="off">
									<i class="far fa-sun fa-fw opacity-50"></i>
									<span class="fs-sm fw-medium">Light</span>
								</button>
							</div>
							<div class="col-4">
								<button type="button" class="dropdown-item mb-0 d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_on" data-dark-mode="on">
									<i class="fa fa-moon fa-fw opacity-50"></i>
									<span class="fs-sm fw-medium">Dark</span>
								</button>
							</div>
							<div class="col-4">
								<button type="button" class="dropdown-item mb-0 d-flex align-items-center gap-2" data-toggle="layout" data-action="dark_mode_system" data-dark-mode="system">
									<i class="fa fa-desktop fa-fw opacity-50"></i>
									<span class="fs-sm fw-medium">System</span>
								</button>
							</div>
						</div>
					</div>
					
					{{--					<div class="p-3 bg-body-light rounded-bottom">--}}
					{{--						<div class="row g-sm text-center">--}}
					{{--							<div class="col-6">--}}
					{{--								<a class="dropdown-item fs-sm fw-medium mb-0" href="#">--}}
					{{--									<i class="fa fa-flask opacity-50 me-1"></i> Layout API--}}
					{{--								</a>--}}
					{{--							</div>--}}
					{{--							<div class="col-12">--}}
					{{--								<a class="dropdown-item fs-sm fw-medium mb-0" href="#">--}}
					{{--									<i class="fa fa-paint-brush opacity-50 me-1"></i> Themes--}}
					{{--								</a>--}}
					{{--							</div>--}}
					{{--						</div>--}}
					{{--					</div>--}}
				
				</div>
			</div>
		</div>
		
		{{-- Right Part --}}
		@auth
			<div class="space-x-1">
				<div class="dropdown d-inline-block">
					<button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown"
							data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img class="img-avatar img-avatar32" style="margin-right: 6px; object-fit: cover"
							 onerror="{{ asset('assets/media/avatars/avatar15.jpg') }}"
							 src="{{ asset('storage/' . auth()->user()->image) }}" alt="Image">
						<span class="d-none d-sm-inline-block fw-semibold">{{ auth()->user()->name }}</span>
						<i class="fa fa-angle-down opacity-50 ms-1"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
						<div class="px-2 py-3 bg-body-light rounded-top">
							<h5 class="h6 text-center mb-0">
								{{ auth()->user()->name }}
							</h5>
						</div>
						<div class="p-2">
							@if (auth()->user()->role === 0)
								<a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"
								   href="{{ route('admin.profile.edit') }}">
									<span>Profile</span>
									<i class="fa fa-fw fa-user opacity-25"></i>
								</a>
							@endif
							@if (auth()->user()->role === 1)
								@php
									$tutor = \App\Models\Tutor::where('user_id', auth()->user()->id)->first();
								@endphp
								<a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"
								   href="{{ route('tutor.profile.edit', $tutor->id) }}">
									<span>Profile</span>
									<i class="fa fa-fw fa-user opacity-25"></i>
								</a>
							@endif
							@if (auth()->user()->role === 2)
								<a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"
								   href="{{ route('student.profile.edit') }}">
									<span>Profile</span>
									<i class="fa fa-fw fa-user opacity-25"></i>
								</a>
							@endif
							<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
								<span>Inbox</span>
								<i class="fa fa-fw fa-envelope-open opacity-25"></i>
							</a>
							
							<div class="dropdown-divider"></div>
							
							<a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"
							   href="#" data-toggle="layout" data-action="side_overlay_toggle">
								<span>Settings</span>
								<i class="fa fa-fw fa-wrench opacity-25"></i>
							</a>
							
							<div class="dropdown-divider"></div>
							
							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
								@csrf
								<button type="submit" class="dropdown-item d-flex align-items-center justify-content-between space-x-1">
									<span>Sign Out</span>
									<i class="fa fa-fw fa-sign-out-alt text-danger"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
				
				{{--				<div class="dropdown d-inline-block">--}}
				{{--					<button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
				{{--						<i class="fa fa-flag"></i>--}}
				{{--						<span class="text-primary">&bull;</span>--}}
				{{--					</button>--}}
				{{--					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications">--}}
				{{--						<div class="px-2 py-3 bg-body-light rounded-top">--}}
				{{--							<h5 class="h6 text-center mb-0">--}}
				{{--								Notifications--}}
				{{--							</h5>--}}
				{{--						</div>--}}
				{{--						<ul class="nav-items my-2 fs-sm">--}}
				{{--							<li>--}}
				{{--								<a class="text-dark d-flex py-2" href="javascript:void(0)">--}}
				{{--									<div class="flex-shrink-0 me-2 ms-3">--}}
				{{--										<i class="fa fa-fw fa-check text-success"></i>--}}
				{{--									</div>--}}
				{{--									<div class="flex-grow-1 pe-2">--}}
				{{--										<p class="fw-medium mb-1">You’ve upgraded to a VIP account successfully!</p>--}}
				{{--										<div class="text-muted">15 min ago</div>--}}
				{{--									</div>--}}
				{{--								</a>--}}
				{{--							</li>--}}
				{{--							<li>--}}
				{{--								<a class="text-dark d-flex py-2" href="javascript:void(0)">--}}
				{{--									<div class="flex-shrink-0 me-2 ms-3">--}}
				{{--										<i class="fa fa-fw fa-exclamation-triangle text-warning"></i>--}}
				{{--									</div>--}}
				{{--									<div class="flex-grow-1 pe-2">--}}
				{{--										<p class="fw-medium mb-1">Please check your payment info since we can’t validate them!</p>--}}
				{{--										<div class="text-muted">50 min ago</div>--}}
				{{--									</div>--}}
				{{--								</a>--}}
				{{--							</li>--}}
				{{--							<li>--}}
				{{--								<a class="text-dark d-flex py-2" href="javascript:void(0)">--}}
				{{--									<div class="flex-shrink-0 me-2 ms-3">--}}
				{{--										<i class="fa fa-fw fa-times text-danger"></i>--}}
				{{--									</div>--}}
				{{--									<div class="flex-grow-1 pe-2">--}}
				{{--										<p class="fw-medium mb-1">Web server stopped responding and it was automatically restarted!</p>--}}
				{{--										<div class="text-muted">4 hours ago</div>--}}
				{{--									</div>--}}
				{{--								</a>--}}
				{{--							</li>--}}
				{{--							<li>--}}
				{{--								<a class="text-dark d-flex py-2" href="javascript:void(0)">--}}
				{{--									<div class="flex-shrink-0 me-2 ms-3">--}}
				{{--										<i class="fa fa-fw fa-exclamation-triangle text-warning"></i>--}}
				{{--									</div>--}}
				{{--									<div class="flex-grow-1 pe-2">--}}
				{{--										<p class="fw-medium mb-1">Please consider upgrading your plan. You are running out of space.</p>--}}
				{{--										<div class="text-muted">16 hours ago</div>--}}
				{{--									</div>--}}
				{{--								</a>--}}
				{{--							</li>--}}
				{{--							<li>--}}
				{{--								<a class="text-dark d-flex py-2" href="javascript:void(0)">--}}
				{{--									<div class="flex-shrink-0 me-2 ms-3">--}}
				{{--										<i class="fa fa-fw fa-plus text-primary"></i>--}}
				{{--									</div>--}}
				{{--									<div class="flex-grow-1 pe-2">--}}
				{{--										<p class="fw-medium mb-1">New purchases! +$250</p>--}}
				{{--										<div class="text-muted">1 day ago</div>--}}
				{{--									</div>--}}
				{{--								</a>--}}
				{{--							</li>--}}
				{{--						</ul>--}}
				{{--						<div class="p-2 bg-body-light rounded-bottom">--}}
				{{--							<a class="dropdown-item text-center mb-0" href="javascript:void(0)">--}}
				{{--								<i class="fa fa-fw fa-flag opacity-50 me-1"></i> View All--}}
				{{--							</a>--}}
				{{--						</div>--}}
				{{--					</div>--}}
				{{--				</div>--}}
				{{--				<button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">--}}
				{{--					<i class="fa fa-fw fa-stream"></i>--}}
				{{--				</button>--}}
			</div>
		@endauth
		
		@guest
			<div class="space-x-1">
				<div class="dropdown d-inline-block">
					<button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-user d-sm-none"></i>
						<span class="d-none d-sm-inline-block fw-semibold">Name</span>
						<i class="fa fa-angle-down opacity-50 ms-1"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
						<div class="px-2 py-3 bg-body-light rounded-top">
							<h5 class="h6 text-center mb-0">
								Name
							</h5>
						</div>
						<div class="p-2">
							<a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="#">
								<span>Profile</span>
								<i class="fa fa-fw fa-user opacity-25"></i>
							</a>
							<a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
								<span>Inbox</span>
								<i class="fa fa-fw fa-envelope-open opacity-25"></i>
							</a>
							<a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="#">
								<span>Invoices</span>
								<i class="fa fa-fw fa-file opacity-25"></i>
							</a>
							<div class="dropdown-divider"></div>
							
							<a class="dropdown-item d-flex align-items-center justify-content-between space-x-1"
							   href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
								<span>Settings</span>
								<i class="fa fa-fw fa-wrench opacity-25"></i>
							</a>
							
							<div class="dropdown-divider"></div>
							<a class="dropdown-item d-flex align-items-center justify-content-between space-x-1" href="{{ route('logout') }}">
								<span>Sign Out</span>
								<i class="fa fa-fw fa-sign-out-alt opacity-25"></i>
							</a>
						</div>
					</div>
				</div>
				
				{{--				<div class="dropdown d-inline-block">--}}
				{{--					<button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
				{{--						<i class="fa fa-flag"></i>--}}
				{{--						<span class="text-primary">&bull;</span>--}}
				{{--					</button>--}}
				{{--					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications">--}}
				{{--						<div class="px-2 py-3 bg-body-light rounded-top">--}}
				{{--							<h5 class="h6 text-center mb-0">--}}
				{{--								Notifications--}}
				{{--							</h5>--}}
				{{--						</div>--}}
				{{--						<ul class="nav-items my-2 fs-sm">--}}
				{{--							<li>--}}
				{{--								<a class="text-dark d-flex py-2" href="javascript:void(0)">--}}
				{{--									<div class="flex-shrink-0 me-2 ms-3">--}}
				{{--										<i class="fa fa-fw fa-check text-success"></i>--}}
				{{--									</div>--}}
				{{--									<div class="flex-grow-1 pe-2">--}}
				{{--										<p class="fw-medium mb-1">You’ve upgraded to a VIP account successfully!</p>--}}
				{{--										<div class="text-muted">15 min ago</div>--}}
				{{--									</div>--}}
				{{--								</a>--}}
				{{--							</li>--}}
				{{--							<li>--}}
				{{--								<a class="text-dark d-flex py-2" href="javascript:void(0)">--}}
				{{--									<div class="flex-shrink-0 me-2 ms-3">--}}
				{{--										<i class="fa fa-fw fa-exclamation-triangle text-warning"></i>--}}
				{{--									</div>--}}
				{{--									<div class="flex-grow-1 pe-2">--}}
				{{--										<p class="fw-medium mb-1">Please check your payment info since we can’t validate them!</p>--}}
				{{--										<div class="text-muted">50 min ago</div>--}}
				{{--									</div>--}}
				{{--								</a>--}}
				{{--							</li>--}}
				{{--							<li>--}}
				{{--								<a class="text-dark d-flex py-2" href="javascript:void(0)">--}}
				{{--									<div class="flex-shrink-0 me-2 ms-3">--}}
				{{--										<i class="fa fa-fw fa-times text-danger"></i>--}}
				{{--									</div>--}}
				{{--									<div class="flex-grow-1 pe-2">--}}
				{{--										<p class="fw-medium mb-1">Web server stopped responding and it was automatically restarted!</p>--}}
				{{--										<div class="text-muted">4 hours ago</div>--}}
				{{--									</div>--}}
				{{--								</a>--}}
				{{--							</li>--}}
				{{--							<li>--}}
				{{--								<a class="text-dark d-flex py-2" href="javascript:void(0)">--}}
				{{--									<div class="flex-shrink-0 me-2 ms-3">--}}
				{{--										<i class="fa fa-fw fa-exclamation-triangle text-warning"></i>--}}
				{{--									</div>--}}
				{{--									<div class="flex-grow-1 pe-2">--}}
				{{--										<p class="fw-medium mb-1">Please consider upgrading your plan. You are running out of space.</p>--}}
				{{--										<div class="text-muted">16 hours ago</div>--}}
				{{--									</div>--}}
				{{--								</a>--}}
				{{--							</li>--}}
				{{--							<li>--}}
				{{--								<a class="text-dark d-flex py-2" href="javascript:void(0)">--}}
				{{--									<div class="flex-shrink-0 me-2 ms-3">--}}
				{{--										<i class="fa fa-fw fa-plus text-primary"></i>--}}
				{{--									</div>--}}
				{{--									<div class="flex-grow-1 pe-2">--}}
				{{--										<p class="fw-medium mb-1">New purchases! +$250</p>--}}
				{{--										<div class="text-muted">1 day ago</div>--}}
				{{--									</div>--}}
				{{--								</a>--}}
				{{--							</li>--}}
				{{--						</ul>--}}
				{{--						<div class="p-2 bg-body-light rounded-bottom">--}}
				{{--							<a class="dropdown-item text-center mb-0" href="javascript:void(0)">--}}
				{{--								<i class="fa fa-fw fa-flag opacity-50 me-1"></i> View All--}}
				{{--							</a>--}}
				{{--						</div>--}}
				{{--					</div>--}}
				{{--				</div>--}}
				{{--				<button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="side_overlay_toggle">--}}
				{{--					<i class="fa fa-fw fa-stream"></i>--}}
				{{--				</button>--}}
			</div>
		@endguest
	</div>
	
	{{-- Search Bar --}}
	<div id="page-header-search" class="overlay-header bg-body-extra-light">
		<div class="content-header">
			<form class="w-100" action="#" method="POST">
				<div class="input-group">
					<button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
						<i class="fa fa-fw fa-times"></i>
					</button>
					<input type="text" class="form-control" placeholder="Search..." id="page-header-search-input" name="page-header-search-input">
					<button type="submit" class="btn btn-secondary">
						<i class="fa fa-fw fa-search"></i>
					</button>
				</div>
			</form>
		</div>
	</div>
	
	{{-- Loader --}}
	<div id="page-header-loader" class="overlay-header bg-primary">
		<div class="content-header">
			<div class="w-100 text-center">
				<i class="far fa-sun fa-spin text-white"></i>
			</div>
		</div>
	</div>
</header>

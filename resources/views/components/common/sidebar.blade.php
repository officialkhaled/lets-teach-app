<!--
	  Helper classes
	  Adding .smini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
	  Adding .smini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
		If you would like to disable the transition, just add the .no-transition along with one of the previous 2 classes

	  Adding .smini-hidden to an element will hide it when the sidebar is in mini mode
	  Adding .smini-visible to an element will show it only when the sidebar is in mini mode
	  Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
	-->
<nav id="sidebar">
	<div class="sidebar-content">
		<div class="content-header justify-content-lg-center">
			{{-- Logo --}}
			<div>
				{{-- <span class="smini-visible fw-bold tracking-wide fs-lg">
				  l<span class="text-primary">t</span>
				</span> --}}
				<a class="link-fx fw-bold tracking-wide mx-auto" href="#">
                <span class="smini-hidden">
                  <i class="fa fa-fire text-primary"></i>
                  <span class="fs-4 text-dual">Let's</span><span class="fs-4 text-primary">Teach</span>
                </span>
				</a>
			</div>
			
			{{-- Close Button (Mobile View) --}}
			<div>
				<button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
					<i class="fa fa-fw fa-times"></i>
				</button>
			</div>
		</div>
		
		@if (auth()->user()->role == 0)
			<div class="js-sidebar-scroll">
				<div class="content	-side content-side-full" style="padding: 1px 1.5rem;">
					<ul class="nav-main">
						<li class="nav-main-item {{ request()->is('admin/dashboard') ? 'active-menu' : '' }}">
							<a class="nav-main-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ route('admin.index') }}">
								<i class="nav-main-link-icon fa-solid fa-house"></i>
								<span class="nav-main-link-name">Dashboard</span>
							</a>
						</li>
						<li class="nav-main-item {{ request()->is('admin/user-management*') ? 'active-menu' : '' }}">
							<a class="nav-main-link {{ request()->is('admin/user-management*') ? 'active' : '' }}"
							   href="{{ route('admin.user-management.index') }}">
								<i class="nav-main-link-icon fa-solid fa-users-gear"></i>
								<span class="nav-main-link-name">User Management</span>
							</a>
						</li>
						
						<li class="nav-main-item {{ request()->is('admin/tags-management*') ? 'active-menu' : '' }}">
							<a class="nav-main-link {{ request()->is('admin/tags-management*') ? 'active' : '' }}"
							   href="{{ route('admin.tags-management.index') }}">
								<i class="nav-main-link-icon fa-solid fa-tags"></i>
								<span class="nav-main-link-name">Tag Management</span>
							</a>
						</li>
						
						<li class="nav-main-item {{ request()->is('admin/content-moderation*') ? 'active-menu' : '' }}">
							<a class="nav-main-link nav-main-link-submenu {{ request()->is('admin/content-moderation*') ? 'active' : '' }}" data-toggle="submenu" href="#">
								<i class="nav-main-link-icon fa-solid fa-envelopes-bulk"></i>
								<span class="nav-main-link-name">Content Moderation</span>
							</a>
							<ul class="nav-main-submenu {{ request()->is('admin/content-moderation*') ? 'active-menu' : '' }}">
								<li class="nav-main-item {{ request()->is('admin/content-moderation/posts-management*') ? 'active' : '' }}">
									<a class="nav-main-link" href="{{ route('admin.content-moderation.posts.index') }}">
										<span class="nav-main-link-name">Posts</span>
									</a>
								</li>
								<li class="nav-main-item {{ request()->is('admin/content-moderation/reviews-management*') ? 'active' : '' }}">
									<a class="nav-main-link" href="{{ route('admin.content-moderation.reviews.index') }}">
										<span class="nav-main-link-name">Reviews</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		@endif
		
		@if (auth()->user()->role == 1)
			<div class="js-sidebar-scroll">
				{{-- <div class="content-side content-side-user px-0 py-0">
					<div class="smini-visible-block animated fadeIn px-3">
						<img class="img-avatar img-avatar32" src="{{ $user->image ? asset('storage/' . $user->image) : asset('assets/media/avatars/avatar15.jpg') }}" alt="">
					</div>

					<div class="smini-hidden text-center mx-auto">
						<a class="img-link" href="#">
							<img class="img-avatar" src="{{ $user->image ? asset('storage/' . $user->image) : asset('assets/media/avatars/avatar15.jpg') }}" alt="">
						</a>
						<ul class="list-inline mt-3 mb-0">
							<li class="list-inline-item">
								<a class="link-fx text-dual fs-sm fw-semibold text-uppercase" href="{{ route('admin.index') }}">{{ $user->name }}</a>
							</li>
							<li class="list-inline-item">
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
									@csrf

									<button type="submit" class="btn">
										<i class="fa fa-sign-out-alt text-danger"></i>
									</button>
								</form>
							</li>
						</ul>
					</div>
				</div> --}}
				
				<div class="content	-side content-side-full" style="padding: 1px 1.5rem;">
					<ul class="nav-main">
						<li class="nav-main-item {{ request()->is('admin/dashboard') ? 'active-menu' : '' }}">
							<a class="nav-main-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ route('admin.index') }}">
								<i class="nav-main-link-icon fa-solid fa-house"></i>
								<span class="nav-main-link-name">Dashboard</span>
							</a>
						</li>
						<li class="nav-main-item {{ request()->is('admin/user-management/users-list') ? 'active-menu' : '' }}">
							<a class="nav-main-link {{ request()->is('admin/user-management/users-list') ? 'active' : '' }}"
							   href="{{ route('admin.user-management.index') }}">
								<i class="nav-main-link-icon fas fa-address-card"></i>
								<span class="nav-main-link-name">Profile Management</span>
							</a>
						</li>
						
						<li class="nav-main-item ">
							<a class="nav-main-link " href="#">
								<i class="nav-main-link-icon fas fa-sitemap"></i>
								<span class="nav-main-link-name">Student Post Interaction</span>
							</a>
						</li>
						
						<li class="nav-main-item ">
							<a class="nav-main-link " href="#">
								<i class="nav-main-link-icon fas fa-star"></i>
								<span class="nav-main-link-name">Ratings and Reviews</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		@endif
		
		@if (auth()->user()->role == 2)
			<div class="js-sidebar-scroll">
				{{-- <div class="content-side content-side-user px-0 py-0">
					<div class="smini-visible-block animated fadeIn px-3">
						<img class="img-avatar img-avatar32" src="{{ $user->image ? asset('storage/' . $user->image) : asset('assets/media/avatars/avatar15.jpg') }}" alt="">
					</div>

					<div class="smini-hidden text-center mx-auto">
						<a class="img-link" href="#">
							<img class="img-avatar" src="{{ $user->image ? asset('storage/' . $user->image) : asset('assets/media/avatars/avatar15.jpg') }}" alt="">
						</a>
						<ul class="list-inline mt-3 mb-0">
							<li class="list-inline-item">
								<a class="link-fx text-dual fs-sm fw-semibold text-uppercase" href="{{ route('admin.index') }}">{{ $user->name }}</a>
							</li>
							<li class="list-inline-item">
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline">
									@csrf

									<button type="submit" class="btn">
										<i class="fa fa-sign-out-alt text-danger"></i>
									</button>
								</form>
							</li>
						</ul>
					</div>
				</div> --}}
				
				<div class="content	-side content-side-full" style="padding: 1px 1.5rem;">
					<ul class="nav-main">
						<li class="nav-main-item {{ request()->is('dashboard') ? 'active-menu' : '' }}">
							<a class="nav-main-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('admin.index') }}">
								<i class="nav-main-link-icon fa-solid fa-house"></i>
								<span class="nav-main-link-name">Dashboard</span>
							</a>
						</li>
						<li class="nav-main-item {{ request()->is('profile-management*') ? 'active-menu' : '' }}">
							<a class="nav-main-link {{ request()->is('profile-management*') ? 'active' : '' }}"
							   href="{{ route('admin.user-management.index') }}">
								<i class="nav-main-link-icon fas fa-address-card"></i>
								<span class="nav-main-link-name">Profile Management</span>
							</a>
						</li>
						
						<li class="nav-main-item ">
							<a class="nav-main-link " href="#">
								<i class="nav-main-link-icon fas fa-tasks"></i>
								<span class="nav-main-link-name">Post Management</span>
							</a>
						</li>
						
						<li class="nav-main-item ">
							<a class="nav-main-link " href="#">
								<i class="nav-main-link-icon fas fa-chalkboard-teacher"></i>
								<span class="nav-main-link-name">Tutor Interaction</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		@endif
	</div>
</nav>

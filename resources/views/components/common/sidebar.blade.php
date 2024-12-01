<nav id="sidebar">
	<div class="sidebar-content">
		<div class="content-header justify-content-lg-center">
			<div>
				<a class="link-fx fw-bold tracking-wide mx-auto" href="#">
                <span class="smini-hidden">
                  <i class="fa fa-fire text-primary"></i>
                  <span class="fs-4 text-dual">Let's</span><span class="fs-4 text-primary">Teach</span>
                </span>
				</a>
			</div>
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
							<a class="nav-main-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ route('admin.admin-dashboard') }}">
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
						
						<li class="nav-main-item {{ request()->is('admin/content-moderation*') ? 'active-menu open' : '' }}">
							<a class="nav-main-link nav-main-link-submenu {{ request()->is('admin/content-moderation*') ? 'active' : '' }}" data-toggle="submenu" href="#">
								<i class="nav-main-link-icon fa-brands fa-contao"></i>
								<span class="nav-main-link-name">Content Moderation</span>
							</a>
							<ul class="nav-main-submenu {{ request()->is('admin/content-moderation*') ? 'active-menu' : '' }}">
								<li class="nav-main-item">
									<a class="nav-main-link {{ request()->is('admin/content-moderation/posts*') ? 'active' : '' }}"
									   href="{{ route('admin.content-moderation.posts.index') }}">
										<i class="nav-main-link-icon fa-solid fa-layer-group"></i>
										<span class="nav-main-link-name">Posts</span>
									</a>
								</li>
								<li class="nav-main-item {{ request()->is('admin/content-moderation/reviews-management*') ? 'active' : '' }}">
									<a class="nav-main-link {{ request()->is('admin/content-moderation/reviews*') ? 'active' : '' }}"
									   href="{{ route('admin.content-moderation.reviews.index') }}">
										<i class="nav-main-link-icon fa-solid fa-star"></i>
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
				<div class="content	-side content-side-full" style="padding: 1px 1.5rem;">
					<ul class="nav-main">
						<li class="nav-main-item {{ request()->is('admin/dashboard') ? 'active-menu' : '' }}">
							<a class="nav-main-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ route('tutor.tutor-dashboard') }}">
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
				<div class="content	-side content-side-full" style="padding: 1px 1.5rem;">
					<ul class="nav-main">
						<li class="nav-main-item {{ request()->is('student/dashboard') ? 'active-menu' : '' }}">
							<a class="nav-main-link {{ request()->is('student/dashboard') ? 'active' : '' }}" href="{{ route('student.student-dashboard') }}">
								<i class="nav-main-link-icon fa-solid fa-house"></i>
								<span class="nav-main-link-name">Dashboard</span>
							</a>
						</li>
						<li class="nav-main-item {{ request()->is('student/profile-management*') ? 'active-menu' : '' }}">
							<a class="nav-main-link {{ request()->is('student/profile-management*') ? 'active' : '' }}"
							   href="{{ route('student.posts.index') }}">
								<i class="nav-main-link-icon fas fa-address-card"></i>
								<span class="nav-main-link-name">Profile Management</span>
							</a>
						</li>
						
						<li class="nav-main-item {{ request()->is('student/posts*') ? 'active-menu' : '' }}">
							<a class="nav-main-link  {{ request()->is('student/posts*') ? 'active' : '' }}"
							   href="{{ route('student.posts.index') }}">
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

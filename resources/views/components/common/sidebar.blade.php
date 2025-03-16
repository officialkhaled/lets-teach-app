<nav id="sidebar">
    <div class="sidebar-content">
        {{-- Application Logo --}}
        <div class="content-header justify-content-lg-center">
            <div>
                <a class="link-fx fw-bold tracking-wide mx-auto" href="#">
                    <span class="smini-hidden">
                        <i class="fa-solid fa-user-graduate text-primary"></i>
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

{{--        <div class="js-sidebar-scroll">--}}
{{--            <div class="content	-side content-side-full" style="padding: 1px 1.5rem;">--}}
{{--                <ul class="nav-main">--}}
{{--                    <li class="nav-main-item {{ request()->is('dashboard') ? 'active-menu' : '' }}">--}}
{{--                        <a class="nav-main-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('admin-dashboard') }}">--}}
{{--                            <i class="nav-main-link-icon fa-solid fa-house"></i>--}}
{{--                            <span class="nav-main-link-name">Dashboard</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}

{{--                    <li class="nav-main-item {{ request()->is('content-moderation*') ? 'active-menu open' : '' }}">--}}
{{--                        <a class="nav-main-link nav-main-link-submenu {{ request()->is('content-moderation*') ? 'active' : '' }}" data-toggle="submenu" href="#">--}}
{{--                            <i class="nav-main-link-icon fa-brands fa-contao"></i>--}}
{{--                            <span class="nav-main-link-name">Content Moderation</span>--}}
{{--                        </a>--}}
{{--                        <ul class="nav-main-submenu {{ request()->is('content-moderation*') ? 'active-menu' : '' }}">--}}
{{--                            @can('View Posts')--}}
{{--                                <li class="nav-main-item">--}}
{{--                                    <a class="nav-main-link {{ request()->is('content-moderation/posts*') ? 'active' : '' }}"--}}
{{--                                       href="{{ route('content-moderation.posts.index') }}">--}}
{{--                                        <i class="nav-main-link-icon fa-solid fa-layer-group"></i>--}}
{{--                                        <span class="nav-main-link-name">Posts Management</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endcan--}}
{{--                            @can('View Reviews')--}}
{{--                                <li class="nav-main-item {{ request()->is('content-moderation/reviews-management*') ? 'active' : '' }}">--}}
{{--                                    <a class="nav-main-link {{ request()->is('content-moderation/reviews*') ? 'active' : '' }}"--}}
{{--                                       href="{{ route('content-moderation.reviews.index') }}">--}}
{{--                                        <i class="nav-main-link-icon fa-solid fa-star"></i>--}}
{{--                                        <span class="nav-main-link-name">Reviews</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endcan--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="nav-main-item {{ request()->is('settings*') ? 'active-menu open' : '' }}">--}}
{{--                        <a class="nav-main-link nav-main-link-submenu {{ request()->is('settings*') ? 'active' : '' }}" data-toggle="submenu" href="#">--}}
{{--                            <i class="nav-main-link-icon fa-solid fa-gear"></i>--}}
{{--                            <span class="nav-main-link-name">Settings</span>--}}
{{--                        </a>--}}
{{--                        <ul class="nav-main-submenu {{ request()->is('settings*') ? 'active-menu' : '' }}">--}}
{{--                            @can('View Permissions')--}}
{{--                                <li class="nav-main-item {{ request()->is('settings/permissions*') ? 'active-menu' : '' }}">--}}
{{--                                    <a class="nav-main-link {{ request()->is('settings/permissions*') ? 'active' : '' }}"--}}
{{--                                       href="{{ route('settings.permissions.index') }}">--}}
{{--                                        <i class="nav-main-link-icon fa-solid fa-lock"></i>--}}
{{--                                        <span class="nav-main-link-name">Permissions</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endcan--}}
{{--                            @can('View Roles')--}}
{{--                                <li class="nav-main-item {{ request()->is('settings/roles*') ? 'active-menu' : '' }}">--}}
{{--                                    <a class="nav-main-link {{ request()->is('settings/roles*') ? 'active' : '' }}"--}}
{{--                                       href="{{ route('settings.roles.index') }}">--}}
{{--                                        <i class="nav-main-link-icon fa-solid fa-key"></i>--}}
{{--                                        <span class="nav-main-link-name">Roles</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endcan--}}
{{--                            @can('View Users')--}}
{{--                                <li class="nav-main-item {{ request()->is('settings/users*') ? 'active-menu' : '' }}">--}}
{{--                                    <a class="nav-main-link {{ request()->is('settings/users*') ? 'active' : '' }}"--}}
{{--                                       href="{{ route('settings.users.index') }}">--}}
{{--                                        <i class="nav-main-link-icon fa-solid fa-users-gear"></i>--}}
{{--                                        <span class="nav-main-link-name">Users</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            @endcan--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    --}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}


        @if (currentUser()->roles?->first()->name == 'super-admin' || currentUser()->roles?->first()->name == 'admin')
            <div class="js-sidebar-scroll">
                <div class="content	-side content-side-full" style="padding: 1px 1.5rem;">
                    <ul class="nav-main">
                        <li class="nav-main-item {{ request()->is('admin/dashboard') ? 'active-menu' : '' }}">
                            <a class="nav-main-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ route('admin.admin-dashboard') }}">
                                <i class="nav-main-link-icon fa-solid fa-house"></i>
                                <span class="nav-main-link-name">Dashboard</span>
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
                                        <span class="nav-main-link-name">Posts Management</span>
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

                        <li class="nav-main-item {{ request()->is('admin/settings*') ? 'active-menu open' : '' }}">
                            <a class="nav-main-link nav-main-link-submenu {{ request()->is('admin/settings*') ? 'active' : '' }}" data-toggle="submenu" href="#">
                                <i class="nav-main-link-icon fa-solid fa-gear"></i>
                                <span class="nav-main-link-name">Settings</span>
                            </a>
                            <ul class="nav-main-submenu {{ request()->is('admin/settings*') ? 'active-menu' : '' }}">
                                <li class="nav-main-item {{ request()->is('admin/settings/permissions*') ? 'active-menu' : '' }}">
                                    <a class="nav-main-link {{ request()->is('admin/settings/permissions*') ? 'active' : '' }}"
                                       href="{{ route('admin.settings.permissions.index') }}">
                                        <i class="nav-main-link-icon fa-solid fa-lock"></i>
                                        <span class="nav-main-link-name">Permissions</span>
                                    </a>
                                </li>

                                <li class="nav-main-item {{ request()->is('admin/settings/roles*') ? 'active-menu' : '' }}">
                                    <a class="nav-main-link {{ request()->is('admin/settings/roles*') ? 'active' : '' }}"
                                       href="{{ route('admin.settings.roles.index') }}">
                                        <i class="nav-main-link-icon fa-solid fa-key"></i>
                                        <span class="nav-main-link-name">Roles</span>
                                    </a>
                                </li>

                                <li class="nav-main-item {{ request()->is('admin/settings/users*') ? 'active-menu' : '' }}">
                                    <a class="nav-main-link {{ request()->is('admin/settings/users*') ? 'active' : '' }}"
                                       href="{{ route('admin.settings.users.index') }}">
                                        <i class="nav-main-link-icon fa-solid fa-users-gear"></i>
                                        <span class="nav-main-link-name">Users</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        @endif

        @if (currentUser()->roles?->first()->name == 'tutor')
            @php($tutor = \App\Models\Tutor::query()->firstWhere('user_id', userId()))
            <div class="js-sidebar-scroll">
                <div class="content	-side content-side-full" style="padding: 1px 1.5rem;">
                    <ul class="nav-main">
                        <li class="nav-main-item {{ request()->is('tutor/dashboard') ? 'active-menu' : '' }}">
                            <a class="nav-main-link {{ request()->is('tutor/dashboard') ? 'active' : '' }}" href="{{ route('tutor.tutor-dashboard') }}">
                                <i class="nav-main-link-icon fa-solid fa-house"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-main-item  {{ request()->is('tutor/job-posts*') ? 'active-menu' : '' }}">
                            <a class="nav-main-link  {{ request()->is('tutor/job-posts*') ? 'active' : '' }}" href="{{ route('tutor.job-posts.index') }}">
                                <i class="nav-main-link-icon fas fa-sitemap"></i>
                                <span class="nav-main-link-name">Job Posts</span>
                            </a>
                        </li>

                        {{--						<li class="nav-main-item ">--}}
                        {{--							<a class="nav-main-link " href="#">--}}
                        {{--								<i class="nav-main-link-icon fas fa-star"></i>--}}
                        {{--								<span class="nav-main-link-name">Ratings and Reviews</span>--}}
                        {{--							</a>--}}
                        {{--						</li>--}}
                    </ul>
                </div>
            </div>
        @endif

        @if (currentUser()->roles?->first()->name == 'student')
            @php($student = \App\Models\Student::query()->firstWhere('user_id', userId()))
            <div class="js-sidebar-scroll">
                <div class="content	-side content-side-full" style="padding: 1px 1.5rem;">
                    <ul class="nav-main">
                        <li class="nav-main-item {{ request()->is('student/dashboard') ? 'active-menu' : '' }}">
                            <a class="nav-main-link {{ request()->is('student/dashboard') ? 'active' : '' }}" href="{{ route('student.student-dashboard') }}">
                                <i class="nav-main-link-icon fa-solid fa-house"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-main-item {{ request()->is('student/profile*') ? 'active-menu' : '' }}">
                            <a class="nav-main-link  {{ request()->is('student/profile*') ? 'active' : '' }}"
                               href="{{ route('student.profile.edit', $student->id) }}">
                                <i class="nav-main-link-icon fa-solid fa-user"></i>
                                <span class="nav-main-link-name">Profile Management</span>
                            </a>
                        </li>

                        <li class="nav-main-item {{ request()->is('student/posts-management*') ? 'active-menu' : '' }}">
                            <a class="nav-main-link  {{ request()->is('student/posts-management*') ? 'active' : '' }}"
                               href="{{ route('student.posts-management.index') }}">
                                <i class="nav-main-link-icon fa-solid fa-newspaper"></i>
                                <span class="nav-main-link-name">Posts Management</span>
                            </a>
                        </li>

                        <li class="nav-main-item  {{ request()->is('student/tutor-interaction*') ? 'active-menu' : '' }}">
                            <a class="nav-main-link  {{ request()->is('student/tutor-interaction*') ? 'active' : '' }}" href="#">
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

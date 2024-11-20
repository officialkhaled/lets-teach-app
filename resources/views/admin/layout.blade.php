<!doctype html>
<html lang="en" class="remember-theme">
<head>
	<!--
	  Available classes for <html> element:
	  'dark'                  Enable dark mode - Default dark mode preference can be set in app.js file (always saved and retrieved in localStorage afterwards):
								window.Codebase = new App({ darkMode: "system" }); // "on" or "off" or "system"
	  'dark-custom-defined'   Dark mode is always set based on the preference in app.js file (no localStorage is used)
	  'remember-theme'        Remembers active color theme between pages using localStorage when set through
								- Theme helper buttons [data-toggle="theme"]
	-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<title>Admin Dashboard</title>
	
	<link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
	<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
	
	<link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
		  integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
	<!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
	<!-- END Stylesheets -->
	<script src="{{ asset('assets/js/setTheme.js') }}"></script>
	
	<style>
        #page-container.main-content-boxed > #main-container .content,
        #page-container.main-content-boxed > #page-footer .content,
        #page-container.main-content-boxed > #page-header .content,
        #page-container.main-content-boxed > #page-header .content-header {
            max-width: 1740px !important;
        }
	</style>
</head>

<body>
<!--
  Available classes for #page-container:

  SIDEBAR & SIDE OVERLAY

	'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
	'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
	'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
	'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
	'sidebar-dark'                              Dark themed sidebar

	'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
	'side-overlay-o'                            Visible Side Overlay by default

	'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

	'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

  HEADER

	''                                          Static Header if no class is added
	'page-header-fixed'                         Fixed Header

  HEADER STYLE

	''                                          Classic Header style if no class is added
	'page-header-modern'                        Modern Header style
	'page-header-dark'                          Dark themed Header (works only with classic Header style)
	'page-header-glass'                         Light themed Header with transparency by default
												(absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
	'page-header-glass page-header-dark'        Dark themed Header with transparency by default
												(absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

  MAIN CONTENT LAYOUT

	''                                          Full width Main Content if no class is added
	'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
	'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed page-header-modern main-content-boxed">
	<aside id="side-overlay">
		<div class="content-header">
			<a class="img-link me-2" href="#">
				<img class="img-avatar img-avatar32" src="{{ asset('assets/media/avatars/avatar15.jpg') }}" alt="Profile Image">
			</a>
			
			<a class="link-fx text-body-color-dark fw-semibold fs-sm" href="#">
				Khaled Hossain
			</a>
			
			<button type="button" class="btn btn-sm btn-alt-danger ms-auto" data-toggle="layout" data-action="side_overlay_close">
				<i class="fa fa-fw fa-times"></i>
			</button>
		</div>
		
		<div class="content-side">
			<div class="block pull-t pull-x">
				<div class="block-content block-content-full block-content-sm bg-body-light">
					<form action="#" method="POST">
						<div class="input-group">
							<input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
							<button type="submit" class="btn btn-secondary">
								<i class="fa fa-search"></i>
							</button>
						</div>
					</form>
				</div>
			</div>
			
			<div class="block pull-x">
				<div class="block-content block-content-full block-content-sm bg-body-light">
					<div class="row text-center">
						<div class="col-4">
							<div class="fs-sm fw-semibold text-uppercase text-muted">Clients</div>
							<div class="fs-4">460</div>
						</div>
						<div class="col-4">
							<div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
							<div class="fs-4">728</div>
						</div>
						<div class="col-4">
							<div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
							<div class="fs-4">$7,860</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="block pull-x">
				<div class="block-header bg-body-light">
					<h3 class="block-title">
						<i class="fa fa-fw fa-users opacity-50 me-1"></i> Friends
					</h3>
					<div class="block-options">
						<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
							<i class="si si-refresh"></i>
						</button>
						<button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
					</div>
				</div>
				<div class="block-content">
					<ul class="nav-users">
						<li>
							<a href="#">
								<img class="img-avatar" src="{{ asset('assets/media/avatars/avatar4.jpg') }}" alt="">
								<i class="fa fa-circle text-success"></i>
								<div>Carol White</div>
								<div class="fw-normal fs-xs text-muted">Photographer</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img class="img-avatar" src="{{ asset('assets/media/avatars/avatar12.jpg') }}" alt="">
								<i class="fa fa-circle text-success"></i>
								<div>Brian Stevens</div>
								<div class="fw-normal fs-xs text-muted">Web Designer</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img class="img-avatar" src="{{ asset('assets/media/avatars/avatar1.jpg') }}" alt="">
								<i class="fa fa-circle text-warning"></i>
								<div>Betty Kelley</div>
								<div class="fw-normal fs-xs text-muted">UI Designer</div>
							</a>
						</li>
						<li>
							<a href="#">
								<img class="img-avatar" src="{{ asset('assets/media/avatars/avatar13.jpg') }}" alt="">
								<div>Jeffrey Shaw</div>
								<div class="fw-normal fs-xs text-muted">Copywriter</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- END Friends -->
			
			<!-- Activity -->
			<div class="block pull-x">
				<div class="block-header bg-body-light">
					<h3 class="block-title">
						<i class="far fa-fw fa-clock opacity-50 me-1"></i> Activity
					</h3>
					<div class="block-options">
						<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
							<i class="si si-refresh"></i>
						</button>
						<button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
					</div>
				</div>
				<div class="block-content">
					<ul class="list list-activity mb-0">
						<li>
							<i class="si si-wallet text-success"></i>
							<div class="fs-sm fw-semibold">+$29 New sale</div>
							<div class="fs-sm">
								<a href="javascript:void(0)">Admin Template</a>
							</div>
							<div class="fs-xs text-muted">5 min ago</div>
						</li>
						<li>
							<i class="si si-close text-danger"></i>
							<div class="fs-sm fw-semibold">Project removed</div>
							<div class="fs-sm">
								<a href="javascript:void(0)">Best Icon Set</a>
							</div>
							<div class="fs-xs text-muted">26 min ago</div>
						</li>
						<li>
							<i class="si si-pencil text-info"></i>
							<div class="fs-sm fw-semibold">You edited the file</div>
							<div class="fs-sm">
								<a href="javascript:void(0)">
									<i class="fa fa-file-alt"></i> Docs.doc
								</a>
							</div>
							<div class="fs-xs text-muted">3 hours ago</div>
						</li>
						<li>
							<i class="si si-plus text-success"></i>
							<div class="fs-sm fw-semibold">New user</div>
							<div class="fs-sm">
								<a href="javascript:void(0)">StudioWeb - View Profile</a>
							</div>
							<div class="fs-xs text-muted">5 hours ago</div>
						</li>
						<li>
							<i class="si si-wrench text-warning"></i>
							<div class="fs-sm fw-semibold">App v5.5 is available</div>
							<div class="fs-sm">
								<a href="javascript:void(0)">Update now</a>
							</div>
							<div class="fs-xs text-muted">8 hours ago</div>
						</li>
						<li>
							<i class="si si-user-follow text-pulse"></i>
							<div class="fs-sm fw-semibold">+1 Friend Request</div>
							<div class="fs-sm">
								<a href="javascript:void(0)">Accept</a>
							</div>
							<div class="fs-xs text-muted">1 day ago</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- END Activity -->
			
			<!-- Profile -->
			<div class="block pull-x">
				<div class="block-header bg-body-light">
					<h3 class="block-title">
						<i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i> Profile
					</h3>
					<div class="block-options">
						<button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
					</div>
				</div>
				<div class="block-content block-content-full">
					<form action="be_pages_dashboard.html" method="POST" onsubmit="return false;">
						<div class="mb-3">
							<label class="form-label" for="side-overlay-profile-name">Name</label>
							<div class="input-group">
								<input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
								<span class="input-group-text">
                      <i class="fa fa-user"></i>
                    </span>
							</div>
						</div>
						<div class="mb-3">
							<label class="form-label" for="side-overlay-profile-email">Email</label>
							<div class="input-group">
								<input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">
								<span class="input-group-text">
                      <i class="fa fa-envelope"></i>
                    </span>
							</div>
						</div>
						<div class="mb-3">
							<label class="form-label" for="side-overlay-profile-password">New Password</label>
							<div class="input-group">
								<input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
								<span class="input-group-text">
                      <i class="fa fa-asterisk"></i>
                    </span>
							</div>
						</div>
						<div class="mb-3">
							<label class="form-label" for="side-overlay-profile-password-confirm">Confirm New Password</label>
							<div class="input-group">
								<input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
								<span class="input-group-text">
                      <i class="fa fa-asterisk"></i>
                    </span>
							</div>
						</div>
						<div class="row">
							<div class="col-6">
								<button type="submit" class="btn btn-alt-primary">
									<i class="fa fa-sync opacity-50 me-1"></i> Update
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- END Profile -->
			
			<!-- Settings -->
			<div class="block pull-x">
				<div class="block-header bg-body-light">
					<h3 class="block-title">
						<i class="fa fa-fw fa-wrench opacity-50 me-1"></i> Settings
					</h3>
					<div class="block-options">
						<button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
					</div>
				</div>
				<div class="block-content block-content-full">
					<div class="mb-4">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-status" name="side-overlay-settings-security-status" checked>
							<label class="form-check-label fw-medium" for="side-overlay-settings-security-status">Online Status</label>
							<div class="fs-sm text-muted">Show your status to all</div>
						</div>
					</div>
					<div class="mb-4">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-verify" name="side-overlay-settings-security-verify">
							<label class="form-check-label fw-medium" for="side-overlay-settings-security-verify">Verify on Login</label>
							<div class="fs-sm text-muted">Most secure option</div>
						</div>
					</div>
					<div class="mb-4">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-updates" name="side-overlay-settings-security-updates" checked>
							<label class="form-check-label fw-medium" for="side-overlay-settings-security-updates">Auto Updates</label>
							<div class="fs-sm text-muted">Keep app updated</div>
						</div>
					</div>
					<div class="mb-4">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-notifications" name="side-overlay-settings-security-notifications" checked>
							<label class="form-check-label fw-medium" for="side-overlay-settings-security-notifications">Notifications</label>
							<div class="fs-sm text-muted">For every transaction</div>
						</div>
					</div>
					<div class="mb-4">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-api" name="side-overlay-settings-security-api" checked>
							<label class="form-check-label fw-medium" for="side-overlay-settings-security-api">API Access</label>
							<div class="fs-sm text-muted">Enable access from third party apps</div>
						</div>
					</div>
					<div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="side-overlay-settings-security-2fa" name="side-overlay-settings-security-2fa">
							<label class="form-check-label fw-medium" for="side-overlay-settings-security-2fa">Two Factor Auth</label>
							<div class="fs-sm text-muted">Using an authenticator</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END Settings -->
		</div>
	</aside>
	@include('components.common.sidebar')
	
	@include('components.common.header')
	
	@yield('content')
	
	@include('components.common.footer')
</div>

<script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('assets/js/pages/be_pages_dashboard.min.js') }}"></script>
</body>
</html>
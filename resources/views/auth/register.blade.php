<!doctype html>
<html lang="en" class="remember-theme">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title>Register</title>

	<link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
	<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
	<link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css"/>

	<script src="{{ asset('assets/js/setTheme.js') }}"></script>
</head>

<body>

<div id="page-container" class="main-content-boxed">
	<main id="main-container">
		<div class="bg-body-dark">
			<div class="hero-static content content-full px-1">
				<div class="row mx-0 justify-content-center">
					<div class="col-lg-8 col-xl-6">
						<div class="text-center">
							<a class="link-fx fw-bold" href="#">
								<i class="fa fa-fire"></i>
								<span class="fs-4 text-body-color">Let's</span><span class="fs-4">Teach</span>
							</a>
							<h1 class="h3 fw-bold mt-2 mb-0">
								Create New Account
							</h1>
							<h2 class="fs-5 lh-base fw-normal text-muted mb-3">
								We’re excited to have you on board!
							</h2>
						</div>

						<form class="js-validation-signup" action="{{ route('register') }}" method="POST">
							@csrf

							<div class="block block-themed block-rounded block-fx-shadow">
								<div class="block-header bg-gd-emerald">
									<h3 class="block-title">Please enter your details</h3>
								</div>

								<div class="block-content">
									<div class="mb-4">
										<label class="form-label" for="name">Name</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" autocomplete="name">
									</div>
									<div class="mb-4">
										<label class="form-label" for="email">Email</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" autocomplete="email">
									</div>
									<div class="mb-4">
										<label class="form-label" for="role">Usertype</label>
										<select name="role" id="role" class="form-select select2">
											<option></option>
											<option value="1">Tutor</option>
											<option value="2">Student</option>
										</select>
									</div>
									<div class="mb-4">
										<label class="form-label" for="password">Password</label>
										<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password"
											   autocomplete="new-password">
									</div>
									<div class="mb-4">
										<label class="form-label" for="password_confirmation">Confirm Password</label>
										<input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
											   placeholder="Confirm your password" autocomplete="new-password">
									</div>

									<div class="row">
										<div class="col-sm-6 d-sm-flex align-items-center push">
											{{--											<div class="form-check">--}}
											{{--												<input type="checkbox" class="form-check-input" id="signup-terms" name="signup-terms" value="1">--}}
											{{--												<label class="form-check-label" for="signup-terms">Accept Terms &amp; Conditions</label>--}}
											{{--											</div>--}}
										</div>
										<div class="col-sm-6 text-sm-end push">
											<button type="submit" class="btn btn-sm btn-alt-primary fw-semibold">
												&nbsp;<i class="fa-solid fa-circle-plus opacity-75"></i>&nbsp;&nbsp;Create Account&nbsp;
											</button>
										</div>
									</div>
								</div>

								<div class="block-content block-content-full bg-body-light d-flex justify-content-between">
									<a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="{{ route('login') }}">
										<i class="fa fa-arrow-left opacity-50 me-1"></i> Sign In
									</a>
{{--									<a class="fs-sm fw-medium link-fx text-muted me-2 mb-1 d-inline-block" href="#" data-bs-toggle="modal"--}}
{{--									   data-bs-target="#modal-terms">--}}
{{--										<i class="fa fa-book opacity-50 me-1"></i> Read Terms--}}
{{--									</a>--}}
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>


			<div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-slidedown" role="document">
					<div class="modal-content">
						<div class="block block-rounded shadow-none mb-0">
							<div class="block-header block-header-default">
								<h3 class="block-title">Terms &amp; Conditions</h3>
								<div class="block-options">
									<button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
										<i class="fa fa-times"></i>
									</button>
								</div>
							</div>
							<div class="block-content fs-sm">
								<h5 class="mb-2">1. General</h5>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
								</p>
								<h5 class="mb-2">2. Account</h5>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
								</p>
								<h5 class="mb-2">3. Service</h5>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
								</p>
								<h5 class="mb-2">4. Payments</h5>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor.
								</p>
							</div>

							<div class="block-content block-content-full block-content-sm text-end border-top">
								<button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
									&nbsp;<i class="fa-solid fa-circle-xmark"></i>&nbsp;&nbsp;Close&nbsp;
								</button>
								<button type="button" class="btn btn-alt-primary" data-bs-dismiss="modal">
									&nbsp;<i class="fa-solid fa-square-up-right"></i>&nbsp;&nbsp;Done&nbsp;
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>

<script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/op_auth_signup.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $.fn.select2.defaults.set("theme", "bootstrap-5");
    $.fn.select2.defaults.set("placeholder", "Select");

    $(document).ready(function () {
        $('.select2').select2({
            allowClear: false,
        });
    });
</script>

</body>
</html>

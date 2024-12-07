@extends('layout')
@section('content')
	<main id="main-container">
		<div class="content">
			
			<div class="block block-rounded">
				<div class="block-header block-header-default">
					<h3 class="block-title">
						Job Posts
					</h3>
				</div>
				
				@foreach($posts as $post)
					<div class="block-content block-content-full overflow-x-auto" style="margin-bottom: -40px;">
						<div class="block block-rounded" style="box-shadow: rgba(149, 157, 165, 0.15) 0 8px 24px;">
							<div class="block-header block-header-default">
								<h3 class="block-title">Job Opening {{ $loop->iteration }}</h3>
								<div class="block-options">
									<button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
									<button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
										<i class="si si-refresh"></i>
									</button>
									<button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
								</div>
							</div>
							
							<div class="block-content">
								<div class="row">
									<div class="col-md-8">
										<div class="d-flex align-items-baseline">
											<i class="fa-solid fa-location-dot"></i>&ensp;<p>Dhaka, Bangladesh</p>
										</div>
									</div>
									<div class="col-md-4 d-flex justify-content-end">
										<p class="btn btn-sm btn-outline-info">Job ID: 456785</p>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">
										<h3>Physics Tutor Needed for English Medium</h3>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-4">
										<p>Medium</p>
										<p class="fw-bold" style="margin-top: -25px;">English Medium</p>
									</div>
									<div class="col-md-4">
										<p>Class</p>
										<p class="fw-bold" style="margin-top: -25px;">Standard 8</p>
									</div>
									<div class="col-md-4">
										<p>Preferred Tutor</p>
										<p class="fw-bold" style="margin-top: -25px;">Male</p>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-4">
										<p>Tutoring Days</p>
										<p class="fw-bold" style="margin-top: -25px;">4 Days/Week</p>
									</div>
									<div class="col-md-4">
										<p>Subject</p>
										<span class="badge bg-info" style="margin-top: -25px;">Subject</span>
									</div>
									<div class="col-md-4">
										<p>Salary</p>
										<p class="fw-bold" style="margin-top: -25px;">
											4500 Tk<small class="fw-light">/Month</small>
										</p>
									</div>
								</div>
								
								<div class="row mt-4 mb-2">
									<div class="col-md-6">
										<p class="text-secondary">Posted at: {{ today()->format('d M, Y') }}</p>
									</div>
									<div class="col-md-6">
										<div class=" d-flex justify-content-end">
											<button class="btn btn-md btn-success" type="submit">
												&nbsp;<i class="fa-solid fa-circle-check opacity-75"></i>&nbsp;&nbsp;Apply&nbsp;
											</button>
										</div>
									</div>
								</div>
								
								{{--								<ul class="timeline pull-t">--}}
								{{--									<li class="timeline-event">--}}
								{{--										<div class="timeline-event-time">50 min ago</div>--}}
								{{--										<i class="timeline-event-icon fa fab fa-twitter bg-info"></i>--}}
								{{--										<div class="timeline-event-block">--}}
								{{--											<p class="fw-semibold">+ 79 Followers</p>--}}
								{{--											<p>You’re getting more and more followers, keep it up!</p>--}}
								{{--										</div>--}}
								{{--									</li>--}}
								{{--									<li class="timeline-event">--}}
								{{--										<div class="timeline-event-time">5 hrs ago</div>--}}
								{{--										<i class="timeline-event-icon fab fa-facebook-f bg-default"></i>--}}
								{{--										<div class="timeline-event-block">--}}
								{{--											<p class="fw-semibold">+ 160 Page likes</p>--}}
								{{--											<p>You are doing great, keep it up!</p>--}}
								{{--										</div>--}}
								{{--									</li>--}}
								{{--									<li class="timeline-event">--}}
								{{--										<div class="timeline-event-time">3 days ago</div>--}}
								{{--										<i class="timeline-event-icon fa fa-database bg-pulse"></i>--}}
								{{--										<div class="timeline-event-block">--}}
								{{--											<p class="fw-semibold">Server backup completed!</p>--}}
								{{--											<p>Download the--}}
								{{--												<a href="javascript:void(0)">latest backup</a>.</p>--}}
								{{--										</div>--}}
								{{--									</li>--}}
								{{--								</ul>--}}
							</div>
						</div>
					</div>
				@endforeach
			
			</div>
		</div>
	</main>
@endsection

@section('script')

@endsection
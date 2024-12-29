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
					<div class="row" style="display: flex; justify-content: center">
						<div class="col-md-8">
							<div class="block-content block-content-full overflow-x-auto job-card-box" style="{{ $loop->last ? 'margin-bottom: 10px;' : 'margin-bottom: -20px' }}">
								<div class="block block-rounded job-card" style="box-shadow: rgba(149, 157, 165, 0.15) 0 8px 24px;">
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
												<div class="d-flex align-items-baseline text-secondary">
													<i class="fa-solid text-earth fa-location-dot"></i>&ensp;<p>{{ $post->location }}</p>
												</div>
											</div>
											<div class="col-md-4 d-flex justify-content-end">
												<p class="btn btn-sm btn-outline-secondary">Job ID: {{ $post->job_id ?? 'N/A' }}</p>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-12">
												<h2>{{ $post->title }}</h2>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-4">
												<p><i class="fa-brands fa-medium"></i>&nbsp; Medium
												</p>
												<p class="fw-bold" style="margin-top: -25px;">{{ $post->medium->name }}</p>
											</div>
											<div class="col-md-4">
												<p><i class="fa-solid fa-landmark"></i>&nbsp; Class
												</p>
												<p class="fw-bold" style="margin-top: -25px;">{{ $post->grade->name }}</p>
											</div>
											<div class="col-md-4">
												<p>
													<i class="fa-solid fa-venus-mars"></i>&nbsp; Preferred Tutor
												</p>
												<p class="fw-bold" style="margin-top: -25px;">{{ $post->preferredTutor->name }}</p>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-4">
												<p>
													<i class="fa-solid fa-calendar-day"></i>&nbsp; Tutoring Days
												</p>
												<p class="fw-bold" style="margin-top: -25px;">{{ $post->tutoringDay->name }} Days/Week</p>
											</div>
											<div class="col-md-4">
												<p><i class="fa-solid fa-book"></i>&nbsp; Subject
												</p>
												<div class="d-flex gap-2 flex-wrap">
													@foreach($post->subjects as $subject)
														<p class="bg-primary badge" style="margin-top: -25px;">{{ $subject->name }}</p>
													@endforeach
												</div>
											</div>
											<div class="col-md-4">
												<p>
													<i class="fa-solid fa-money-bill-1"></i>&nbsp; Salary
												</p>
												<p class="fw-bold" style="margin-top: -25px;">
													<span class="text-primary">{{ $post->salary }} Tk</span><small class="fw-light">/Month</small>
												</p>
											</div>
										</div>
										
										<div class="row mt-4 mb-1 d-flex align-items-baseline">
											<div class="col-md-6">
												<p class="text-secondary">Posted at: {{ $post->created_at->format('d M, Y') }}</p>
											</div>
											<div class="col-md-6">
												<div class=" d-flex justify-content-end">
													<button class="btn btn-sm btn-success" type="submit">
														&nbsp;<i class="fa-regular fa-circle-check opacity-75"></i>&nbsp;&nbsp;Apply&nbsp;
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
										{{--												<a href="javascript:void(0)">latest backup</a>.--}}
										{{--											</p>--}}
										{{--										</div>--}}
										{{--									</li>--}}
										{{--								</ul>--}}
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			
			</div>
		</div>
	</main>
@endsection
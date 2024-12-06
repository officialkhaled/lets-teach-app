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
								<ul class="timeline pull-t">
									<li class="timeline-event">
										<div class="timeline-event-time">50 min ago</div>
										<i class="timeline-event-icon fa fab fa-twitter bg-info"></i>
										<div class="timeline-event-block">
											<p class="fw-semibold">+ 79 Followers</p>
											<p>You’re getting more and more followers, keep it up!</p>
										</div>
									</li>
									<li class="timeline-event">
										<div class="timeline-event-time">5 hrs ago</div>
										<i class="timeline-event-icon fab fa-facebook-f bg-default"></i>
										<div class="timeline-event-block">
											<p class="fw-semibold">+ 160 Page likes</p>
											<p>You are doing great, keep it up!</p>
										</div>
									</li>
									<li class="timeline-event">
										<div class="timeline-event-time">3 days ago</div>
										<i class="timeline-event-icon fa fa-database bg-pulse"></i>
										<div class="timeline-event-block">
											<p class="fw-semibold">Server backup completed!</p>
											<p>Download the
												<a href="javascript:void(0)">latest backup</a>.</p>
										</div>
									</li>
								</ul>
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
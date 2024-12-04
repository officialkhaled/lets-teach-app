@extends('layout')
@section('content')
	<main id="main-container">
		
		<div class="content">
			<div class="row">
				<div class="col-6 col-xl-3">
					<a class="block block-rounded shadow-none bg-primary" href="javascript:void(0)">
						<div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
							<div class="d-none d-sm-block">
								<i class="fa-solid fa-person-chalkboard fa-2x text-black-50"></i>
							</div>
							<div class="text-end">
								<div class="fs-3 fw-semibold text-white">{{ $tutors->count() }}</div>
								<div class="fs-sm fw-semibold text-uppercase text-white-75">Tutors</div>
							</div>
						</div>
					</a>
				</div>
				
				<div class="col-6 col-xl-3">
					<a class="block block-rounded shadow-none bg-earth" href="javascript:void(0)">
						<div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
							<div class="d-none d-sm-block">
								<i class="fa-solid fa-graduation-cap fa-2x text-black-50"></i>
							</div>
							<div class="text-end">
								<div class="fs-3 fw-semibold text-white">{{ $students->count() }}</div>
								<div class="fs-sm fw-semibold text-uppercase text-white-75">Students</div>
							</div>
						</div>
					</a>
				</div>
				
				<div class="col-6 col-xl-3">
					<a class="block block-rounded shadow-none bg-warning" href="javascript:void(0)">
						<div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
							<div class="d-none d-sm-block">
								<i class="fa-solid fa-tags fa-2x text-black-50"></i>
							</div>
							<div class="text-end">
								<div class="fs-3 fw-semibold text-white">{{ $tags->count() }}</div>
								<div class="fs-sm fw-semibold text-uppercase text-white-75">Tags</div>
							</div>
						</div>
					</a>
				</div>
				
				<div class="col-6 col-xl-3">
					<a class="block block-rounded shadow-none bg-info" href="javascript:void(0)">
						<div class="block-content block-content-full d-sm-flex justify-content-between align-items-center">
							<div class="d-none d-sm-block">
								<i class="fa-solid fa-envelopes-bulk fa-2x text-black-50"></i>
							</div>
							<div class="text-end">
								<div class="fs-3 fw-semibold text-white">{{ $posts->count() }}</div>
								<div class="fs-sm fw-semibold text-uppercase text-white-75">Posts</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="block block-rounded d-flex justify-content-center" style="height: 600px; align-items: center; background-color: #636e72">
						<div class="block-content block-content-full d-sm-flex justify-content-center align-items-center">
							<h1 class="block-title text-uppercase text-white-75" style="font-size: 28px; flex: none; cursor: pointer;">
								Hello, <span class="fw-bold" style="color: #2d3436;">{{ auth()->user()->name }}</span>! <br>
								Welcome to your <span class="fw-bold" style="color: #2d3436;">Tutor</span> Dashboard!
							</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</main>
@endsection

@section('script')

@endsection
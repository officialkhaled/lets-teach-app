@extends('admin.layout')
@section('content')
	
	<main id="main-container">
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<section class="block block-rounded block-bordered block-link-shadow" style="padding: 30px;">
						<header class="d-flex justify-content-between">
							<div class="">
								<h3 class="text-lg font-medium text-gray-900">
									Profile Information
								</h3>
								<p class="mt-1 text-sm text-gray-600">
									Update your account's profile information and email address.
								</p>
							</div>
							<div class="">
								<a href="{{ route('admin.index') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
									&nbsp;<i class="fa-regular fa-circle-left opacity-50"></i>&nbsp;&nbsp;Back&nbsp;
								</a>
							</div>
						</header>
						
						<form id="send-verification" method="post" action="{{ route('verification.send') }}">
							@csrf
						</form>
						
						<div class="row">
							<form method="post" action="{{ route('admin.profile.update') }}" class="space-y-3" enctype="multipart/form-data">
								@csrf
								@method('patch')
								
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-6">
											<label class="form-label" for="name">Name</label>
											<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{ $user->name }}">
										</div>
										
										<div class="col-md-6">
											<label class="form-label" for="email">Email</label>
											<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{ $user->email }}">
										</div>
									</div>
									
									<div class="row" style="margin-top: 30px;">
										<div class="col-md-6">
											<label class="form-label" for="image">Profile Picture</label>
											<input class="form-control" type="file" id="image" name="image" onchange="previewImage(event)">
										</div>
										
										<div class="col-md-6 text-center">
											<img id="preview" alt="Profile Picture Preview" class="img-fluid"
												 style="width: 150px; height: 150px; object-fit: cover; border-radius: 6px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);"
												 src="{{ $user->image ? asset('storage/' . $user->image) : asset('assets/no_image.jpg') }}">
										</div>
									</div>
								</div>
								
								<div class="d-flex justify-content-center gap-2" style="margin-top: 30px;">
									<button class="btn btn-success btn-sm" type="submit">
										&nbsp;<i class="fa fa-save opacity-50"></i>&nbsp;&nbsp;Update&nbsp;
									</button>
									
									<button class="btn btn-warning btn-sm" type="button">
										&nbsp;<i class="fa fa-refresh opacity-50"></i>&nbsp;&nbsp;Refresh&nbsp;
									</button>
								</div>
							</form>
						</div>
					
					</section>
				</div>
				
				
				{{--				<div class="py-12">--}}
				{{--					<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">--}}
				{{--						<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
				{{--							<div class="max-w-xl">--}}
				{{--								@include('profile.partials.update-profile-information-form')--}}
				{{--							</div>--}}
				{{--						</div>--}}
				{{--						--}}
				{{--						<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
				{{--							<div class="max-w-xl">--}}
				{{--								@include('profile.partials.update-password-form')--}}
				{{--							</div>--}}
				{{--						</div>--}}
				{{--						--}}
				{{--						<div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">--}}
				{{--							<div class="max-w-xl">--}}
				{{--								@include('profile.partials.delete-user-form')--}}
				{{--							</div>--}}
				{{--						</div>--}}
				{{--					</div>--}}
				{{--				</div>--}}
			
			</div>
		</div>
	</main>
	
	<script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('preview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    preview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
	</script>

@endsection
@extends('admin.layout')
@section('content')
	
	<main id="main-container">
		
		<div class="content">
			<div class="block block-rounded">
				<div class="block-header block-header-default">
					<h3 class="block-title">
						User Management <small>(Tutors &amp; Students List)</small>
					</h3>
					
					<a href="{{ route('admin.user-management.index') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
						&nbsp;<i class="fa-regular fa-circle-left"></i>&nbsp;&nbsp;Back&nbsp;
					</a>
				</div>
				
				<div class="block-content block-content-full overflow-x-auto">
					@if ($user->role == 1)
						<div class="row">
							<form method="post" action="{{ route('admin.user-management.update', $tutor->id) }}" class="space-y-3" enctype="multipart/form-data">
								@csrf
								@method('patch')
								
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<h2 class="block-title fw-bold content-heading">Basic Info</h2>
										</div>
									</div>
									
									<div class="row" style="margin-top: 10px;">
										<div class="col-md-3">
											<label class="form-label" for="name">Name</label>
											<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{ $tutor->user->name }}">
										</div>
										<div class="col-md-3">
											<label class="form-label" for="email">Email</label>
											<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{ $tutor->user->email }}">
										</div>
										<div class="col-md-3">
											<label class="form-label" for="phone_number">Phone Number (+88)</label>
											<input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your phone number" value="{{ $tutor->phone_number }}">
										</div>
										<div class="col-md-3">
											<label class="form-label" for="experience">Experience (years)</label>
											<input type="number" class="form-control" id="experience" name="experience" placeholder="Enter your experience" value="{{ $tutor->experience }}">
										</div>
									</div>
									
									<div class="row" style="margin-top: 30px;">
										<div class="col-md-12">
											<h2 class="block-title fw-bold content-heading">Education Info</h2>
										</div>
									</div>
									
									<div class="row" style="margin-top: 10px;">
										<div class="col-md-3">
											<label class="form-label" for="institution">Institution</label>
											<input type="text" class="form-control" id="institution" name="institution" placeholder="Enter your institution" value="{{ '' }}">
										</div>
										<div class="col-md-3">
											<label class="form-label" for="degree">Degree</label>
											<input type="text" class="form-control" id="degree" name="degree" placeholder="Enter your education" value="{{ '' }}">
										</div>
										<div class="col-md-3">
											<label class="form-label" for="score">Score</label>
											<input type="number" step="any" class="form-control" id="score" name="score" placeholder="Enter your education" value="{{ '' }}">
										</div>
										<div class="col-md-3">
											<label class="form-label" for="completion_year">Completion Year</label>
											<input type="text" class="form-control" id="completion_year" name="completion_year" placeholder="Enter your education" value="{{ '' }}">
										</div>
									</div>
									
									<div class="row" style="margin-top: 30px;">
										<div class="col-md-12">
											<h2 class="block-title fw-bold content-heading">Profile Picture</h2>
										</div>
									</div>
									
									<div class="row" style="margin-top: 10px;">
										<div class="col-md-6">
											<label class="form-label" for="image">Upload Image</label>
											<input class="form-control" type="file" id="image" name="image" onchange="previewImage(event)">
										</div>
										
										<div class="col-md-6">
											<div class="d-flex" style="flex-direction: column; align-items: center;">
												<label class="form-label mb-2" for="image">Image Preview</label>
												<img id="preview" alt="Profile Picture Preview" class="img-fluid"
													 style="width: 150px; height: 150px; object-fit: cover; border-radius: 6px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);"
													 src="{{ $tutor->user->image ? asset('storage/' . $tutor->user->image) : asset('assets/no_image.jpg') }}">
											</div>
										</div>
									</div>
								</div>
								
								<div class="d-flex justify-content-center gap-2" style="margin-top: 30px;">
									<button class="btn btn-success btn-sm" type="submit">
										&nbsp;<i class="fa fa-save"></i>&nbsp;&nbsp;Update&nbsp;
									</button>
									
									<button class="btn btn-warning btn-sm" type="button">
										&nbsp;<i class="fa fa-refresh"></i>&nbsp;&nbsp;Refresh&nbsp;
									</button>
								</div>
							</form>
						</div>
					@endif
					
					@if ($user->role == 2)
						<div class="row">
							<form method="post" action="{{ route('profile.update') }}" class="space-y-3" enctype="multipart/form-data">
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
										&nbsp;<i class="fa fa-save"></i>&nbsp;&nbsp;Update&nbsp;
									</button>
									
									<button class="btn btn-warning btn-sm" type="button">
										&nbsp;<i class="fa fa-refresh"></i>&nbsp;&nbsp;Refresh&nbsp;
									</button>
								</div>
							</form>
						</div>
					@endif
				</div>
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
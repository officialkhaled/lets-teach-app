@extends('layout')
@section('content')

	<main id="main-container">

		<div class="content">
			<div class="block block-rounded">
				<div class="block-header block-header-default">
					<h3 class="block-title">
						@if ($user->role == 1)
							User Edit <small>(Tutor)</small>
						@elseif ($user->role == 2)
							User Edit <small>(Student)</small>
						@endif
					</h3>

					<a href="{{ route('admin.user-management.index') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
						&nbsp;<i class="fa-regular fa-circle-left opacity-75"></i>&nbsp;&nbsp;Back&nbsp;
					</a>
				</div>

				<div class="block-content block-content-full overflow-x-auto">
					@if ($user->role == 1)
						<div class="row">
							<form method="POST" action="{{ route('admin.user-management.update', $tutor->user_id) }}"
								  class="space-y-3" enctype="multipart/form-data">
								@csrf
								@method('patch')

								<div class="col-md-12">
									<div class="row" style="margin-top: -60px;">
										<div class="col-md-12">
											<h2 class="block-title fw-bold content-heading">Basic Info</h2>
										</div>
									</div>

									<div class="row" style="margin-top: 10px;">
										<div class="col-md-3">
											<label class="form-label" for="name">Name</label>
											<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
												   value="{{ $tutor->user->name }}">
										</div>
										<div class="col-md-3">
											<label class="form-label" for="email">Email</label>
											<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
												   value="{{ $tutor->user->email }}">
										</div>
										<div class="col-md-3">
											<label class="form-label" for="phone_number">Phone Number (+88)</label>
											<input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your phone number"
												   value="{{ $tutor->phone_number ?? '' }}">
										</div>
										<div class="col-md-3">
											<label class="form-label" for="experience">Experience (years)</label>
											<input type="number" class="form-control" id="experience" name="experience" placeholder="Enter your experience"
												   value="{{ $tutor->experience ?? '' }}">
										</div>
									</div>

									<div class="row" style="margin-top: 14px;">
										<div class="col-md-12">
											<label class="form-label" for="bio">Bio</label>
											<textarea class="form-control" name="bio" id="bio" cols="20" rows="4" placeholder="Write...">{{ $tutor->bio ?? '' }}</textarea>
										</div>
									</div>

									<div class="row" style="margin-top: 14px;">
										<div class="col-md-12">
											<h2 class="block-title fw-bold content-heading">Education Info</h2>
										</div>
									</div>

									<div class="row" style="margin-top: 10px;">
										<div class="col-md-3">
											<label class="form-label" for="institution">Institution</label>
											<input type="text" class="form-control" id="institution" name="institution" placeholder="Enter your institution"
												   value="{{ $tutor->education['institution'] ?? '' }}">
										</div>
										<div class="col-md-3">
											<label class="form-label" for="degree">Degree</label>
											<input type="text" class="form-control" id="degree" name="degree" placeholder="Enter your education"
												   value="{{ $tutor->education['degree'] ?? '' }}">
										</div>
										<div class="col-md-3">
											<label class="form-label" for="score">Score</label>
											<input type="number" step="any" class="form-control" id="score" name="score" placeholder="Enter your education"
												   value="{{ $tutor->education['score'] ?? '' }}">
										</div>
										<div class="col-md-3">
											<label class="form-label" for="completion_year">Completion Year</label>
											<input type="text" class="form-control" id="completion_year" name="completion_year" placeholder="Enter your education"
												   value="{{ $tutor->education['completion_year'] ?? '' }}">
										</div>
									</div>

									<div class="row" style="margin-top: 14px;">
										<div class="col-md-12">
											<h2 class="block-title fw-bold content-heading">Tags Selection</h2>
										</div>
									</div>

									<div class="row" style="margin-top: 10px;">
										<div class="col-md-6">
											<label class="form-label" for="subject_ids">Subjects</label>
											<select name="subject_ids[]" id="subject_ids" class="select2 form-select" multiple>
												<option></option>
												@foreach($tags->where('type', 1) as $tag)
													<option value="{{ $tag->id }}" {{ in_array($tag->id, $selectedSubjects ?? []) ? 'selected' : '' }}>
														{{ $tag->name }}
													</option>
												@endforeach
											</select>
										</div>
										<div class="col-md-6">
											<label class="form-label" for="grade_ids">Grades</label>
											<select name="grade_ids[]" id="grade_ids" class="select2 form-select" multiple>
												<option></option>
												@foreach($tags->where('type', 2) as $tag)
													<option value="{{ $tag->id }}" {{ in_array($tag->id, $selectedGrades ?? []) ? 'selected' : '' }}>
														{{ $tag->name }}
													</option>
												@endforeach
											</select>
										</div>
									</div>
								</div>

								<div class="d-flex justify-content-center gap-2" style="margin-top: 24px;">
									<button class="btn btn-success btn-sm" type="submit">
										&nbsp;<i class="fa fa-save opacity-75"></i>&nbsp;&nbsp;Update&nbsp;
									</button>

									<a href="{{ route('admin.user-management.index') }}" class="btn btn-warning btn-sm" type="button">
										&nbsp;<i class="fa fa-refresh opacity-75"></i>&nbsp;&nbsp;Refresh&nbsp;
									</a>
								</div>
							</form>
						</div>
					@endif

					@if ($user->role == 2)
						<div class="row">
							<form method="POST" action="{{ route('admin.user-management.update', $student->user_id) }}"
								  class="space-y-3" enctype="multipart/form-data">
								@csrf
								@method('patch')

								<div class="col-md-12">
									<div class="row" style="margin-top: -60px;">
										<div class="col-md-12">
											<h2 class="block-title fw-bold content-heading">Basic Info</h2>
										</div>
									</div>

									<div class="row" style="margin-top: 10px;">
										<div class="col-md-4">
											<label class="form-label" for="name">Name</label>
											<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
												   value="{{ $student->user->name }}">
										</div>
										<div class="col-md-4">
											<label class="form-label" for="email">Email</label>
											<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
												   value="{{ $student->user->email }}">
										</div>
										<div class="col-md-4">
											<label class="form-label" for="phone_number">Phone Number (+88)</label>
											<input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your phone number"
												   value="{{ $student->phone_number ?? '' }}">
										</div>
									</div>

									<div class="row" style="margin-top: 14px;">
										<div class="col-md-12">
											<h2 class="block-title fw-bold content-heading">Tags Selection</h2>
										</div>
									</div>

									<div class="row" style="margin-top: 10px;">
										<div class="col-md-6">
											<label class="form-label" for="subject_ids">Subjects</label>
											<select name="subject_ids[]" id="subject_ids" class="select2 form-select" multiple>
												<option></option>
												@foreach($tags->where('type', 1) as $tag)
													<option value="{{ $tag->id }}" {{ in_array($tag->id, $selectedSubjects ?? []) ? 'selected' : '' }}>
														{{ $tag->name }}
													</option>
												@endforeach
											</select>
										</div>
										<div class="col-md-6">
											<label class="form-label" for="grade_id">Grade</label>
											<select name="grade_id" id="grade_id" class="select2 form-select">
												<option></option>
												@foreach($tags->where('type', 2) as $tag)
													<option value="{{ $tag->id }}" {{ old('type', $tag->type) == 2 ? 'selected' : '' }}>
													{{ $tag->name }}
													</option>
												@endforeach
											</select>
										</div>
									</div>
								</div>

								<div class="d-flex justify-content-center gap-2" style="margin-top: 24px;">
									<button class="btn btn-success btn-sm" type="submit">
										&nbsp;<i class="fa fa-save opacity-75"></i>&nbsp;&nbsp;Update&nbsp;
									</button>
									<a href="{{ route('admin.user-management.index') }}" class="btn btn-warning btn-sm" type="button">
										&nbsp;<i class="fa fa-refresh opacity-75"></i>&nbsp;&nbsp;Refresh&nbsp;
									</a>
								</div>
							</form>
						</div>
					@endif
				</div>
			</div>
		</div>

	</main>

@endsection

@section('script')
	<script>
        $.fn.select2.defaults.set("theme", "bootstrap-5");
        $.fn.select2.defaults.set("placeholder", "Select");

        $(document).ready(function () {
            $('.select2').select2();
        });
	</script>
@endsection

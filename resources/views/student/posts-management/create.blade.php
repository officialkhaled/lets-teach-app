@extends('layout')
@section('content')
	
	<main id="main-container">
		
		<div class="content">
			<div class="block block-rounded">
				<div class="block-header block-header-default">
					<h3 class="block-title">
						Post Entry
					</h3>
					
					<a href="{{ route('student.posts-management.index') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
						&nbsp;<i class="fa-regular fa-circle-left opacity-50"></i>&nbsp;&nbsp;Back&nbsp;
					</a>
				</div>
				
				<div class="block-content block-content-full overflow-x-auto">
					<div class="row">
						<form method="post" action="{{ route('student.posts-management.store') }}" class="space-y-3" enctype="multipart/form-data">
							@csrf
							
							<div class="col-md-12">
								<div class="row" style="margin-top: 10px;">
									<div class="col-md-6">
										<label class="form-label" for="title">Title</label>
										<textarea name="title" id="title" rows="1" placeholder="Enter your title" class="form-control"></textarea>
									</div>
									<div class="col-md-3">
										<label class="form-label" for="medium_id">Medium</label>
										<select name="medium_id" id="medium_id" class="select2 form-select">
											<option></option>
											@foreach($tags->where('type', 3) as $tag)
												<option value="{{ $tag->id }}">{{ $tag->name }}</option>
											@endforeach
										</select>
									</div>
									<div class="col-md-3">
										<label class="form-label" for="preferred_tutor_id">Preferred Tutor</label>
										<select name="preferred_tutor_id" id="preferred_tutor_id" class="select2 form-select">
											<option></option>
											@foreach($tags->where('type', 4) as $tag)
												<option value="{{ $tag->id }}">{{ $tag->name }}</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="row" style="margin-top: 30px;">
									<div class="col-md-3">
										<label class="form-label" for="subject_ids">Subjects</label>
										<select name="subject_ids[]" id="subject_ids" class="select2 form-select" multiple>
											<option></option>
											@foreach($tags->where('type', 1) as $tag)
												<option value="{{ $tag->id }}">{{ $tag->name }}</option>
											@endforeach
										</select>
									</div>
									<div class="col-md-3">
										<label class="form-label" for="grade_id">Grade</label>
										<select name="grade_id" id="grade_id" class="select2 form-select">
											<option></option>
											@foreach($tags->where('type', 2) as $tag)
												<option value="{{ $tag->id }}">{{ $tag->name }}</option>
											@endforeach
										</select>
									</div>
									<div class="col-md-3">
										<label class="form-label" for="tutoring_day_id">Tutoring Days/Week</label>
										<select name="tutoring_day_id" id="tutoring_day_id" class="select2 form-select">
											<option></option>
											@foreach($tags->where('type', 5) as $tag)
												<option value="{{ $tag->id }}">{{ $tag->name }}</option>
											@endforeach
										</select>
									</div>
									<div class="col-md-3">
										<label class="form-label" for="salary">Budget (BDT)</label>
										<input type="number" class="form-control" id="salary" name="salary" placeholder="Enter your budget">
									</div>
								</div>
								<div class="row" style="margin-top: 30px;">
									<div class="col-md-4">
										<label class="form-label" for="from_time">From Time</label>
										<input type="text" class="js-flatpickr form-control" id="from_time" name="from_time" placeholder="Enter from time"
											   data-enable-time="true" data-no-calendar="true" data-date-format="H:i">
									</div>
									<div class="col-md-4">
										<label class="form-label" for="to_time">To Time</label>
										<input type="text" class="js-flatpickr form-control" id="to_time" name="to_time" placeholder="Enter to time"
											   data-enable-time="true" data-no-calendar="true" data-date-format="H:i">
									</div>
									<div class="col-md-4">
										<label class="form-label" for="location">Location</label>
										<input type="text" class="form-control" id="location" name="location" placeholder="Enter your location">
									</div>
								</div>
							</div>
							
							<div class="d-flex justify-content-center gap-2" style="margin-top: 30px;">
								<button class="btn btn-success btn-sm" type="submit" id="save-post">
									&nbsp;<i class="fa fa-save opacity-50"></i>&nbsp;&nbsp;Save&nbsp;
								</button>
								<a href="{{ route('student.posts-management.create') }}" class="btn btn-warning btn-sm" type="button">
									&nbsp;<i class="fa fa-refresh opacity-50"></i>&nbsp;&nbsp;Refresh&nbsp;
								</a>
							</div>
						</form>
					</div>
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
            $('.select2').select2({
                allowClear: false,
            });

            $('#save-post').on('click', function (e) {
                e.preventDefault();

                let form = $('#post-form');
                let route = form.data('route');
                let formData = new FormData(form[0]);

                $('#success-message').addClass('d-none').text('');

                $.ajax({
                    url: route,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        $('#success-message').removeClass('d-none').text(response.message);
                        form[0].reset();
                        $('.select2').val(null).trigger('change');
                    },
                    error: function (xhr) {
                        let errors = xhr.responseJSON.errors || {};
                        let errorMessages = Object.values(errors).flat().join('\n');
                        alert('Error: ' + errorMessages);
                    },
                });
            });
        });
	</script>
@endsection
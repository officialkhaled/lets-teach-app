@extends('layout')
@section('content')
	
	<main id="main-container">
		
		<div class="content">
			<div class="block block-rounded">
				<div class="block-header block-header-default">
					<h3 class="block-title">
						Post Entry
					</h3>
					
					<a href="{{ route('student.posts.index') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
						&nbsp;<i class="fa-regular fa-circle-left opacity-50"></i>&nbsp;&nbsp;Back&nbsp;
					</a>
				</div>
				
				<div class="block-content block-content-full overflow-x-auto">
					<div class="row">
						<form method="post" action="{{ route('student.posts.store') }}" class="space-y-3" enctype="multipart/form-data">
							@csrf
							
							<div class="col-md-12">
								<div class="row" style="margin-top: 10px;">
									<div class="col-md-4">
										<label class="form-label" for="subjects">Subjects</label>
										<select name="subjects[]" id="subjects" class="select2 form-select" multiple>
											<option></option>
											@foreach($tags->where('type', 1) as $tag)
												<option value="{{ $tag->id }}">{{ $tag->name }}</option>
											@endforeach
										</select>
									</div>
									<div class="col-md-4">
										<label class="form-label" for="grade">Grade</label>
										<select name="grade" id="grade" class="select2 form-select">
											<option></option>
											@foreach($tags->where('type', 2) as $tag)
												<option value="{{ $tag->id }}">{{ $tag->name }}</option>
											@endforeach
										</select>
									</div>
									<div class="col-md-4">
										<label class="form-label" for="budget">Budget (BDT)</label>
										<input type="number" class="form-control" id="budget" name="budget" placeholder="Enter your budget">
									</div>
								</div>
								<div class="row" style="margin-top: 30px;">
									<div class="col-md-4">
										<label class="form-label" for="from_time">From Time</label>
										<input type="text" class="js-flatpickr form-control" id="from_time" name="from_time"
											   data-enable-time="true" data-no-calendar="true" data-date-format="H:i">
									</div>
									<div class="col-md-4">
										<label class="form-label" for="to_time">To Time</label>
										<input type="text" class="js-flatpickr form-control" id="to_time" name="to_time"
											   data-enable-time="true" data-no-calendar="true" data-date-format="H:i">
									</div>
									<div class="col-md-4">
										<label class="form-label" for="description">Description</label>
										<textarea name="description" class="form-control" id="description" rows="1" placeholder="Write..."></textarea>
									</div>
								</div>
							</div>
							
							<div class="d-flex justify-content-center gap-2" style="margin-top: 30px;">
								<button class="btn btn-success btn-sm" type="submit">
									&nbsp;<i class="fa fa-save opacity-50"></i>&nbsp;&nbsp;Save&nbsp;
								</button>
								<a href="{{ route('student.posts.create') }}" class="btn btn-warning btn-sm" type="button">
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
        });
	</script>
@endsection
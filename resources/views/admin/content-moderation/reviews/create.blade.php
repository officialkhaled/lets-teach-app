@extends('layout')
@section('title', 'Add | Reviews')
@section('content')

	<main id="main-container">
		<div class="content">
			<div class="block block-rounded">
				<div class="block-header block-header-default">
					<h3 class="block-title">
						Tag Entry
					</h3>

					<a href="{{ route('admin.tags-management.index') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
						&nbsp;<i class="fa-regular fa-circle-left opacity-75"></i>&nbsp;&nbsp;Back&nbsp;
					</a>
				</div>

				<div class="block-content block-content-full overflow-x-auto">
					<div class="row">
						<form method="post" action="{{ route('admin.tags-management.store') }}" class="space-y-3" enctype="multipart/form-data">
							@csrf

							<div class="col-md-12">
								<div class="row" style="margin-top: 10px;">
									<div class="col-md-6">
										<label class="form-label" for="name">Name</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
									</div>
									<div class="col-md-6">
										<label class="form-label" for="type">Type</label>
										<select name="type" id="type" class="select2 form-select">
											<option></option>
											<option value="1">Subject</option>
											<option value="2">Grade</option>
										</select>
									</div>
								</div>
							</div>

							<div class="d-flex justify-content-center gap-2" style="margin-top: 30px;">
								<button class="btn btn-success btn-sm" type="submit">
									&nbsp;<i class="fa fa-save opacity-75"></i>&nbsp;&nbsp;Save&nbsp;
								</button>
								<a href="" class="btn btn-warning btn-sm" type="button">
									&nbsp;<i class="fa fa-refresh opacity-75"></i>&nbsp;&nbsp;Refresh&nbsp;
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

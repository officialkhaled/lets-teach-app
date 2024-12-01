@extends('layout')
@section('content')
	
	@if(session('success'))
		<div class="alert alert-success">
			{{ session('success') }}
		</div>
	@endif
	
	<main id="main-container">
		
		<div class="content">
			<div class="block block-rounded">
				<div class="block-header block-header-default">
					<h3 class="block-title">
						Users Management <small>(Tutors &amp; Students List)</small>
					</h3>
				</div>
				
				<div class="block-content block-content-full overflow-x-auto">
					<table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
						<thead>
						<tr>
							<th class="text-center" style="width: 3%">SL</th>
							<th>Name</th>
							<th class="d-none d-sm-table-cell">Email</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Image</th>
							<th class="d-none d-sm-table-cell" style="width: 12%;">Usertype</th>
							<th class="d-none d-sm-table-cell text-center" style="width: 15%;">Action</th>
						</tr>
						</thead>
						<tbody>
						@foreach($users as $user)
							<tr>
								<td class="text-center">{{ $loop->iteration }}</td>
								<td class="fw-semibold">{{ $user->name }}</td>
								<td class="d-none d-sm-table-cell">{{ $user->email }}</td>
								<td class="d-none d-sm-table-cell text-center">
									<img src="{{ asset('storage/' . $user->image) }}" class="img-avatar img-avatar-square img-avatar48"
										 onerror="{{ asset('assets/media/avatars/avatar15.jpg') }}" alt="Image" style="border-radius: 4px">
								</td>
								<td class="d-none d-sm-table-cell text-center">
									<span class="badge {{ $user->role === 1 ? 'bg-info' : 'bg-warning' }}">
										{{ $user->role === 1 ? 'Tutor' : 'Student' }}
									</span>
								</td>
								<td class="d-none d-sm-table-cell text-center">
									<div class="d-flex justify-content-center gap-2">
										<a class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
										   href="{{ route('admin.user-management.edit', $user->id) }}">
											<i class="fa fa-edit opacity-75"></i>
										</a>
										<form action="{{ route('admin.user-management.destroy', $user->id) }}" method="POST">
											@csrf
											@method('DELETE')
											<button class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
												<i class="fa fa-trash opacity-75"></i>
											</button>
										</form>
									</div>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	
	</main>

@endsection

@section('script')
	<script>
		@if(session('success'))
        	toastr.success('User Deleted Successfully!');
		@endif
		@if(session('error'))
        	toastr.error('User Not Found!');
		@endif
	</script>
@endsection
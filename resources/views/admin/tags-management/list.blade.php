@extends('layout')
@section('content')
	
	<main id="main-container">
		
		<div class="content">
			<div class="block block-rounded">
				<div class="block-header block-header-default">
					<h3 class="block-title">
						Tags Management <small>(Subjects &amp; Grades List)</small>
					</h3>
					
					<a href="{{ route('admin.tags-management.create') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
						&nbsp;<i class="fa-solid fa-plus opacity-50"></i>&nbsp;&nbsp;Add&nbsp;
					</a>
				</div>
				
				<div class="block-content block-content-full overflow-x-auto">
					<table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
						<thead>
						<tr>
							<th class="text-center" style="width: 3%">SL</th>
							<th>Name</th>
							<th class="d-none d-sm-table-cell">Type</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Status</th>
							<th class="d-none d-sm-table-cell text-center" style="width: 15%;">Action</th>
						</tr>
						</thead>
						<tbody>
						@foreach($tags as $tag)
							<tr>
								<td class="text-center">{{ $loop->iteration }}</td>
								<td class="fw-semibold">{{ $tag->name }}</td>
								<td class="d-none d-sm-table-cell">
									<span class="badge {{ $tag->type === 1 ? 'bg-info' : 'bg-warning' }}">
										{{ $tag->type === 1 ? 'Subject' : 'Grade' }}
									</span>
								</td>
								<td class="d-none d-sm-table-cell text-center">
									<span class="badge {{ $tag->status === 1 ? 'bg-success' : 'bg-secondary' }}">
										{{ $tag->status === 1 ? 'Active' : 'Inactive' }}
									</span>
								</td>
								<td class="d-none d-sm-table-cell text-center">
									<div class="d-flex justify-content-center gap-2">
										<a class="btn btn-success btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"
										   href="{{ route('admin.tags-management.edit', $tag->id) }}">
											<i class="fa fa-edit opacity-75"></i>
										</a>
										<form action="{{ route('admin.tags-management.destroy', $tag->id) }}" method="POST">
											@csrf
											@method('DELETE')
											
											<button class="btn btn-danger btn-sm"  data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
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
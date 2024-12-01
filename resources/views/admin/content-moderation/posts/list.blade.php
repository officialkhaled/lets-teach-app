@extends('admin.layout')
@section('content')
	
	<main id="main-container">
		
		<div class="content">
			<div class="block block-rounded">
				<div class="block-header block-header-default">
					<h3 class="block-title">
						Posts Management
					</h3>
					
					{{-- Remove from here --}}
					<a href="{{ route('admin.content-moderation.posts.create') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
						&nbsp;<i class="fa-solid fa-plus opacity-50"></i>&nbsp;&nbsp;Add&nbsp;
					</a>
					{{-- Remove from here --}}
				</div>
				
				<div class="block-content block-content-full overflow-x-auto">
					<table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
						<thead>
						<tr>
							<th class="text-center" style="width: 3%">SL</th>
							<th class="d-none d-sm-table-cell">Subjects</th>
							<th class="d-none d-sm-table-cell">Grade</th>
							<th class="d-none d-sm-table-cell">Budget</th>
							{{--							<th class="d-none d-sm-table-cell">Description</th>--}}
							<th class="d-none d-sm-table-cell">Schedule</th>
							<th class="d-none d-sm-table-cell" style="width: 10%;">Status</th>
							<th class="d-none d-sm-table-cell text-center" style="width: 15%;">Action</th>
						</tr>
						</thead>
						<tbody>
						@foreach($posts as $post)
							<tr>
								<td class="text-center">{{ $loop->iteration }}</td>
								<td class="d-none d-sm-table-cell">{{ $post->tags->pluck('name')->implode(', ') }}</td>
								<td class="d-none d-sm-table-cell">{{ $post->tag->name }}</td>
								<td class="d-none d-sm-table-cell">{{ $post->budget }} Tk.</td>
								{{--								<td class="d-none d-sm-table-cell"><p class="hide-texts">{{ $post->description }}</p></td>--}}
								<td class="d-none d-sm-table-cell">{{ $post->from_time . ' - ' . $post->to_time }}</td>
								<td class="d-none d-sm-table-cell text-center">
									<span class="badge {{ $post->status === 1 ? 'bg-success' : 'bg-secondary' }}">
										{{ $post->status === 1 ? 'Active' : 'Inactive' }}
									</span>
								</td>
								<td class="d-none d-sm-table-cell text-center">
									<div class="d-flex justify-content-center gap-2">
										<a class="btn btn-success btn-sm" href="{{ route('admin.content-moderation.posts.edit', $post->id) }}">
											&nbsp;<i class="fa fa-edit opacity-50"></i>&nbsp;&nbsp;Edit&nbsp;
										</a>
										<form action="{{ route('admin.content-moderation.posts.destroy', $post->id) }}" method="POST">
											@csrf
											@method('DELETE')
											
											<button class="btn btn-danger btn-sm">
												&nbsp;<i class="fa fa-trash opacity-50"></i>&nbsp;&nbsp;Delete&nbsp;
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
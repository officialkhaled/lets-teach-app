@extends('layout')
@section('title', 'Posts')
@section('content')

    @php use \App\Constants\ApplicationConstant; @endphp

    <main id="main-container">
        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Posts Management
                    </h3>
                </div>

                <div class="block-content block-content-full overflow-x-auto">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 3%">SL</th>
                            <th class="d-none d-sm-table-cell">Title</th>
                            <th class="d-none d-sm-table-cell">Job ID</th>
                            <th class="d-none d-sm-table-cell">Subjects</th>
                            <th class="d-none d-sm-table-cell">Class</th>
                            <th class="d-none d-sm-table-cell">Medium</th>
                            <th class="d-none d-sm-table-cell">Preferred Tutor</th>
                            <th class="d-none d-sm-table-cell">Budget</th>
                            <th class="d-none d-sm-table-cell">Tutoring Days</th>
                            <th class="d-none d-sm-table-cell">Schedule</th>
                            <th class="d-none d-sm-table-cell" style="width: 10%;">Status</th>
                            <th class="d-none d-sm-table-cell text-center" style="width: 8%;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="d-none d-sm-table-cell">{{ $post->title }}</td>
                                <td class="d-none d-sm-table-cell">{{ $post->job_id }}</td>
                                <td class="d-none d-sm-table-cell">{{ implode(', ', array_map(fn($id) => ApplicationConstant::SUBJECTS[$id], $post->subject_ids)) }}</td>
                                <td class="d-none d-sm-table-cell">{{ ApplicationConstant::CLASSES[$post->class_id] }}</td>
                                <td class="d-none d-sm-table-cell">{{ ApplicationConstant::MEDIUMS[$post->medium_id] }}</td>
                                <td class="d-none d-sm-table-cell">{{ ApplicationConstant::GENDERS[$post->gender_id] }}</td>
                                <td class="d-none d-sm-table-cell">{{ $post->salary }} Tk.</td>
                                <td class="d-none d-sm-table-cell">{{ ApplicationConstant::TUTORING_DAYS[$post->tutoring_day_id] }}</td>
                                <td class="d-none d-sm-table-cell">{{ format12hr($post->from_time) . ' - ' . format12hr($post->to_time) }}</td>
                                <td class="d-none d-sm-table-cell text-center">
									<span class="badge {{ $post->status === 0 ? 'bg-secondary' : ($post->status === 1 ? 'bg-success' : 'bg-danger') }}">
										{{ $post->status === 0 ? 'Unapproved' : ($post->status === 1 ? 'Approved' : 'Rejected') }}
									</span>
                                </td>
                                <td class="d-none d-sm-table-cell text-center">
                                    <div class="d-flex justify-content-center gap-1">
                                        @if ($post->status === 0)
                                            <a class="btn btn-info btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Approve"
                                               href="{{ route('admin.content-moderation.posts.approve', $post->id) }}">
                                                <i class="fa-solid fa-square-check opacity-75"></i>
                                            </a>
                                            <a class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Reject"
                                               href="{{ route('admin.content-moderation.posts.reject', $post->id) }}">
                                                <i class="fa-solid fa-xmark opacity-75"></i>
                                            </a>
                                        @endif
                                        <form action="{{ route('admin.content-moderation.posts.destroy', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                <i class="fa fa-trash opacity-75"></i>
                                            </button>
                                        </form>
                                        <a class="btn btn-warning btn-sm" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail View"
                                           href="{{ route('admin.content-moderation.posts.view', $post->id) }}">
                                            <i class="fa fa-eye opacity-75"></i>
                                        </a>
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

@endsection

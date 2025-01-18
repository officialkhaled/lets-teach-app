@extends('layout')
@section('content')

    <main id="main-container">
        <div class="content">
            <div class="block block-rounded overflow-hidden">
                <form method="POST" action="{{ route('student.profile.update', $student->id) }}" class="space-y-3" enctype="multipart/form-data">
                    @csrf @method('patch')

                    <div class="block-content tab-content overflow-hidden">
                        <div class="block-content block-content-full overflow-x-auto">
                            <div class="row">
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
                                                   value="{{ $student->user->name }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                                                   value="{{ $student->user->email }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="phone_number">Phone Number (+88)</label>
                                            <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your phone number"
                                                   value="{{ $student->phone_number ?? '' }}">
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-3">
                                            <label class="form-label" for="institution">Institution</label>
                                            <input type="text" class="form-control" id="institution" name="institution" placeholder="Enter your institution"
                                                   value="{{ $student->education['institution'] ?? '' }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="degree">Degree</label>
                                            <input type="text" class="form-control" id="degree" name="degree" placeholder="Enter your education"
                                                   value="{{ $student->education['degree'] ?? '' }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="score">Score</label>
                                            <input type="number" step="any" class="form-control" id="score" name="score" placeholder="Enter your education"
                                                   value="{{ $student->education['score'] ?? '' }}">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label" for="completion_year">Completion Year</label>
                                            <input type="text" class="form-control" id="completion_year" name="completion_year" placeholder="Enter your education"
                                                   value="{{ $student->education['completion_year'] ?? '' }}">
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: 14px;">
                                        <div class="col-md-12">
                                            <h2 class="block-title fw-bold content-heading">Image Upload</h2>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-6">
                                            <label class="form-label" for="image">Profile Picture</label>
                                            <input class="form-control" type="file" id="image" name="image" onchange="previewImage(event)">
                                        </div>
                                        <div class="col-md-6 text-center">
                                            <img id="preview" alt="Profile Picture Preview" class="img-fluid"
                                                 style="width: 150px; height: 150px; object-fit: cover; border-radius: 6px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);"
                                                 src="{{ $student->user->image ? asset('storage/' . $student->user->image) : asset('assets/no_image.jpg') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center gap-2" style="margin: 20px 0;">
                            <button class="btn btn-success btn-sm" type="submit">
                                &nbsp;<i class="fa fa-save opacity-50"></i>&nbsp;&nbsp;Update&nbsp;
                            </button>
                            <a href="{{ route('student.profile.edit', $student->id) }}" class="btn btn-warning btn-sm" type="button">
                                &nbsp;<i class="fa fa-refresh opacity-50"></i>&nbsp;&nbsp;Refresh&nbsp;
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </main>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('.select2').select2({
                allowClear: true,
            });
        });
    </script>
@endsection

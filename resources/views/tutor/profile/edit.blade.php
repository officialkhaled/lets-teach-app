@extends('layout')
@section('content')

    <main id="main-container">

        <div class="content">
            <div class="block block-rounded overflow-hidden">
                <ul class="nav nav-tabs nav-tabs-block" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" id="btabs-animated-fade-tuition-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-tuition"
                                role="tab" aria-controls="btabs-animated-fade-tuition" aria-selected="true">
                            Tuition Section
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="btabs-animated-fade-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-animated-fade-profile"
                                role="tab" aria-controls="btabs-animated-fade-profile" aria-selected="false">
                            Profile Section
                        </button>
                    </li>
                </ul>
                <form method="POST" action="{{ route('tutor.profile.update', $tutor->id) }}" class="space-y-3" enctype="multipart/form-data">
                    @csrf @method('patch')

                    <div class="block-content tab-content overflow-hidden">
                        <div class="tab-pane fade show active" id="btabs-animated-fade-tuition" role="tabpanel" aria-labelledby="btabs-animated-fade-tuition-tab" tabindex="0">
                            <div class="block-content block-content-full overflow-x-auto">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row" style="margin-top: -60px;">
                                            <div class="col-md-12">
                                                <h2 class="block-title fw-bold content-heading">Tutoring Preferences</h2>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <div class="col-md-6" style="margin-bottom: 10px;">
                                                <label class="form-label" for="district_ids">Tuition Providing District</label>
                                                <select name="district_ids[]" id="district_ids" class="select2 form-select" multiple>
                                                    {{--													@foreach($tags->where('type', 1) as $tag)--}}
                                                    {{--														<option value="{{ $tag->id }}" {{ in_array($tag->id, $selectedSubjects ?? []) ? 'selected' : '' }}>--}}
                                                    {{--															{{ $tag->name }}--}}
                                                    {{--														</option>--}}
                                                    {{--													@endforeach--}}
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="area_ids">Preferred Area for Tuition</label>
                                                <select name="area_ids[]" id="area_ids" class="select2 form-select" multiple>
                                                    {{--													@foreach($tags->where('type', 2) as $tag)--}}
                                                    {{--														<option value="{{ $tag->id }}" {{ in_array($tag->id, $selectedGrades ?? []) ? 'selected' : '' }}>--}}
                                                    {{--															{{ $tag->name }}--}}
                                                    {{--														</option>--}}
                                                    {{--													@endforeach--}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <div class="col-md-3">
                                                <label class="form-label" for="medium_ids">Preferred Medium</label>
                                                <select name="medium_ids[]" id="medium_ids" class="select2 form-select" multiple>
                                                    {{--													@foreach($tags->where('type', 1) as $tag)--}}
                                                    {{--														<option value="{{ $tag->id }}" {{ in_array($tag->id, $selectedSubjects ?? []) ? 'selected' : '' }}>--}}
                                                    {{--															{{ $tag->name }}--}}
                                                    {{--														</option>--}}
                                                    {{--													@endforeach--}}
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label" for="class_ids">Preferred Classes</label>
                                                <select name="class_ids[]" id="class_ids" class="select2 form-select" multiple>
                                                    {{--													@foreach($tags->where('type', 2) as $tag)--}}
                                                    {{--														<option value="{{ $tag->id }}" {{ in_array($tag->id, $selectedGrades ?? []) ? 'selected' : '' }}>--}}
                                                    {{--															{{ $tag->name }}--}}
                                                    {{--														</option>--}}
                                                    {{--													@endforeach--}}
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label" for="subject_ids">Preferred Subjects </label>
                                                <select name="subject_ids[]" id="subject_ids" class="select2 form-select" multiple>
                                                    {{--													@foreach($tags->where('type', 2) as $tag)--}}
                                                    {{--														<option value="{{ $tag->id }}" {{ in_array($tag->id, $selectedGrades ?? []) ? 'selected' : '' }}>--}}
                                                    {{--															{{ $tag->name }}--}}
                                                    {{--														</option>--}}
                                                    {{--													@endforeach--}}
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label" for="tutoring_preference_ids">Tutoring Preference</label>
                                                <select name="tutoring_preference_ids[]" id="tutoring_preference_ids" class="select2 form-select" multiple>
                                                    {{--													@foreach($tags->where('type', 2) as $tag)--}}
                                                    {{--														<option value="{{ $tag->id }}" {{ in_array($tag->id, $selectedGrades ?? []) ? 'selected' : '' }}>--}}
                                                    {{--															{{ $tag->name }}--}}
                                                    {{--														</option>--}}
                                                    {{--													@endforeach--}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 10px;">
                                            <div class="col-md-3">
                                                <label class="form-label" for="days_ids">Days per Week</label>
                                                <select name="days_ids[]" id="days_ids" class="select2 form-select" multiple>
                                                    {{--													@foreach($tags->where('type', 1) as $tag)--}}
                                                    {{--														<option value="{{ $tag->id }}" {{ in_array($tag->id, $selectedSubjects ?? []) ? 'selected' : '' }}>--}}
                                                    {{--															{{ $tag->name }}--}}
                                                    {{--														</option>--}}
                                                    {{--													@endforeach--}}
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label" for="shift_ids">Shift Timing</label>
                                                <select name="shift_ids[]" id="shift_ids" class="select2 form-select" multiple>
                                                    {{--													@foreach($tags->where('type', 2) as $tag)--}}
                                                    {{--														<option value="{{ $tag->id }}" {{ in_array($tag->id, $selectedGrades ?? []) ? 'selected' : '' }}>--}}
                                                    {{--															{{ $tag->name }}--}}
                                                    {{--														</option>--}}
                                                    {{--													@endforeach--}}
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label" for="experience">Tuition Experience</label>
                                                <input type="text" class="form-control" id="experience" name="experience" placeholder="Enter your experience"
                                                       value="">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label" for="salary">Expected Salary</label>
                                                <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter your salary"
                                                       value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="btabs-animated-fade-profile" role="tabpanel" aria-labelledby="btabs-animated-fade-profile-tab" tabindex="0">
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
                                                       value="{{ $tutor->user?->name }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                                                       value="{{ $tutor->user?->email }}">
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
                                                <textarea class="form-control" name="bio" id="bio" rows="4" placeholder="Write...">{{ $tutor->bio ?? '' }}</textarea>
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
                                                     src="{{ $tutor->user?->image ? asset('storage/' . $tutor->user?->image) : asset('assets/no_image.jpg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center gap-2" style="margin: 20px 0;">
                            @include('components.common.dynamic-button', ['name' => 'Update', 'icon' => 'save'])
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
                allowClear: false,
            });
        });
    </script>
@endsection

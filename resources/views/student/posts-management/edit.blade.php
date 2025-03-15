@extends('layout')
@section('title', 'Edit | Posts')
@section('content')

    <main id="main-container">

        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Post Edit
                    </h3>

                    <a href="{{ route('student.posts-management.index') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
                        &nbsp;<i class="fa-regular fa-circle-left opacity-75"></i>&nbsp;&nbsp;Back&nbsp;
                    </a>
                </div>

                <div class="block-content block-content-full overflow-x-auto">
                    <div class="row">
                        <form method="POST" action="{{ route('student.posts-management.update', $post->id) }}"
                              class="space-y-3" enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <div class="col-md-12">
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-6">
                                        <label class="form-label" for="title">Title</label>
                                        <textarea name="title" id="title" rows="1" placeholder="Enter your title" class="form-control">{{ $post->title }}</textarea>
                                        @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label" for="medium_id">Medium</label>
                                        <select name="medium_id" id="medium_id" class="select2 form-select">
                                            <option></option>
                                            @foreach($mediums as $id => $medium)
                                                <option value="{{ $id }}" {{ $post->medium_id == $id ? 'selected' : '' }}>{{ $medium }}</option>
                                            @endforeach
                                        </select>
                                        @error('medium_id')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label" for="gender_id">Preferred Tutor</label>
                                        <select name="gender_id" id="gender_id" class="select2 form-select">
                                            <option></option>
                                            @foreach($genders as $id => $gender)
                                                <option value="{{ $id }}" {{ $post->gender_id == $id ? 'selected' : '' }}>{{ $gender }}</option>
                                            @endforeach
                                        </select>
                                        @error('gender_id')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-md-3">
                                        <label class="form-label" for="subject_ids">Subjects</label>
                                        <select name="subject_ids[]" id="subject_ids" class="select2 form-select" multiple>
                                            <option></option>
                                            @foreach($subjects as $id => $subject)
                                                <option value="{{ $id }}" {{ in_array($id, $selectedSubjects ?? []) ? 'selected' : '' }}>
                                                    {{ $subject }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('subject_ids')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label" for="class_id">Class</label>
                                        <select name="class_id" id="class_id" class="select2 form-select">
                                            <option></option>
                                            @foreach($classes as $id => $class)
                                                <option value="{{ $id }}" {{ $post->class_id == $id ? 'selected' : '' }}>{{ $class }}</option>
                                            @endforeach
                                        </select>
                                        @error('class_id')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label" for="tutoring_day_id">Tutoring Days/Week</label>
                                        <select name="tutoring_day_id" id="tutoring_day_id" class="select2 form-select">
                                            <option></option>
                                            @foreach($tutoringDays as $id => $tutoringDay)
                                                <option value="{{ $id }}" {{ $post->tutoring_day_id == $id ? 'selected' : '' }}>{{ $tutoringDay }}</option>
                                            @endforeach
                                        </select>
                                        @error('tutoring_day_id')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3">
                                        <label class="form-label" for="tutoring_type_id">Tutoring Type</label>
                                        <select name="tutoring_type_id" id="tutoring_type_id" class="select2 form-select">
                                            <option></option>
                                            @foreach($tutoringTypes as $id => $tutoringType)
                                                <option value="{{ $id }}" {{ $post->tutoring_type_id == $id ? 'selected' : '' }}>{{ $tutoringType }}</option>
                                            @endforeach
                                        </select>
                                        @error('tutoring_type_id')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-md-4">
                                        <label class="form-label" for="salary">Budget (BDT)</label>
                                        <input type="number" class="form-control" id="salary" name="salary" placeholder="Enter your budget" value="{{ $post->salary }}">
                                        @error('salary')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="from_time">From Time</label>
                                        <input type="text" class="js-flatpickr form-control" id="from_time" name="from_time" placeholder="Enter from time"
                                               data-enable-time="true" data-no-calendar="true" data-date-format="H:i" value="{{ $post->from_time }}">
                                        @error('from_time')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label" for="to_time">To Time</label>
                                        <input type="text" class="js-flatpickr form-control" id="to_time" name="to_time" placeholder="Enter to time"
                                               data-enable-time="true" data-no-calendar="true" data-date-format="H:i" value="{{ $post->to_time }}">
                                        @error('to_time')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-md-6">
                                        <label class="form-label" for="location">Location</label>
                                        <textarea name="location" id="location" rows="2" placeholder="Enter your location" class="form-control">{{ $post->location }}</textarea>
                                        @error('location')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="from_time">Note</label>
                                        <textarea name="note" id="note" rows="2" placeholder="Enter your note" class="form-control">{{ $post->note }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center gap-2" style="margin-top: 30px;">
                                @include('components.common.dynamic-button', ['name' => 'Update', 'icon' => 'save'])
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

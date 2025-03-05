@extends('layout')
@section('content')

    <main id="main-container">

        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Tag Edit
                    </h3>

                    <a href="{{ route('admin.tags-management.index') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
                        &nbsp;<i class="fa-regular fa-circle-left opacity-50"></i>&nbsp;&nbsp;Back&nbsp;
                    </a>
                </div>

                <div class="block-content block-content-full overflow-x-auto">
                    <div class="row">
                        <form method="POST" action="{{ route('admin.tags-management.update', $tag->id) }}" class="space-y-3" enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <div class="col-md-12">
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-6">
                                        <label class="form-label" for="type">Type</label>
                                        <select name="type" id="type" class="select2 form-select">
                                            <option></option>
                                            @foreach($tagTypes as $id => $type)
                                                <option value="{{ $id }}" {{ $selectedTagType == $id ? 'selected' : '' }}>
                                                    {{ $type }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label" for="name">Name/Text</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $tag->name }}">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center gap-2" style="margin-top: 30px;">
                                <button class="btn btn-success btn-sm" type="submit">
                                    &nbsp;<i class="fa fa-save opacity-50"></i>&nbsp;&nbsp;Update&nbsp;
                                </button>
                                <a href="{{ route('admin.tags-management.create') }}" class="btn btn-warning btn-sm" type="button">
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

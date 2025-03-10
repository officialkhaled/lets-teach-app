@extends('layout')
@section('title', 'Add | Users')
@section('content')

    <main id="main-container">

        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        User Entry
                    </h3>

                    <a href="{{ route('admin.settings.users.index') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
                        &nbsp;<i class="fa-regular fa-circle-left opacity-75"></i>&nbsp;&nbsp;Back&nbsp;
                    </a>
                </div>

                <div class="block-content block-content-full overflow-x-auto">
                    <div class="row">
                        <form method="post" action="{{ route('admin.settings.users.store') }}" class="space-y-3" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-12">
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-6">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email"/>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-6">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter password"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Roles</label>
                                        <select name="roles[]" class="form-control select2" multiple>
                                            <option value="">Select Role</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role }}">
                                                    {{ $role }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center gap-2" style="margin-top: 30px;">
                                <button class="btn btn-success btn-sm" type="submit">
                                    &nbsp;<i class="fa fa-save opacity-75"></i>&nbsp;&nbsp;Save&nbsp;
                                </button>
                                <button class="btn btn-warning btn-sm" type="button" onclick="pageRefresh()">
                                    &nbsp;<i class="fa fa-refresh opacity-75"></i>&nbsp;&nbsp;Refresh&nbsp;
                                </button>
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

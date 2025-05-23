@extends('layout')
@section('title', 'Edit | Users')
@section('content')

    <main id="main-container">

        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        User Edit
                    </h3>

                    <a href="{{ route('admin.settings.users.index') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
                        &nbsp;<i class="fa-regular fa-circle-left opacity-75"></i>&nbsp;&nbsp;Back&nbsp;
                    </a>
                </div>

                <div class="block-content block-content-full overflow-x-auto">
                    <div class="row">
                        <form method="POST" action="{{ route('admin.settings.users.update', $user->id) }}" class="space-y-3">
                            @csrf
                            @method('patch')

                            <div class="col-md-12">
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-6">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" placeholder="Enter name">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" value="{{ $user->email }}" id="email" class="form-control" placeholder="Enter email"/>
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
                                                <option value="{{ $role }}" {{ in_array($role, $userRoles) ? 'selected':'' }}>
                                                    {{ $role }}
                                                </option>
                                            @endforeach
                                        </select>
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

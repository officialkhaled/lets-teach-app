@extends('layout')
@section('content')

    <main id="main-container">

        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Permissions
                    </h3>

                    <a href="{{ route('admin.settings.roles.index') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
                        &nbsp;<i class="fa-regular fa-circle-left opacity-75"></i>&nbsp;&nbsp;Back&nbsp;
                    </a>
                </div>

                <div class="block-content block-content-full overflow-x-auto">
                    <div class="row">
                        <form method="POST" action="{{ url('admin/settings/roles/'.$role->id.'/give-permissions') }}" class="space-y-3">
                            @csrf
                            @method('PUT')

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="permission" class="mb-2">
                                            <b>Role: <span class="underline">{{ $role->name }}</span></b>
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="row" style="margin-top: 10px;">
                                    @foreach ($permissions as $permission)
                                        <div class="col-md-2">
                                            <label>
                                                <input type="checkbox" name="permission[]" value="{{ $permission->name }}"
                                                    {{ in_array($permission->id, $rolePermissions) ? 'checked':'' }}/>
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="d-flex justify-content-center gap-2" style="margin-top: 30px;">
                                <button class="btn btn-success btn-sm" type="submit">
                                    &nbsp;<i class="fa fa-save opacity-50"></i>&nbsp;&nbsp;Update&nbsp;
                                </button>
                                <button class="btn btn-warning btn-sm" type="button" onclick="pageRefresh()">
                                    &nbsp;<i class="fa fa-refresh opacity-50"></i>&nbsp;&nbsp;Refresh&nbsp;
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection

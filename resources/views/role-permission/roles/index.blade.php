@extends('layout')
@section('content')

    <main id="main-container">

        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Roles
                    </h3>

                    <a href="{{ route('admin.settings.roles.create') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
                        &nbsp;<i class="fa-solid fa-plus opacity-50"></i>&nbsp;&nbsp;Add&nbsp;
                    </a>
                </div>

                <div class="block-content block-content-full overflow-x-auto">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 8%">SL</th>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell text-center" style="width: 25%;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $role->name }}</td>
                                <td class="text-center">
                                    <a href="{{ url('admin/settings/roles/'.$role->id.'/give-permissions') }}" class="btn btn-sm btn-warning shadow-sm">
                                        <i class="fa-solid fa-plus opacity-75"></i>&nbsp;&nbsp;Add / Edit Role Permission
                                    </a>
                                    @can('update permission')
                                        <a href="{{ url('admin/settings/roles/'.$role->id.'/edit') }}" class="btn btn-sm btn-success mx-1 shadow-sm">
                                            <i class="fa-solid fa-pen-to-square opacity-75"></i>
                                        </a>
                                    @endcan
                                    @can('delete permission')
                                        <a href="{{ url('admin/settings/roles/'.$role->id.'/delete') }}" class="btn btn-sm btn-danger shadow-sm">
                                            <i class="fa-solid fa-trash opacity-75"></i>
                                        </a>
                                    @endcan
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

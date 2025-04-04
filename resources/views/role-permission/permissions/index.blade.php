@extends('layout')
@section('title', 'Permissions')
@section('content')

    <main id="main-container">

        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Permissions
                    </h3>

                    <a href="{{ route('admin.settings.permissions.create') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
                        &nbsp;<i class="fa-solid fa-plus opacity-75"></i>&nbsp;&nbsp;Add&nbsp;
                    </a>
                </div>

                <div class="block-content block-content-full overflow-x-auto">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 8%">SL</th>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($permissions as $permission)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $permission->name }}</td>
                                <td class="text-center">
                                    @can('Update Permission')
                                        <a href="{{ url('admin/settings/permissions/'.$permission->id.'/edit') }}" class="btn btn-sm btn-success shadow-sm">
                                            <i class="fa-solid fa-pen-to-square opacity-75"></i>
                                        </a>
                                    @endcan
                                    @can('Delete Permission')
                                        <a href="{{ url('admin/settings/permissions/'.$permission->id.'/delete') }}" class="btn btn-sm btn-danger mx-2 shadow-sm">
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

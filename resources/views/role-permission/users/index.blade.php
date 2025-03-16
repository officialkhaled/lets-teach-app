@extends('layout')
@section('title', 'Users')
@section('content')

    <main id="main-container">

        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Users
                    </h3>

                    <a href="{{ route('admin.settings.users.create') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
                        &nbsp;<i class="fa-solid fa-plus opacity-75"></i>&nbsp;&nbsp;Add&nbsp;
                    </a>
                </div>

                <div class="block-content block-content-full overflow-x-auto">
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 8%">SL</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $rolename)
                                            <label class="badge bg-primary mx-1">{{ $rolename }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                <td class="text-center">
                                    @can('Update User')
                                        <a href="{{ url('admin/settings/users/'.$user->id.'/edit') }}" class="btn btn-sm btn-success shadow-sm">
                                            <i class="fa-solid fa-pen-to-square opacity-75"></i>
                                        </a>
                                    @endcan
                                    @can('Delete User')
                                        <a href="{{ url('admin/settings/users/'.$user->id.'/delete') }}" class="btn btn-sm btn-danger shadow-sm">
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

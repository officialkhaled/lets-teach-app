@extends('layout')
@section('title', 'Edit | Roles')
@section('content')

    <main id="main-container">

        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Role Edit
                    </h3>

                    <a href="{{ route('admin.settings.roles.index') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
                        &nbsp;<i class="fa-regular fa-circle-left opacity-75"></i>&nbsp;&nbsp;Back&nbsp;
                    </a>
                </div>

                <div class="block-content block-content-full overflow-x-auto">
                    <div class="row">
                        <form method="POST" action="{{ route('admin.settings.roles.update', $role->id) }}" class="space-y-3">
                            @csrf
                            @method('patch')

                            <div class="col-md-12">
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-12">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ $role->name }}">
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

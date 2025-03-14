@extends('layout')
@section('title', 'Add | Permissions')
@section('content')

    <main id="main-container">

        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">
                        Permission Entry
                    </h3>

                    <a href="{{ route('admin.settings.permissions.index') }}" class="btn btn-info btn-sm waves-effect bg-gradient">
                        &nbsp;<i class="fa-regular fa-circle-left opacity-75"></i>&nbsp;&nbsp;Back&nbsp;
                    </a>
                </div>

                <div class="block-content block-content-full overflow-x-auto">
                    <div class="row">
                        <form method="post" action="{{ route('admin.settings.permissions.store') }}" class="space-y-3" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-12">
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-md-12">
                                        <label class="form-label" for="name">Permission Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center gap-2" style="margin-top: 30px;">
                                @include('components.common.dynamic-button', ['name' => 'Save', 'icon' => 'save'])
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection

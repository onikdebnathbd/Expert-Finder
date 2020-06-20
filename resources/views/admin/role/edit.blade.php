@extends('admin.layouts.app')

@push('links')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <style>
        /*select2*/
        .select2-container--bootstrap4.select2-container--focus .select2-selection {
            box-shadow: none !important;
            border-color: #80bdff !important;
        }
        /*Multiple select2*/
        .select2-container .select2-search--inline .select2-search__field {
            padding: 0 .45rem !important;
        }
    </style>
@endpush

@push('scripts')
    <!-- Select2 -->
    <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
@endpush

@section('main-content')
    <div class="content-wrapper" style="min-height: 1016.35px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Roles</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('role.index') }}">Roles</a></li>
                            <li class="breadcrumb-item active">Edit Role</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default" data-select2-id="16">
                    <div class="card-header">
                        <h3 class="card-title">Edit Role</h3>
                    </div>

                    <form role="form" action="{{ route('role.update', $role->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : ''  }}" value="{{ $role->name }}" name="name" id="name" placeholder="Enter user role name">
                                        @include('includes.errors.name')
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="admin-permission">Admin Permissions</label>
                                        <select class="select2bs4 select2-hidden-accessible" name="permission[]" id="admin-permission" multiple="" data-placeholder="Assign admin permissions" style="width: 100%;" data-select2-id="33" tabindex="-1" aria-hidden="true">
                                            @foreach($permissions as $permission)
                                                @if($permission->for == 'Admin')
                                                    <option value="{{ $permission->id }}"
                                                        @foreach($role->permissions as $role_permit)
                                                            @if($role_permit->id == $permission->id)
                                                                selected
                                                            @endif
                                                        @endforeach
                                                    >{{ $permission->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role-permission">Role Permissions</label>
                                        <select class="select2bs4 select2-hidden-accessible" name="permission[]" id="role-permission" multiple="" data-placeholder="Assign role permissions" style="width: 100%;" data-select2-id="34" tabindex="-1" aria-hidden="true">
                                            @foreach($permissions as $permission)
                                                @if($permission->for == 'Role')
                                                    <option value="{{ $permission->id }}"
                                                        @foreach($role->permissions as $role_permit)
                                                            @if($role_permit->id == $permission->id)
                                                                selected
                                                            @endif
                                                        @endforeach
                                                    >{{ $permission->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="permission-permission">Permission Permissions</label>
                                        <select class="select2bs4 select2-hidden-accessible" name="permission[]" id="permission-permission" multiple="" data-placeholder="Assign permission permissions" style="width: 100%;" data-select2-id="35" tabindex="-1" aria-hidden="true">
                                            @foreach($permissions as $permission)
                                                @if($permission->for == 'Permission')
                                                    <option value="{{ $permission->id }}"
                                                        @foreach($role->permissions as $role_permit)
                                                            @if($role_permit->id == $permission->id)
                                                                selected
                                                            @endif
                                                        @endforeach
                                                    >{{ $permission->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category-permission">Category Permissions</label>
                                        <select class="select2bs4 select2-hidden-accessible" name="permission[]" id="category-permission" multiple="" data-placeholder="Assign category permissions" style="width: 100%;" data-select2-id="36" tabindex="-1" aria-hidden="true">
                                            @foreach($permissions as $permission)
                                                @if($permission->for == 'Category')
                                                    <option value="{{ $permission->id }}"
                                                        @foreach($role->permissions as $role_permit)
                                                            @if($role_permit->id == $permission->id)
                                                                selected
                                                            @endif
                                                        @endforeach
                                                    >{{ $permission->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->
                            <button type="submit" class="btn btn-primary" style="margin-top: 5px; margin-bottom: 5px;">Update Role</button>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection




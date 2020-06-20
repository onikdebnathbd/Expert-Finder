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
                        <h1>Admins</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Admins</a></li>
                            <li class="breadcrumb-item active">Edit Admin</li>
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
                        <h3 class="card-title">Edit Admin</h3>
                    </div>

                    <form role="form" action="{{ route('admin.update', $admin->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : ''  }}" name="name" id="name" value="{{ old('name') ? old('name') : $admin->name }}" placeholder="Enter admin name">
                                        @include('includes.errors.name')
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : ''  }}" name="email" id="email" value="{{ old('email') ? old('email') : $admin->email }}" placeholder="Enter admin email">
                                        @include('includes.errors.email')
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : ''  }}" name="phone" id="phone" value="{{ old('phone') ? old('phone') : $admin->phone }}" placeholder="Enter admin phone no">
                                        @include('includes.errors.phone')
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="role">Roles</label>
                                        <select class="select2bs4 select2-hidden-accessible" name="role[]" id="role" multiple="" data-placeholder="Assign roles" style="width: 100%;" data-select2-id="35" tabindex="-1" aria-hidden="true">
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}"
                                                    @foreach($admin->roles as $admin_role)
                                                        @if($admin_role->id == $role->id)
                                                            selected
                                                        @endif
                                                    @endforeach
                                                >{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <div class="checkbox">
                                            <label style="font-weight: normal; color: #495057;"><input type="checkbox" style="margin-right: 3px;" name="status" value="1"{{ old('status') == 1 || $admin->status == 1 ? ' checked' : '' }}>Active</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <button type="submit" class="btn btn-primary" style="margin-bottom: 5px; margin-top: 5px;">Update Admin</button>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
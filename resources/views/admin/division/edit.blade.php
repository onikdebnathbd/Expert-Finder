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
                        <h1>Divisions</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('division.index') }}">Divisions</a></li>
                            <li class="breadcrumb-item active">Edit Division</li>
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
                        <h3 class="card-title">Edit Division</h3>
                    </div>

                    <form role="form" action="{{ route('division.update', $division->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : ''  }}" value="{{ $division->name }}" name="name" id="name" placeholder="Enter division name">
                                        @include('includes.errors.name')
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : ''  }}" value="{{ $division->slug }}" name="slug" id="slug" placeholder="Enter division slug">
                                        @include('includes.errors.slug')
                                    </div>
                                    @can('divisions.publish', Auth::user())
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <div class="checkbox">
                                                <label style="font-weight: normal; color: #495057;"><input type="checkbox" style="margin-right: 3px;" name="status" value="1"{{ old('status') == 1 || $division->status == 1 ? ' checked' : '' }}>Publish</label>
                                            </div>
                                        </div>
                                    @endcan
                                </div>
                            </div>
                            <!-- /.row -->
                            <button type="submit" class="btn btn-primary" style="margin-top: 5px; margin-bottom: 5px;">Update Division</button>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection




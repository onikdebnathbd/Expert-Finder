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
                            <li class="breadcrumb-item active">Add New</li>
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
                        <h3 class="card-title">Add New Division</h3>
                    </div>

                    <form role="form" action="{{ route('division.store') }}" method="post">
                        @csrf
                        <!-- /.card-header -->
                        <div class="card-body" style="display: block;">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : ''  }}" name="name" id="name" placeholder="Enter division name">
                                        @include('includes.errors.name')
                                    </div>
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <select class="select2bs4 select2-hidden-accessible" name="country" id="country" data-placeholder="Country Name" style="width: 100%;" data-select2-id="34" tabindex="-1" aria-hidden="true">
                                            @foreach($countries as $country)
                                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : ''  }}" name="slug" id="slug" placeholder="Enter division slug">
                                        @include('includes.errors.slug')
                                    </div>
                                    @can('divisions.publish', Auth::user())
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <div class="checkbox">
                                                <label style="font-weight: normal; color: #495057;"><input style="margin-right: 5px;" type="checkbox" name="status" value="1"{{ old('status') == 1 ? ' checked' : '' }}>Publish</label>
                                            </div>
                                        </div>
                                    @endcan
                                </div>
                            </div>
                            <!-- /.row -->
                            <button type="submit" class="btn btn-primary" style="margin-top: 5px; margin-bottom: 5px;">Add Division</button>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
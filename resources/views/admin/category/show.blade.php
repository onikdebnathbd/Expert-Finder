@extends('admin.layouts.app')

<!-- links For This Page -->
@push('links')
    @include('admin.includes.common-links')
    <link rel="stylesheet" href="{{ asset('admin/plugins/sweetalert2/sweetalert2.min.css') }}">
    <!-- SweetAlert2 -->
    {{--<link rel="stylesheet" href="{{ asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">--}}
    <style>
        /*View Modal*/
        .modal-table { width: 100%; }
        .modal-table tr {  border-top: 1px solid #dee2e6; background-color: white !important; }
        .modal-table tr:first-child { border-top: 0; }
        .modal-table td { border: 0; }

        /*Laravel Sweet Alert2*/
        .swal2-popup.swal2-toast.swal2-show {
            padding: 0.4em;
        }
        .swal2-popup.swal2-toast .swal2-title {
            font-size: 1em!important;
        }

        /*Sweet Alert2 Delete Modal*/
        button.swal2-confirm.swal2-styled, button.swal2-cancel.swal2-styled {
            padding: .270em 0.9em;
        }
        button.swal2-confirm.swal2-styled:focus, button.swal2-cancel.swal2-styled:focus {
            box-shadow: none;
        }
        h2#swal2-title { font-weight: 500!important; font-size: 1.400em; }
    </style>
@endpush

<!-- Scripts For This Page -->
@push('scripts')
    @include('admin.includes.common-scripts')
    <!-- Sweet Alert -->
    @include('sweetalert::alert')
    <!-- SweetAlert2 Plugin -->
    <script src="{{ asset('admin/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script type="text/javascript">
        $(function(){
            $(".delete-category").click(function(event){
                event.preventDefault();
                var id = $(this).attr("id");
                Swal.fire({
                    title: 'Are You Sure to Delete This?',
                    text: "You won't be able to revert!",
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonColor: '#007bff',
                    cancelButtonColor: '#dc3545',
                    width: '420px',
                    position: 'top'
                }).then((result) => {
                    if (result.value) {
                        $("#delete-form-" + id ).submit();
                    }
                })
            });
        });
    </script>
@endpush

@section('main-content')
    <div class="content-wrapper" style="min-height: 1016.35px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Categories</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Categories</a></li>
                            <li class="breadcrumb-item active">All Categories</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Categories</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    @can('categories.edit_delete', Auth::user())
                                        <th>Actions</th>
                                    @endcan
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->status ? 'Publish' : 'Unpublish'}}</td>
                                        <td>
                                            <!-- Edit -->
                                            @can('categories.update', Auth::user())
                                            <a class="btn btn-info btn-sm" href="{{ route('category.edit', $category->id) }}"><i class="far fa-edit"></i></a>
                                            @endcan
                                            <!-- End Edit -->

                                            <!-- Delete -->
                                            @can('categories.delete', Auth::user())
                                                <form style="display: inline-block;" id="delete-form-{{ $category->id }}" action="{{ route('category.destroy', $category->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm delete-category" id="{{ $category->id }}"><i class="far fa-trash-alt"></i></button>
                                                </form>
                                            @endcan
                                            <!-- End Delete -->
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    @can('categories.edit_delete', Auth::user())
                                        <th>Actions</th>
                                    @endcan
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
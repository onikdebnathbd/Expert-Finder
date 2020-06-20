@extends('admin.layouts.app')

<!-- links For This Page -->
@push('links')
    <!-- data table -->
    @include('admin.includes.common-links')
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/sweetalert2/sweetalert2.min.css') }}">
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
    <!-- data table -->
    @include('admin.includes.common-scripts')
    <!-- Laravel SweetAlert2 -->
    @include('sweetalert::alert')
    <!-- SweetAlert2 Plugin -->
    <script src="{{ asset('admin/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script type="text/javascript">
        $(function(){
            $(".delete-admin").click(function(event){
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

           /* $(".view_admin").click(function(){

            });*/
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
                        <h1>Users</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Admins</a></li>
                            <li class="breadcrumb-item active">All Admins</li>
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
                            <h3 class="card-title">All Users</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($admins as $admin)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $admin->name }}</td>
                                        <td>
                                           @foreach($admin->roles as $role)
                                                {{ $role->name }}
                                           @endforeach
                                        </td>
                                        <td>{{ $admin->status ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <!-- View -->
                                            <a class="btn btn-primary btn-sm" href="{{ route('admin.show', $admin->id) }}" data-toggle="modal" data-target="#modal-default_{{ $admin->id }}">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal-default_{{ $admin->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Admin Details</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table class="modal-table">
                                                                <tbody>
                                                                <tr>
                                                                    <td>Name</td>
                                                                    <td>{{ $admin->name }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Email</td>
                                                                    <td>{{ $admin->email }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Roles</td>
                                                                    <td>
                                                                        @foreach($admin->roles as $role)
                                                                            {{ $role->name }},
                                                                        @endforeach
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Status</td>
                                                                    <td>{{ $admin->status ? 'Active' : 'Not Active' }}</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <!-- /.modal -->
                                            <!-- End View -->

                                            <!-- Edit -->
                                            @can('admins.update', Auth::user())
                                            <a class="btn btn-info btn-sm" href="{{ route('admin.edit', $admin->id) }}"><i class="far fa-edit"></i></a>
                                            @endcan
                                            <!-- End Edit -->

                                            @can('admins.delete', Auth::user())
                                            <form style="display: inline-block;" id="delete-form-{{ $admin->id }}" action="{{ route('admin.destroy', $admin->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm delete-admin" id="{{ $admin->id }}"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Actions</th>
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
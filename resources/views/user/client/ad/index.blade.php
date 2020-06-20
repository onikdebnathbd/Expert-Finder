@extends('user.layouts.app')

<!-- links For This Page -->
@push('head')
    @include('user.adminlte-design.style')
    @include('user.adminlte-design.custom-style')
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

        /*Data Table*/
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6!important;
            border-left-width: 0!important;
            border-bottom-width: 0!important;
        }
    </style>
@endpush

@push('footer')
    @include('user.adminlte-design.script')
    @include('admin.includes.common-scripts')
    <!-- Laravel SweetAlert2 -->
    @include('sweetalert::alert')
    <!-- SweetAlert2 Plugin -->
    <script src="{{ asset('admin/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <script type="text/javascript">
        $(function(){
            $(".delete-ad").click(function(event){
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

    <!-- data table -->
    <script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
    </script>
@endpush

@section('main-content')
    <div class="content-wrapper" style="margin-left: 0!important;">

        <section class="content profile-content">
            <div class="container">
                <div class="card" style="border-top-left-radius: 0; border-top-right-radius: 0;">
                    <div class="card-header p-2">
                        <ul class="nav  nav-pills">
                            <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">My Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('settings') }}">Personal Info</a></li>
                            @can('expert.profession', Auth::user())
                                <li class="nav-item"><a class="nav-link" href="{{ route('profession') }}">Professional Info</a></li>
                            @endcan
                            @can('expert.education', Auth::user())
                                <li class="nav-item"><a class="nav-link" href="{{ route('education') }}">Educational Info</a></li>
                            @endcan
                            @can('client.ad', Auth::user())
                                <li class="nav-item"><a class="nav-link" href="{{ route('ad.create') }}">Offer A Job</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ route('ad.index') }}">Ads</a></li>
                            @endcan
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($ads as $ad)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ Str::limit($ad->title, 60) }}</td>
                                    <td>{{ Str::limit($ad->description, 175) }}</td>
                                    <td style="display: inline-flex;">
                                        <!-- View -->
                                        <a class="btn btn-primary btn-sm" href="{{ route('ad.show', $ad->id) }}" style="margin-right: 5px;"><i class="far fa-eye"></i></a>
                                        <!-- End View -->

                                        <!-- Edit -->
                                        <a class="btn btn-info btn-sm" href="{{ route('ad.edit', $ad->id) }}" style="margin-right: 5px;"><i class="far fa-edit"></i></a>
                                        <!-- End Edit -->

                                        <!-- Delete -->
                                        <form style="display: inline-block;" id="delete-form-{{ $ad->id }}" action="{{ route('ad.destroy', $ad->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-ad" id="{{ $ad->id }}"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                        <!-- End Delete -->
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>S.No</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                        <!-- Main content -->
                        {{--<section class="content">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">All Roles</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">

                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </section>--}}
                        <!-- /.content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->

            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
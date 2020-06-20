@extends('user.layouts.app')

<!-- links For This Page -->
@push('links')
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/sweetalert2/sweetalert2.min.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">--}}
    <style>
        /*Laravel Sweet Alert2*/
        .swal2-popup.swal2-toast .swal2-title {
            font-size: 1em!important;
        }
        .swal2-select {
            display: none;
        }
        .swal2-popup.swal2-toast .swal2-title {
            font-family: sans-serif!important;
            font-weight: 500!important;
        }
    </style>
@endpush

@push('scripts')
    <!-- Laravel SweetAlert2 -->
    @include('sweetalert::alert')
@endpush

@section('main-content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Welcome</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
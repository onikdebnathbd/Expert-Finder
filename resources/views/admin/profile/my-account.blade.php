@extends('admin.layouts.app')

@push('links')
    <style>
        /*Laravel Sweet Alert2*/
        .swal2-popup.swal2-toast.swal2-show {
            padding: 0.4em;
        }
        .swal2-popup.swal2-toast .swal2-title {
            font-size: 1em!important;
        }

        /*Profile Page*/
        .profile-content .table tr {
            border-top: 1px solid #dee2e6;
        }
        .profile-content .table tr:first-child {
            border-top: 0;
        }
        .profile-content .table tr td {
            border: 0;
        }
    </style>
@endpush

<!-- Scripts For This Page -->
@push('scripts')
    <!-- Laravel SweetAlert2 -->
     @include('sweetalert::alert')
@endpush

@section('main-content')
    <div class="content-wrapper" style="min-height: 1016.35px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.profile.my-account') }}">Profile</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content profile-content">
            <div class="container-fluid">
                <div class="card card-primary" style="margin-bottom: 0 !important; border-bottom-left-radius: 0; border-bottom-right-radius: 0;
                        background-image: url('{{ asset('admin/dist/img/coding-1.jpg') }}');  background-repeat: no-repeat;
                        background-size: 100% 100%;">
                    <div class="card-body box-profile" style="padding: 4rem;">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center" style="font-size: 34px; color: white; font-weight: bold">{{ Auth::user()->name }}</h3>

                        <p class="text-center" style="color: white; font-size: 20px;">
                            @foreach(Auth::user()->roles as $role)
                                {{ $role->name }}
                            @endforeach</p>
                    </div>
                    <!-- /.card-body -->
                </div>

                <div class="card" style="    border-top-left-radius: 0; border-top-right-radius: 0;">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.profile.my-account') }}">My Account</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.profile.settings') }}">Settings</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td>{{ Auth::user()->phone }}</td>
                            </tr>
                            <tr>
                                <td>Roles</td>
                                <td>
                                    @foreach(Auth::user()->roles as $role)
                                        {{ $role->name }}
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>Permissions</td>
                                <td>
                                    @foreach(Auth::user()->roles as $role)
                                        @foreach($role->permissions as $permission)
                                            {{ $permission->name }},
                                        @endforeach
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->

            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

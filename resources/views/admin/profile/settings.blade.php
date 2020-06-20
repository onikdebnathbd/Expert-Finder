@extends('admin.layouts.app')

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
                            <li class="breadcrumb-item"><a href="{{ route('admin.profile.settings') }}">settings</a></li>
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
                        <ul class="nav  nav-pills">
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.profile.my-account') }}">My Account</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('admin.profile.settings') }}">Settings</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <form role="form" action="{{ route('admin.profile.settings') }}" method="post">
                        @csrf
                        <!-- /.card-header -->
                            <div class="card-body" style="display: block;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : ''  }}" name="name" id="name" value="{{ Auth::user()->name }}" placeholder="Enter your full name">
                                            @include('includes.errors.name')
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}" placeholder="Enter your email" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : ''  }}" name="phone" id="email" value="{{ Auth::user()->phone }}" placeholder="Enter your phone no">
                                            @include('includes.errors.phone')
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : ''  }}" name="password" id="password" placeholder="Enter your password">
                                            @include('includes.errors.password')
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : ''  }}" name="password_confirmation" id="password_confirmation" placeholder="Enter your confirm password">
                                            @include('includes.errors.confirm_password')
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <button type="submit" class="btn btn-primary" style="margin-bottom: 5px;">Update Profile</button>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->

            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

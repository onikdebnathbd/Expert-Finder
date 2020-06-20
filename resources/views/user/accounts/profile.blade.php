@extends('user.layouts.app')

<!-- links For This Page -->
@push('head')
    @include('user.includes.sweet-alert-style')
    @include('user.adminlte-design.style')
    @include('user.adminlte-design.custom-style')
    <style>
        tr { border: 0!important; }
        .label { font-weight: bold; padding-left: 0!important; }
        dt, dd { padding-bottom: 15px!important; }
        dt, dd:last-child { padding-bottom: 0!important; }
    </style>
@endpush

@push('footer')
    @include('user.adminlte-design.script')
    @include('user.includes.sweet-alert-script')
@endpush

@section('main-content')
    <section class="content profile-content">
        <div class="container">
            <div class="card card-primary" style="margin-bottom: 0 !important; border-bottom-left-radius: 0; border-bottom-right-radius: 0;
                    background-image: url('{{ asset('admin/dist/img/coding-1.jpg') }}');  background-repeat: no-repeat;
                    background-size: 100% 100%;">
                <div class="card-body box-profile" style="padding: 5rem;">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center" style="font-size: 32px; color: white; font-weight: bold">{{ Auth::user()->name }}</h3>
                    <p class="text-center" style="color: white; font-size: 20px;">
                        @foreach(Auth::user()->roles as $role)
                            {{ $role->name }}
                        @endforeach</p>
                    {{--<p class="text-center" style="color: white; font-size: 20px;">
                        Member Since {{ Auth::user()->created_at }}
                    </p>--}}
                </div>
                <!-- /.card-body -->
            </div>

            <div class="card" style="border-top-left-radius: 0; border-top-right-radius: 0;">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
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
                    <div class="card" style="box-shadow: none!important;">
                        <div class="card-header" style=" width: 188px; padding-left: 0; padding-right: 0; border-width: 2px; text-transform: uppercase; margin-left: 20px;">
                            <h3 class="card-title">
                                Personal Information
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Name</strong>
                            <p class="text-muted">
                                {{  Auth::user()->name }}
                            </p>

                            <strong><i class="far fa-envelope"></i> Email</strong>
                            <p class="text-muted">{{ Auth::user()->email }}</p>

                            <strong><i class="fas fa-phone"></i> Phone</strong>
                            <p class="text-muted">{{ Auth::user()->phone }}</p>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>
                            <p class="text-muted">{{ Auth::user()->address }}</p>

                            <strong><i class="fas fa-user-secret"></i> Role</strong>
                            <p class="text-muted">
                                @foreach(Auth::user()->roles as $role)
                                    {{ $role->name }}
                                @endforeach
                            </p>

                            <strong><i class="far fa-eye"></i> Visibility</strong>
                            <p class="text-muted">
                                @if(Auth::user()->visibility == 1)
                                    {{ 'Visible' }}
                                @else
                                    {{ 'Invisible' }}
                                @endif
                            </p>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    @foreach(Auth::user()->roles as $role)
                        @if($role->name == 'Expert')
                            <div class="card" style="box-shadow: none!important;">
                                <div class="card-header" style=" width: 223px; padding-left: 0; padding-right: 0; border-width: 2px; text-transform: uppercase; margin-left: 20px;">
                                    <h3 class="card-title">
                                        Professional Information
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-clipboard-list"></i> Categories</strong>
                                    <p class="text-muted">
                                        @foreach(Auth::user()->categories as $category)
                                            {{ $category->name . ', ' }}
                                        @endforeach
                                    </p>

                                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                                    <p class="text-muted">{{ Auth::user()->profession->skill }}</p>

                                    <strong><i class="far fa-file-alt mr-1"></i> Experience</strong>
                                    <p class="text-muted">{{ Auth::user()->profession->experience }}</p>

                                    <strong><i class="far fa-eye"></i> Visibility</strong>
                                    <p class="text-muted">
                                        @if(Auth::user()->profession->visibility == 1)
                                            {{ 'Visible' }}
                                        @else
                                            {{ 'Invisible' }}
                                        @endif
                                    </p>
                                </div>
                                <!-- /.card-body -->
                            </div>

                            <div class="card" style="box-shadow: none!important;">
                                <div class="card-header" style=" width: 214px; padding-left: 0; padding-right: 0; border-width: 2px; text-transform: uppercase; margin-left: 20px;">
                                    <h3 class="card-title">
                                        Educational Information
                                    </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <ul>
                                        <li>
                                            @foreach(Auth::user()->educations as $expert)
                                                <p class="text-muted">
                                                    {{ $expert->degree_type . ' in ' . $expert->subject . ' from the ' . $expert->institution . ' at ' . $expert->location  }}
                                                </p>
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        @endif
                    @endforeach

                </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->

        </div><!-- /.container-fluid -->
    </section>
@endsection

{{--
<strong>Personal Information</strong>
<table class="table">
    <tbody>
    <tr>
        <td class="label"> Name</td>
        <td>{{ Auth::user()->name }}</td>
    </tr>
    <tr>
        <td class="label">Email</td>
        <td>{{ Auth::user()->email }}</td>
    </tr>
    <tr>
        <td class="label">Phone</td>
        <td>{{ Auth::user()->phone }}</td>
    </tr>
    <tr>
        <td class="label">Address</td>
        <td>{{ Auth::user()->address }}</td>
    </tr>
    <tr>
        <td class="label">Role</td>
        @foreach(Auth::user()->roles as $role)
            <td>
                {{ $role->name }}
            </td>
        @endforeach
    </tr>
    <tr>
        <td class="label">Categories</td>
        <td>
            @foreach(Auth::user()->categories as $category)
                {{ $category->name . ', ' }}
            @endforeach
        </td>
    </tr>
    <tr>
        <td class="label">Visibility</td>
        <td>
            @if(Auth::user()->visibility == 1)
                {{ 'Visible' }}
            @else
                {{ 'Invisible' }}
            @endif
        </td>
    </tr>
</table>
<hr>--}}

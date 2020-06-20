@extends('user.layouts.app')

<!-- links For This Page -->
@push('head')
    @include('user.adminlte-design.style')
    @include('user.adminlte-design.custom-style')
@endpush

@push('footer')
    @include('user.adminlte-design.script')
@endpush

@section('main-content')
    <div class="content-wrapper" style="margin-left: 0!important;">

        <section class="content profile-content">
            <div class="container">
                <div class="card" style="    border-top-left-radius: 0; border-top-right-radius: 0;">
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
                        ad
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->

            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
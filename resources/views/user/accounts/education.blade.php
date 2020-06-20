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
                        <form role="form" action="{{ route('education') }}" method="post">
                        @csrf
                        <!-- /.card-header -->
                            <div class="card-body" style="display: block;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="degree_type">Degree Type</label>
                                            <input type="text" class="form-control" name="degree_type" id="degree_type" {{--value="{{ Auth::user()->education->degree_type" }}--}} placeholder="Enter your degree type">
                                        </div>
                                        <div class="form-group">
                                            <label for="institution">Institution</label>
                                            <input type="text" class="form-control" name="institution" id="institution" {{--value="{{ Auth::user()->education->degree_type" }}--}} placeholder="Enter your institution name">
                                        </div>
                                        <div class="form-group">
                                            <label for="visibility">Visibility</label>
                                            <div class="checkbox">
                                                <label style="font-weight: normal; color: #495057;">
                                                    <input type="checkbox" style="margin-right: 3px; display: inline-block;" name="visibility" value="1"{{--{{ old('visibility') == 1 || Auth::user()->education->visibility == 1 ? ' checked' : '' }}--}}>Visible
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="subject">Subject Or Group</label>
                                            <input type="text" class="form-control" name="subject" id="subject" {{--value="{{ Auth::user()->education->degree_type" }}--}} placeholder="Enter subject Or group name of your specific degree">
                                        </div>
                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <textarea id="location" name="location" class="form-control" style="height: 39px;" placeholder="Enter the location of your institution">{{--{{ Auth::user()->education->degree_type }}--}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                                <button type="submit" class="btn btn-primary" style="margin-bottom: 5px;">Update Educational Info</button>
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
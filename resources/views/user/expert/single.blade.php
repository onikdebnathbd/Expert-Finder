@extends('user.layouts.app')

@push('head')
    <style>
        .explorer_europe.list_wrap {
            padding-top: 18px!important;
            padding-bottom: 0;
        }
    </style>

    @include('user.adminlte-design.style')
@endpush
@push('footer')
    @include('user.adminlte-design.script')
@endpush

@section('main-content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3 style="font-family: Shadows Into Light;">Profile</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="explorer_europe list_wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

        <!-- Profile Image -->
        <div class="card card-primary" style="margin-bottom: 0 !important; border-bottom-left-radius: 0; border-bottom-right-radius: 0;">
            <div class="card-body box-profile">
                <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle" style="height: 81px; width: 81px;"
                         src="{{ asset($expert->image) }}"
                         alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $expert->name }}</h3>

                <p class="text-muted text-center">

                </p>

                <p class="text-center">
                    @foreach($expert->categories as $category)
                        {{ $category->name . '/ ' }}
                    @endforeach
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary" style="border-top-left-radius: 0; border-top-right-radius: 0;">
            <div class="card-body">
                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                <p class="text-muted">{{$expert->profession->skill }}</p>

                <strong><i class="far fa-file-alt mr-1"></i> Experience</strong>
                <p class="text-muted">{{ $expert->profession->experience }}</p>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                <p class="text-muted">{{ $expert->address }}</p>

                <strong><i class="far fa-envelope"></i> Email</strong>
                <p class="text-muted">{{ $expert->email }}</p>

                <strong><i class="fas fa-phone"></i> Phone</strong>
                <p class="text-muted">{{ $expert->phone }}</p>

                <strong><i class="fas fa-phone"></i>  Member Since</strong>
                <p class="text-muted">{{ $expert->created_at->toFormattedDateString() }}</p>

                <strong><i class="fas fa-book mr-1"></i> Education</strong>
                @foreach($expert->educations as $expert)
                    <p class="text-muted">
                        {{ $expert->degree_type . ' in ' . $expert->subject . ' from the ' . $expert->institution . ' at ' . $expert->location  }}
                    </p>
                @endforeach
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
            </div>
        </div>
    </div>
@endsection
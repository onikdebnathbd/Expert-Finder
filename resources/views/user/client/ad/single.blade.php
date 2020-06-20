@extends('user.layouts.app')

@push('head')
    <style>
        .explorer_europe.list_wrap {
            padding-top: 25px;
            padding-bottom: 25px;
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
                        <h3 style="font-family: Shadows Into Light;">Single Job</h3>
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
                    <div class="single-post">
                        <div class="blog_details" style="padding: 15px 25px; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
                            <h2>{{ $job->title }}</h2>
                            <small style="color: #a29f9f; font-size: 88%;">
                                {{ $job->created_at->diffForHumans() }}
                            </small>
                            <p style="margin-bottom: 0; padding-top: 10px;" class="excert">
                                {{ $job->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
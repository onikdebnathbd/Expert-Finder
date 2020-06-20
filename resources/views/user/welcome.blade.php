@extends('user.layouts.app')

<!-- links For This Page -->
@push('head')
    @include('user.includes.sweet-alert-style')

    <style>
        /*Single Slide Customization*/
        .slider_area .single_slider.single_listing {
            height: 100vh;
        }
        .slider_area .single_slider .slider_text h3 {
            font-size: 45px;
            font-weight: bold;
            color: #fff;
            margin-bottom: 0;
        }
        .slider_area .single_slider .slider_text p {
            font-size: 14px;
            color: #fff;
            line-height: 28px;
            font-family: "Raleway", sans-serif;
            margin-bottom: 42px;
            margin-top: 20px;
        }
    </style>
@endpush

@push('footer')
    @include('user.includes.sweet-alert-script')
@endpush

@section('main-content')
    <!-- bradcam_area  -->
   {{-- --}}{{--<div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Welcome To Our Agency</h3>
                        --}}{{----}}{{--<p>You can find any expert from a specific area of a country</p>--}}{{----}}{{--
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!--/ bradcam_area  -->

    <!-- sprayed_area  -->
    {{--<div class="sprayed_area overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text text-center">
                        <h3>Find any expert or any job from a specific area of a country.</h3>
                        <p>
                            You can also be an expert or a client to give the service or offer a job. Experts can be different types like Tutor, Domestic Employee, Doctor,
                            <br> Developer, Designer, Electrician, etc and a client can be an individual person or a company.
                        </p>
                        <a href="#" class="boxed-btn2">Find An Expert</a>
                        <a href="#" class="boxed-btn2">Find A Job</a>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!--/ sprayed_area end  -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider single_listing  d-flex align-items-center slider_bg_2">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-10">
                        <div class="slider_text text-center justify-content-center" style="padding-top: 55px;">
                            <h3>Find any expert or any job <br>from a specific area of a country.</h3>
                            <p>
                                You can also be an expert or a client to give the service or offer a job. Experts can be different types like Tutor, Domestic Employee, Doctor,
                                <br> Developer, Designer, Electrician, etc and a client can be an individual person or a company.
                            </p>
                            <a href="#" class="boxed-btn2" style="margin-right: 12px;">Find An Expert</a>
                            <a href="#" class="boxed-btn2">Find A Job</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <div class="popular_catagory_area" style="padding-top: 45px; padding-bottom: 15px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60 text-center">
                        {{--<p>Discover</p>--}}
                        <h3 style="padding-bottom: 0;">
                            Categories
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-xl-3 col-md-4 col-lg-3">
                        <div class="single_catagory">
                            <div class="thumb">
                                <img src="{{ asset($category->image) }}" alt="">
                            </div>
                            <div class="hover_overlay">
                                <div class="hover_inner">
                                    <a href="Listings.html"><h4>{{ $category->name }}</h4></a>
                                    <span>05 Listings</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
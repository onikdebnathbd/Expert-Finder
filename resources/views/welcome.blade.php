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
    </style>
@endpush

@push('scripts')
    <!-- Laravel SweetAlert2 -->
    @include('sweetalert::alert')
@endpush

@section('main-content')
    <!-- bradcam_area  -->
    {{--<div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Welcome To Our Agency</h3>
                        --}}{{--<p>You can find any expert from a specific area of a country</p>--}}{{--
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!--/ bradcam_area  -->

    <!-- sprayed_area  -->
    <div class="sprayed_area overlay">
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
    </div>
    <!--/ sprayed_area end  -->

    <div class="popular_catagory_area" style="padding-top: 45px; padding-bottom: 30px;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60 text-center">
                        {{--<p>Discover</p>--}}
                        <h3 style="padding-bottom: 0;">
                            Most Popular Categories
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="{{ asset('user/img/catagory/1.png') }}" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                <a href="Listings.html"><h4>Amazing Places</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="{{ asset('user/img/catagory/2.png') }}" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                <a href="Listings.html"><h4>Concerts</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="{{ asset('user/img/catagory/3.png') }}" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                <a href="Listings.html"><h4>Travel guide</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="{{ asset('user/img/catagory/4.png') }}" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                <a href="Listings.html"><h4>Music Festival</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="{{ asset('user/img/catagory/5.png') }}" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                <a href="Listings.html"><h4>Night Club</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="{{ asset('user/img/catagory/6.png') }}" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                <a href="Listings.html"><h4>Bars & Pubs</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="{{ asset('user/img/catagory/7.png') }}" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                <a href="Listings.html"><h4>Cafe</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4 col-lg-3">
                    <div class="single_catagory">
                        <div class="thumb">
                            <img src="{{ asset('user/img/catagory/8.png') }}" alt="">
                        </div>
                        <div class="hover_overlay">
                            <div class="hover_inner">
                                <a href="Listings.html"><h4>Restaurants</h4></a>
                                <span>05 Listings</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
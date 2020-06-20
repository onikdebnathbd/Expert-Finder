@extends('user.layouts.app')

@section('main-content')
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>All Jobs</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

        <!-- explorer_europe start  -->
        <div class="explorer_europe list_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="filter_wrap">
                            <h3 class="exp_title">Advanced Filter</h3>
                            <div class="filter_main_wrap">
                                <div class="filter_inner">
                                    <form action="#">
                                        <div class="input_field">
                                            <input type="text" placeholder="What are you finding?" >
                                            <button class="submit_btn" type="submit"> <i class="fa fa-search"></i> </button>
                                        </div>
                                        <div class="input_field">
                                            <select class="wide">
                                                <option data-display="Choose categories">cat 1</option>
                                                <option value="1">cat 2</option>
                                                <option value="2">cat 3</option>
                                                <option value="3">cat 4</option>
                                            </select>
                                        </div>
                                        <div class="input_field">
                                            <select class="wide">
                                                <option data-display="Location">USA</option>
                                                <option value="1">Africa</option>
                                                <option value="2">canada</option>
                                            </select>
                                        </div>
                                        <div class="input_field ">
                                            <div class="inner">
                                                <div class="check_1">
                                                    <input type="checkbox" id="fruit1" name="fruit-1" value="Apple">
                                                    <label for="fruit1">Open Now</label>
                                                </div>
                                                <div class="check_1">
                                                    <input type="checkbox" id="fruit4" name="fruit-4" value="Strawberry">
                                                    <label for="fruit4">Ratings</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input_field">
                                            <select class="wide">
                                                <option data-display="Area (km)">Area (km)</option>
                                                <option value="1">1km</option>
                                                <option value="2">2km</option>
                                            </select>
                                        </div>
                                        <div class="input_field">
                                            <select class="wide">
                                                <option data-display="Area (km)">Area (km)</option>
                                                <option value="1">1km</option>
                                                <option value="2">2km</option>
                                            </select>
                                        </div>

                                    </form>
                                </div>
                                <div class="last_range">
                                    <label for="amount">Price range:</label>


                                    <div id="slider-range"></div>
                                    <p>

                                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                                    </p>
                                    <button class="boxed-btn2" >Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <h3 class="exp_title">5432 Listings are available</h3>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single_explorer">
                                    <div class="thumb">
                                        <img src="{{ asset('user/img/explorer/1.png') }}" alt="">
                                    </div>
                                    <div class="explorer_bottom d-flex">
                                        <div class="icon">
                                            <i class="flaticon-beach"></i>
                                        </div>
                                        <div class="explorer_info">
                                            <h3><a href="single_listings.html">Saintmartine</a></h3>
                                            <p>700/D, Kings road, Green lane, London</p>
                                            <ul>
                                                <li> <i class="fa fa-phone"></i>
                                                    +10 278 367 9823</li>
                                                <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single_explorer">
                                    <div class="thumb">
                                        <img src="{{ asset('user/img/explorer/2.png') }}" alt="">
                                    </div>
                                    <div class="explorer_bottom d-flex">
                                        <div class="icon">
                                            <i class="flaticon-food"></i>
                                        </div>
                                        <div class="explorer_info">
                                            <h3><a href="single_listings.html">Freshly Food</a></h3>
                                            <p>700/D, Kings road, Green lane, London</p>
                                            <ul>
                                                <li> <i class="fa fa-phone"></i>
                                                    +10 278 367 9823</li>
                                                <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single_explorer">
                                    <div class="thumb">
                                        <img src="{{ asset('user/img/explorer/3.png') }}" alt="">
                                    </div>
                                    <div class="explorer_bottom d-flex">
                                        <div class="icon">
                                            <i class="flaticon-food-1"></i>
                                        </div>
                                        <div class="explorer_info">
                                            <h3><a href="single_listings.html">Midnight</a></h3>
                                            <p>700/D, Kings road, Green lane, London</p>
                                            <ul>
                                                <li> <i class="fa fa-phone"></i>
                                                    +10 278 367 9823</li>
                                                <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single_explorer">
                                    <div class="thumb">
                                        <img src="{{ asset('user/img/explorer/4.png') }}" alt="">
                                    </div>
                                    <div class="explorer_bottom d-flex">
                                        <div class="icon">
                                            <i class="flaticon-barbershop"></i>
                                        </div>
                                        <div class="explorer_info">
                                            <h3><a href="single_listings.html">Barber</a></h3>
                                            <p>700/D, Kings road, Green lane, London</p>
                                            <ul>
                                                <li> <i class="fa fa-phone"></i>
                                                    +10 278 367 9823</li>
                                                <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single_explorer">
                                    <div class="thumb">
                                        <img src="{{ asset('user/img/explorer/5.png') }}" alt="">
                                    </div>
                                    <div class="explorer_bottom d-flex">
                                        <div class="icon">
                                            <i class="flaticon-cabin"></i>
                                        </div>
                                        <div class="explorer_info">
                                            <h3><a href="single_listings.html">Montana Resort</a></h3>
                                            <p>700/D, Kings road, Green lane, London</p>
                                            <ul>
                                                <li> <i class="fa fa-phone"></i>
                                                    +10 278 367 9823</li>
                                                <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single_explorer">
                                    <div class="thumb">
                                        <img src="{{ asset('user/img/explorer/6.png') }}" alt="">
                                    </div>
                                    <div class="explorer_bottom d-flex">
                                        <div class="icon">
                                            <i class="flaticon-shop"></i>
                                        </div>
                                        <div class="explorer_info">
                                            <h3><a href="single_listings.html">Yelled Shopping</a></h3>
                                            <p>700/D, Kings road, Green lane, London</p>
                                            <ul>
                                                <li> <i class="fa fa-phone"></i>
                                                    +10 278 367 9823</li>
                                                <li><i class="fa fa-envelope"></i> contact@midnight.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="page_nation text-center">
                                    <ul>
                                        <li>
                                            <a href="#">01</a>
                                        </li>
                                        <li>
                                            <a href="#">02</a>
                                        </li>
                                        <li>
                                            <a href="#">03</a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="ti-angle-right"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!--/ explorer_europe start  -->
@endsection
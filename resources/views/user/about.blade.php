@extends('user.layouts.app')

@section('title', 'Admin Panel | About')

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
                    <h3>About Us</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<!-- about_mission  -->
<div class="about_mission">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-md-6">
                <div class="about_thumb">
                    <img src="{{ asset('user/img/about/about_big.png') }}" alt="">
                    <div class="small_img_1">
                        <img src="{{ asset('user/img/about/small_2.png') }}" alt="">
                    </div>
                    <div class="small_img_2">
                        <img src="{{ asset('user/img/about/small_1.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="about_text">
                    <h4>Our Mission</h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ about_mission -->

<!-- counter_area  -->
<div class="counter_area">
    <div class="container">
        <div class="border_bottom">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3> <span  class="counter" >3782</span> </h3>
                        <p>Listings Available</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3> <span class="counter" >328</span></h3>
                        <p>Added this Week</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 ">
                    <div class="single_counter text-center">
                        <h3> <span class="counter" >2263</span></h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--/ counter_area  -->

<!-- team_area  -->
<div class="team_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-40 text-center">
                    <h3>
                        Our Team
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single_team">
                    <div class="team_thumb">
                        <img src="{{ asset('user/img/team/1.png') }}" alt="">
                        <div class="social_link">
                            <ul>
                                <li><a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team_info text-center">
                        <h3>Milani Mou</h3>
                        <p>Business Agent</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single_team">
                    <div class="team_thumb">
                        <img src="{{ asset('user/img/team/2.png') }}" alt="">
                        <div class="social_link">
                            <ul>
                                <li><a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team_info text-center">
                        <h3>Halim Yoka</h3>
                        <p>Business Agent</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single_team">
                    <div class="team_thumb">
                        <img src="{{ asset('user/img/team/3.png') }}" alt="">
                        <div class="social_link">
                            <ul>
                                <li><a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team_info text-center">
                        <h3>Dalim Karma</h3>
                        <p>Business Agent</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single_team">
                    <div class="team_thumb">
                        <img src="{{ asset('user/img/team/4.png') }}" alt="">
                        <div class="social_link">
                            <ul>
                                <li><a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li><a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team_info text-center">
                        <h3>Micky</h3>
                        <p>Business Agent</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /team_area  -->

<!-- sprayed_area  -->
<div class="sprayed_area overlay"{{ asset('user/') }}>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="text text-center">
                    <h3>Sprayed Your Business with Us </h3>
                    <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing
                        drawing <br> apartments frequently or motionless.</p>
                    <a href="#" class="boxed-btn2">Add Your Business</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ sprayed_area end  -->

<!-- testimonial_area  -->
<div class="testimonial_area  "{{ asset('user/') }}>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-60 text-center">
                    <p>Testimonials</p>
                    <h3>
                        What our Client Says
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    <div class="single_carousel">
                        <div class="single_testmonial text-center">
                            <div class="quote">
                                <img src="{{ asset('user/img/svg_icon/quote.svg') }}" alt="">
                            </div>
                            <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                <br>
                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                            <div class="testmonial_author">
                                <div class="thumb">
                                    <img src="{{ asset('user/img/case/testmonial.png') }}" alt="">
                                </div>
                                <h3>Robert Thomson</h3>
                                <span>Business Owner</span>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="single_testmonial text-center">
                            <div class="quote">
                                <img src="{{ asset('user/img/svg_icon/quote.svg') }}" alt="">
                            </div>
                            <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                <br>
                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                            <div class="testmonial_author">
                                <div class="thumb">
                                    <img src="{{ asset('user/img/case/testmonial.png') }}" alt="">
                                </div>
                                <h3>Robert Thomson</h3>
                                <span>Business Owner</span>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="single_testmonial text-center">
                            <div class="quote">
                                <img src="{{ asset('user/img/svg_icon/quote.svg') }}" alt="">
                            </div>
                            <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                <br>
                                Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                            <div class="testmonial_author">
                                <div class="thumb">
                                    <img src="{{ asset('user/img/case/testmonial.png') }}" alt="">
                                </div>
                                <h3>Robert Thomson</h3>
                                <span>Business Owner</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /testimonial_area  -->
@endsection
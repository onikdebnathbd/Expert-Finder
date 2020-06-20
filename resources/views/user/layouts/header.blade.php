{{--<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</div>--}}


<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-3">
                            <div class="logo">
                                <a href="{{ route('welcome') }}" style="color: #F91842; font-weight: 600; font-size: 25px; font-family: cursive;">
                                   {{-- <img src="{{ asset('user/img/logo.png') }}" alt="">--}}
                                    Expert Finder
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6" style="padding-top: 10px!important;">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('all-expert') }}">All Experts</a></li>
                                        <li><a href="{{ url('/job') }}">All Jobs</a></li>
                                        <li><a href="{{ route('login') }}">Become An Expert</a></li>
                                        <li><a href="{{ route('login') }}">Offer A Job</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        @guest
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block" style="padding-top: 10px!important;">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a style="padding: 5px 15px 7px 15px;" href="{{ route('login') }}">Login</a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-xl-3 col-lg-3" style="padding-top: 10px!important;">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li style="float: right; margin-right: 0;">
                                                <a href="#">{{ Auth::user()->name }} <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">logout</a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        @endguest
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->

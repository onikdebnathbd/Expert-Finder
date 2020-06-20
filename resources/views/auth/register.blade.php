{{--@extends('user.layouts.app')

@section('bg-img', asset('User'))
@section('heading', 'Register Here')
@section('sub-heading', '')

@section('main-content')
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>

    <hr>
@endsection--}}



@extends('auth.layouts.app')

@push('links')
    <style>
        .wrap-input100 select { border: 0; }
        .wrap-input100 select:focus { border: 0!important; }
        .wrap-input100 select option:hover { border: 0!important; }
    </style>
@endpush

@section('main-content')
    <!-- bradcam_area  -->
    {{--<div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Register Your Account</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
    <!--/ bradcam_area  -->

{{--    <div class="login-registration mt-5 mb-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 mx-auto registration-col">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    --}}{{--name--}}{{--
                    <div class="form-group mt-20">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter your full name" autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    --}}{{--email--}}{{--
                    <div class="form-group mt-20">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter your email address">

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    --}}{{--password--}}{{--
                    <div class="form-group mt-20">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter your password">

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    --}}{{--confirm password--}}{{--
                    <div class="form-group mt-20">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter your confirm password">
                    </div>

                    --}}{{--login, register, forget password button--}}{{--
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-sign-in-alt"></i> Sign Up
                        </button>
                    </div>
                </form>

                <div class="foote">
                    <h4>Have you an account?</h4>
                    <h5><a href="{{ route('login') }} ">Log In</a></h5>
                </div>
            </div>
        </div>
    </div>--}}


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="{{ route('register') }}" class="login100-form">
                    @csrf
                    <span class="login100-form-title">
						User Registration
					</span>
                    {{--<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>--}}

                    <div class="wrap-input100{{ $errors->has('name') ? ' is-invalid' : '' }}">
                        <input id="name" type="text" class="input100" name="name" value="{{ old('name') }}">
                        <span class="focus-input100" data-placeholder="Name"></span>
                    </div>
                    @include('includes.errors.name')

                    <div class="wrap-input100{{ $errors->has('email') ? ' is-invalid' : '' }}">
                        <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>
                    @include('includes.errors.email')

                    <div class="wrap-input100{{ $errors->has('password') ? ' is-invalid' : '' }}">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                        <input id="password" type="password" class="input100" name="password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>
                    @include('includes.errors.password')

                    <div class="wrap-input100">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                        <input id="password-confirm" type="password" class="input100" name="password_confirmation">
                        <span class="focus-input100" data-placeholder="Confirm Password"></span>
                    </div>

                    <div class="wrap-input100">
                        <select class="input100" name="role" id="role" data-placeholder="Assign roles">
                            <option selected>Select Your Role</option>
                            <option value="5">Expert</option>
                            <option value="6">Client</option>
                        </select>
                    </div>

                   {{-- <div class="form-group">
                        <label for="role">Roles</label>
                        <select class="select2bs4 select2-hidden-accessible--}}{{--{{ $errors->has('name') ? ' is-invalid' : ''  }}--}}{{--" name="role[]" id="role" multiple="" data-placeholder="Assign roles" style="width: 100%;" data-select2-id="35" tabindex="-1" aria-hidden="true">
                            <option value="5">Expert</option>
                            <option value="6">Client</option>
                        </select>
                        --}}{{--@include('includes.errors.name')--}}{{--
                    </div>--}}

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                Sign Up
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-30">
						<span class="txt1">
							Have you an account?
						</span>

                        <a class="txt2" href="{{ route('login') }}">
                            Sign In
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>
@endsection


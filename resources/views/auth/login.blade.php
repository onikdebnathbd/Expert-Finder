@extends('auth.layouts.app')

@push('links')

@endpush

@push('scripts')

@endpush

@section('main-content')
    {{--<div class="login-registration mt-5 mb-5">
        <div class="row">
            <div class="col-lg-4 col-md-6 mx-auto login-col">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    --}}{{--email--}}{{--
                    <div class="form-group mt-20">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter your email address" autofocus>

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

                    --}}{{--Remember Me--}}{{--
                    --}}{{--<div class="col-md-4 mt-20" style="padding-left: 0;">
                        <div class="switch-wrap d-flex justify-content-between">
                            <div class="confirm-checkbox" style=" width: 17px; height: 17px;">
                                <input id="confirm-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="confirm-checkbox"></label>
                            </div>
                            <p>{{ __('Remember Me') }}</p>
                        </div>
                    </div>
--}}{{--
                    --}}{{--login, register, forget password button--}}{{--
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-sign-in-alt"></i> Sign In
                        </button>

                        --}}{{--@if (Route::has('password.request'))
                            <a class="genric-btn link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif--}}{{--
                    </div>
                </form>

                <div class="footer">
                    <h4>Or</h4>
                    <h5><a href="{{ route('register') }} ">Create Account</a></h5>
                </div>
            </div>
        </div>
    </div>--}}

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="{{ route('login') }}" class="login100-form">
                    @csrf
					<span class="login100-form-title">
						User Login
					</span>
                    {{--<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>--}}

                    <div class="wrap-input100{{ $errors->has('email') ? ' is-invalid' : '' }}">
                        <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}">
                        <span class="focus-input100" data-placeholder="Email"></span>
                    </div>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                    @endif

                    <div class="wrap-input100{{ $errors->has('password') ? ' is-invalid' : '' }}">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                        <input id="password" type="password" class="input100" name="password">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                    @endif

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                Sign In
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-30">
						<span class="txt1">
							Don’t have an account?
						</span>

                        <a class="txt2" href="{{ route('register') }}">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="dropDownSelect1"></div>
@endsection

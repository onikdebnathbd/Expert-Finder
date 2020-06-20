@extends('user.layouts.app')

<!-- links For This Page -->
@push('head')
    @include('user.adminlte-design.style')
    @include('user.adminlte-design.custom-style')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <style>
        /*select2*/
        .select2-container--bootstrap4.select2-container--focus .select2-selection {
            box-shadow: none !important;
            border-color: #80bdff !important;
        }
        /*Multiple select2*/
        .select2-container .select2-search--inline .select2-search__field {
            padding: 0 .45rem !important;
        }
    </style>
@endpush

@push('footer')
    @include('user.adminlte-design.script')
    <!-- Select2 -->
    <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
@endpush

@section('main-content')
    <div class="content-wrapper" style="margin-left: 0!important;">

        <section class="content profile-content">
            <div class="container">
                <div class="card" style="border-top-left-radius: 0; border-top-right-radius: 0;">
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
                        <form role="form" action="{{ route('settings') }}" method="post">
                        @csrf
                        <!-- /.card-header -->
                            <div class="card-body" style="display: block;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : ''  }}" name="name" id="name" value="{{ Auth::user()->name }}" placeholder="Enter your full name">
                                            @include('includes.errors.name')
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Slug</label>
                                            <input type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : ''  }}" name="slug" id="slug" value="{{ Auth::user()->slug }}" placeholder="Enter the slug of your name">
                                            @include('includes.errors.slug')
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}" placeholder="Enter your email" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Phone</label>
                                            <input type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : ''  }}" name="phone" id="phone" value="{{ Auth::user()->phone }}" placeholder="Enter your phone no">
                                            @include('includes.errors.phone')
                                        </div>
                                        <div class="form-group" data-select2-id="72">
                                            <label for="role">Role</label>
                                            <select class="form-control select2bs4 select2-hidden-accessible" name="role" id="role" data-placeholder="Assign roles" style="
                                            width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                                                <option value="5"
                                                    @foreach(Auth::user()->roles as $role)
                                                        @if($role->name == 'Expert')
                                                            selected
                                                        @endif
                                                    @endforeach
                                                >Expert</option>
                                                <option value="6"
                                                    @foreach(Auth::user()->roles as $role)
                                                        @if($role->name == 'Client')
                                                            selected
                                                        @endif
                                                    @endforeach
                                                >Client</option>
                                            </select>
                                        </div>
                                        @foreach(Auth::user()->roles as $role)
                                            @if($role->name == 'Expert')
                                                <div class="form-group">
                                                    <label for="visibility">Visibility</label>
                                                    <div class="checkbox">
                                                        <label style="font-weight: normal; color: #495057;">
                                                            <input type="checkbox" style="margin-right: 3px; display: inline-block;" name="visibility" value="1"{{ old('visibility') == 1 || Auth::user()->visibility == 1 ? ' checked' : '' }}>Visible
                                                        </label>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : ''  }}" name="password" id="password" placeholder="Enter your password">
                                            @include('includes.errors.password')
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation">Confirm Password</label>
                                            <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : ''  }}" name="password_confirmation" id="password_confirmation" placeholder="Enter your confirm password">
                                            @include('includes.errors.confirm_password')
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <textarea id="address" name="address" class="form-control" style="height: 123px;" placeholder="Enter your address">{{ Auth::user()->address }}</textarea>
                                        </div>
                                        @foreach(Auth::user()->roles as $role)
                                            @if($role->name == 'Expert')
                                                <div class="form-group">
                                                    <label for="category">Category</label>
                                                    <select class="select2bs4 select2-hidden-accessible" name="category[]" id="category" multiple="" data-placeholder="Select expert categories" style="width: 100%;" data-select2-id="35" tabindex="-1" aria-hidden="true">
                                                        @foreach($categories as $category)
                                                            <option value="{{ $category->id }}"
                                                                    @foreach($user->categories as $user_category)
                                                                    @if($user_category->id == $category->id)
                                                                    selected
                                                                    @endif
                                                                    @endforeach
                                                            >{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <!-- /.row -->
                                <button type="submit" class="btn btn-primary" style="margin-bottom: 5px;">Update Personal Info</button>
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
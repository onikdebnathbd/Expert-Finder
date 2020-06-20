@extends('user.layouts.app')

@push('head')
    <style>
        .explorer_europe.list_wrap {
            padding-top: 25px;
             padding-bottom: 0;
        }
    </style>

    @include('user.adminlte-design.style')
   {{-- @include('user.adminlte-design.custom-style')--}}
@endpush
@push('footer')
     {{--Admin lte scripts--}}
     <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
     <script>
         $.widget.bridge('uibutton', $.ui.button)
     </script>
     <!-- Bootstrap 4 -->
     <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
     <!-- ChartJS -->
     <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
     <!-- Sparkline -->
     <script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>
     <!-- JQVMap -->
     <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
     <script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.world.js') }}"></script>
     <!-- jQuery Knob Chart -->
     <script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
     <!-- daterangepicker -->
     <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
     <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
     <!-- Tempusdominus Bootstrap 4 -->
     <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
     <!-- Summernote -->
     <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
     <!-- overlayScrollbars -->
     <script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
     <!-- AdminLTE App -->
     <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
     <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
     <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
     <!-- AdminLTE for demo purposes -->
     <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
@endpush

@section('main-content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3 style="font-family: Shadows Into Light;">All Experts</h3>
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
                <div class="col-xl-3 col-lg-3">
                    <div class="filter_wrap">
                        <h3 class="exp_title">Advanced Filter</h3>
                        <div class="filter_main_wrap" style="height: 431px; padding: 0 23px;">
                            <div class="filter_inner">
                                <form action="#">
                                    <div class="input_field">
                                        <select class="wide">
                                            {{--<option data-display="Choose categories">cat 1</option>--}}
                                            <option selected>Choose Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="input_field">
                                        <select class="wide">
                                            {{--<option data-display="Choose categories">cat 1</option>--}}
                                            <option selected>Choose Country</option>
                                            <option>Bangladesh</option>
                                        </select>
                                    </div>
                                    <div class="input_field">
                                        <select class="wide">
                                            {{--<option data-display="Choose categories">cat 1</option>--}}
                                            <option selected>Choose Division</option>
                                            <option>Dhaka</option>
                                        </select>
                                    </div>
                                    <div class="input_field">
                                        <select class="wide">
                                            {{--<option data-display="Choose categories">cat 1</option>--}}
                                            <option selected>Choose District</option>
                                            <option>Dhaka</option>
                                        </select>
                                    </div>
                                    <div class="input_field">
                                        <select class="wide">
                                            {{--<option data-display="Choose categories">cat 1</option>--}}
                                            <option selected>Choose Area</option>
                                            <option>Dhanmondi</option>
                                            <option>Azimpur</option>
                                            <option>Mirpur</option>
                                            <option>Uttara</option>
                                            <option>Jatrabari</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <h3 class="exp_title">{{ $expert_count }} Experts are available</h3>
                    <div class="row d-flex align-items-stretch">
                        @foreach($experts->users as $expert)
                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                            <div class="card" style="line-height: 2;">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-5" style="margin-left: auto; margin-right: auto;">
                                            <img src="{{ asset($expert->image) }}" style="height: 81px; width: 81px;" alt="" class="img-circle img-fluid">
                                        </div>
                                        <div class="col-12 text-center">
                                            <h2 class="lead" style="padding-top: 12px;"><b>{{ $expert->name }}</b></h2>
                                            <p class="text-muted text-sm mb-0">{{--<b>About: </b>--}}Web Developer & Designer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center" style="padding-bottom: 20px; background-color: white;">
                                    <a href="{{ route('expert', $expert->slug) }}" class="btn btn-sm btn-primary" style="color: white!important;">
                                        View Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--/ explorer_europe start  -->
@endsection
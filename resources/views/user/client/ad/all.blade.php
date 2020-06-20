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
                        <h3 style="font-family: Shadows Into Light!important;">All Jobs</h3>
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
                                    Ads    </select>
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
                    <h3 class="exp_title">{{ $ad_count }} Jobs are available</h3>

                    <!--================Blog Area =================-->
                    <section class="blog_area">
                        <div class="container">
                            <div class="row">
                                <div class="blog_left_sidebar">
                                    @foreach($ads as $ad)
                                        <article class="blog_item" style="margin-bottom: 20px;">
                                            <div class="blog_details" style="padding: 15px 25px; box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);">
                                                <a class="d-inline-block" href="{{ route('job', $ad->slug) }}">
                                                    <h2>{{ Str::limit($ad->title, 120) }}</h2>
                                                </a>
                                                <p style="margin-bottom: 0;">{{ Str::limit($ad->description, 220) }}</p>
                                                <small style="color: #a29f9f; font-size: 88%;">
                                                    {{ $ad->created_at->diffForHumans() }}
                                                </small>
                                            </div>
                                        </article>
                                    @endforeach
                                    <nav class="blog-pagination justify-content-center d-flex">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Previous">
                                                    <i class="ti-angle-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link">1</a>
                                            </li>
                                            <li class="page-item active">
                                                <a href="#" class="page-link">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a href="#" class="page-link" aria-label="Next">
                                                    <i class="ti-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--================Blog Area =================-->
                </div>
            </div>


        </div>
    </div>
    <!--/ explorer_europe start  -->
@endsection
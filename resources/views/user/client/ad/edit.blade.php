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
                        <form role="form" action="{{ route('ad.update', $ad->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Job Title</label>
                                        <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : ''  }}" name="title" value="{{ $ad->title }}" id="title" placeholder="Enter ad title">
                                        @include('includes.errors.title')
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Job Slug</label>
                                        <input type="text" class="form-control{{ $errors->has('slug') ? ' is-invalid' : ''  }}" name="slug" value="{{ $ad->slug }}" id="slug" placeholder="Enter ad slug">
                                        @include('includes.errors.slug')
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Offer to A Specific Expert</label>
                                        <select class="select2bs4 select2-hidden-accessible" name="category[]" id="category" multiple="" data-placeholder="Select expert categories" style="width: 100%;" data-select2-id="35" tabindex="-1" aria-hidden="true">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}"
                                                        @foreach($ad->categories as $ad_category)
                                                        @if($ad_category->id == $category->id)
                                                        selected
                                                        @endif
                                                        @endforeach
                                                >{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">Job Description</label>
                                        <textarea id="description" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : ''  }}" style="height: 123px;" placeholder="Enter ad description">{{ $ad->description }}</textarea>
                                        @include('includes.errors.description')
                                    </div>
                                    <div class="form-group">
                                        <label for="visibility">Visibility</label>
                                        <div class="checkbox">
                                            <label style="font-weight: normal; color: #495057;">
                                                <input type="checkbox" style="margin-right: 3px; display: inline-block;" name="visibility" value="1"{{ old('visibility') == 1 || $ad->visibility == 1 ? ' checked' : '' }}>Visible
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-top: 5px; margin-bottom: 5px;">Offer</button>
                        </form>
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->

            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
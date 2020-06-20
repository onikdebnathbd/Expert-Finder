<section class="content-header">
    <h1>
        Laravel Blog Page
        <small>Lets create something awesome</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        @isset($parent)
            <li>
                {{ $parent }}
            </li>
        @endisset

        @isset($child)
            <li class="active">
                {{ $child }}
            </li>
        @endisset
    </ol>
</section>
<!-- start banner Area -->
<section class="banner-area relative"  id="home" data-parallax="scroll" {{ isset($img) ? $img : '' }} or  data-image-src="{{ asset('user/img/home-banner.jpg') }}">
    {{--note: instad of or we can also use ?? operator--}}
    <div class="overlay-bg overlay"></div>
    <div class="container">
        <div class="row fullscreen justify-content-center align-items-center d-flex">
            <div class="col-lg-8 top-left">
                <h1 class="mb-20 text-center" style="color: white;">
                    @isset($title)
                        {{ $title }}
                    @endisset
                    @isset($slot)
                        {{ $slot }}
                    @endisset
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
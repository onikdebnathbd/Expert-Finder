<!-- Start top-section Area -->
<section class="top-section section-gap" >
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                @isset($title)
                    {{ $title }}
                @endisset
                @isset($slot)
                    {{ $slot }}
                @endisset
            </div>
        </div>
    </div>
</section>
<!-- End top-section Area -->

<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="img/footer_logo.png" alt="">
                            </a>
                        </div>
                        <p>
                            Esteem spirit temper too say adieus who <br> direct esteem. It esteems luckily or <br>
                            picture placing drawing.
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Services
                        </h3>
                        <ul>
                            <li><a href="#">SEO/SEM </a></li>
                            <li><a href="#">Web design </a></li>
                            <li><a href="#">Ecommerce</a></li>
                            <li><a href="#">Digital marketing</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Useful Links
                        </h3>
                        <ul>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="{{ route('contact') }}"> Contact</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            Subscribe
                        </h3>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Subscribe</button>
                        </form>
                        <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                            luckily.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer end  -->

<!-- link that opens popup -->
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
<!-- JS here -->
<script src="{{ asset('user/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('user/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('user/js/popper.min.js') }}"></script>
<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('user/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('user/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('user/js/ajax-form.js') }}"></script>
<script src="{{ asset('user/js/waypoints.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('user/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('user/js/scrollIt.js') }}"></script>
<script src="{{ asset('user/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('user/js/wow.min.js') }}"></script>
<script src="{{ asset('user/js/nice-select.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('user/') }}"></script>
<!-- <script src="js/gijgo.min.js"></script> -->
<script src="{{ asset('user/js/plugins.js') }}"></script>



<!--contact js-->
<script src="{{ asset('user/js/contact.js') }}"></script>
<script src="{{ asset('user/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('user/js/jquery.form.js') }}"></script>
<script src="{{ asset('user/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('user/js/mail-script.js') }}"></script>


<script src="{{ asset('user/js/main.js') }}"></script>

@stack('footer')
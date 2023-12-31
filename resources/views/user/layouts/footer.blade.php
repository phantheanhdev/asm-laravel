    <!--newsletter section start-->
    <section class="newsletter_section newsletter_padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter_inner d-flex justify-content-between align-items-center">
                        <div class="newsletter_text">
                            <h3>keep connected</h3>
                            <p>Get updates by subscribe our weekly newsletter</p>
                        </div>
                        <div class="newsletter_subscribe">
                            <form id="mc-form">
                                <input class="border-0" id="mc-email" type="email" autocomplete="off"
                                    placeholder="Enter your email address">
                                <i class="icon-envelope-open icons"></i>
                                <button class="border-0" id="mc-submit">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--newsletter section end-->

    <!--footer area start-->
    <footer class="footer_widgets">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="footer_widget_list">
                        <div class="footer_logo">
                            <a href="#"><img src="{{ asset('assets/img/logo/logo.png') }}" alt=""></a>
                        </div>
                        <div class="footer_contact">
                            <div class="footer_contact_list">
                                <span>Địa chỉ:</span>
                                <p>Nam Từ Liêm, Hà Nội</p>
                            </div>
                            <div class="footer_contact_list">
                                <span>24/7 hotline:</span>
                                <a href="tel:(+84)328548878">(+84) 328 548 878</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="footer_widget_list text-right">
                        <div class="footer_social">
                            <ul class="d-flex justify-content-end">
                                <li><a href="https://twitter.com" data-tippy="Twitter" data-tippy-inertia="true"
                                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i
                                            class="ion-social-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com" data-tippy="Facebook" data-tippy-inertia="true"
                                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i
                                            class="ion-social-facebook"></i></a></li>
                                <li><a href="https://www.google.com" data-tippy="googleplus" data-tippy-inertia="true"
                                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i
                                            class="ion-social-googleplus-outline"></i></a></li>
                                <li><a href="https://www.instagram.com" data-tippy="Instagram" data-tippy-inertia="true"
                                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i
                                            class="ion-social-instagram-outline"></i></a></li>
                                <li><a href="https://www.youtube.com" data-tippy="Youtube" data-tippy-inertia="true"
                                        data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top"><i
                                            class="ion-social-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="copyright_right">
                            <p>©2023 <span>Uthr</span>. made with <i class="ion-heart"></i> by <a
                                    href="https://hasthemes.com" target="_blank">Phan Anh</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="ion-android-close"></i></span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="modal_zoom_gallery">
                                    <div class="product_zoom_thumb">
                                        <img src="{{ asset('assets/img/product/big-product/product1.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Donec Ac Tempus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price">$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                            laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                            in quos qui, </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1"
                                                    type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest"><a href="#"><i
                                                        class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i
                                                        class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->


    <!-- JS
============================================ -->

    <script src="{{ asset('assets/js/vendor/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollup.min.js') }}"></script>
    <script src="{{ asset('assets/js/images-loaded.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/tippy-bundle.umd.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.instagramFeed.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/mailchimp-ajax.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="{{ asset('assets/js/user/cart.js') }}"></script>
    <script src="{{ asset('assets/js/user/check_out.js') }}"></script>

    </body>

    </html>

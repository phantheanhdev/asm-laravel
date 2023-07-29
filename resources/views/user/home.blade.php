@extends('user.layouts.layout')
@section('main-content')
    <!--slider area start-->
    <section class="slider_section mb-63">
        <div class="slider_area slick_slider_activation"
            data-slick='{
            "slidesToShow": 1,
            "slidesToScroll": 1,
            "arrows": true,
            "dots": true,
            "autoplay": false,
            "speed": 300,
            "infinite": true
        }'>
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="slider_text">
                                <span>Lookbook</span>
                                <h1>fashion trend for autum girls with vibes</h1>
                                <p>We love seeing how our Aslam wearers like <br> to wear their Norda</p>
                                <a class="btn btn-primary" href="#">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="slider_text">
                                <span>Lookbook</span>
                                <h1>fashion trend for autum girls with vibes</h1>
                                <p>We love seeing how our Aslam wearers like <br> to wear their Norda</p>
                                <a class="btn btn-primary" href="#">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider4.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7">
                            <div class="slider_text">
                                <span>Lookbook</span>
                                <h1>fashion trend for autum girls with vibes</h1>
                                <p>We love seeing how our Aslam wearers like <br> to wear their Norda</p>
                                <a class="btn btn-primary" href="#">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->

    <!--shipping section start-->
    <section class="shipping_section mb-102">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shipping_inner d-flex justify-content-between">
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-cursor icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>Miễn phí vận chuyển</h3>
                                <p>Đơn hàng trên 500.000 VNĐ</p>
                            </div>
                        </div>
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-reload icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>Trả hàng miễn phí</h3>
                                <p>Trong vòng 30 ngày</p>
                            </div>
                        </div>
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-lock icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>Thanh toán an toàn 100%</h3>
                                <p>Thanh toán trực tuyến</p>
                            </div>
                        </div>
                        <div class="single_shipping d-flex align-items-center">
                            <div class="shipping_icon">
                                <i class="icon-tag icons"></i>
                            </div>
                            <div class="shipping_text">
                                <h3>Giá cả phải chăng</h3>
                                <p>Đảm bảo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shipping section end-->


    <!-- product section start -->
    <section class="product_section mb-96">
        <div class="container">
            <div class="product_header d-flex justify-content-between  mb-50">
                <div class="section_title">
                    <h2>Sản phẩm mới</h2>
                </div>
                {{-- <div class="product_tab_btn d-flex">
                    <div class="all_product">
                        <a href="#">Tất cả sản phẩm</a>
                    </div>
                </div> --}}
            </div>
            <div class="product_container row">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="all" role="tabpanel">
                        <div class="product_slick slick_slider_activation"
                            data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                            @foreach ($newest_product_8 as $new_product)
                                <article class="col single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="/product_details/{{ $new_product->id }}">
                                                <img class="primary_img"
                                                    src="{{ asset('storage/images/' . $new_product->img) }}"
                                                    alt="consectetur">
                                            </a>
                                            <div class="product_action">
                                                <ul>
                                                    <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                            data-tippy-inertia="true" data-tippy-delay="50"
                                                            data-tippy-arrow="true" data-tippy-placement="left"><i
                                                                class="icon-heart icons"></i></a></li>

                                                    <li class="quick_view"><a data-toggle="modal" data-target="#modal_box"
                                                            data-tippy="Quick View" href="#" data-tippy-inertia="true"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-placement="left"><i
                                                                class="icon-size-fullscreen icons"></i></a></li>
                                                    <li class="compare"><a data-tippy="Compare" href="#"
                                                            data-tippy-inertia="true" data-tippy-delay="50"
                                                            data-tippy-arrow="true" data-tippy-placement="left"><i
                                                                class="icon-refresh icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <div class="product_ratting">
                                                <ul class="d-flex justify-content-center">
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><span>(8)</span></li>
                                                </ul>
                                            </div>
                                            <h4 class="product_name"><a
                                                    href="/product_details/{{ $new_product->id }}">{{ $new_product->name }}</a></h4>
                                            <div class="price_box">
                                                <span class="text-black">{{ $new_product->price }}</span>
                                            </div>
                                            <div class="add_to_cart">
                                                <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="top">Thêm vào giỏ hàng</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->


    <!-- product section start -->
    <section class="product_section mb-80">
        <div class="container">
            <div class="product_header d-flex justify-content-between  mb-60">
                <div class="section_title">
                    <h2>Sản phẩm HOT</h2>
                </div>
                <div class="product_tab_btn d-flex">
                </div>
            </div>
            <div class="product_container row">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="all2" role="tabpanel">
                        <div class="product_slick slick_slider_activation"
                            data-slick='{
                            "slidesToShow": 4,
                            "slidesToScroll": 1,
                            "arrows": true,
                            "dots": false,
                            "autoplay": false,
                            "speed": 300,
                            "infinite": true,
                            "responsive":[
                              {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                              {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                              {"breakpoint":300, "settings": { "slidesToShow": 1 } }
                             ]
                        }'>
                            @foreach ($top8_hot_product as $hot_product)
                                <article class="col single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="/product_details/{{ $hot_product->id }}">
                                                <img class="primary_img"
                                                    src="{{ asset('storage/images/' . $hot_product->img) }}"
                                                    alt="consectetur">
                                            </a>
                                            <div class="product_action">
                                                <ul>
                                                    <li class="wishlist"><a href="#" data-tippy="Wishlist"
                                                            data-tippy-inertia="true" data-tippy-delay="50"
                                                            data-tippy-arrow="true" data-tippy-placement="left"><i
                                                                class="icon-heart icons"></i></a></li>

                                                    <li class="quick_view"><a data-toggle="modal"
                                                            data-target="#modal_box" data-tippy="Quick View"
                                                            href="#" data-tippy-inertia="true"
                                                            data-tippy-delay="50" data-tippy-arrow="true"
                                                            data-tippy-placement="left"><i
                                                                class="icon-size-fullscreen icons"></i></a></li>
                                                    <li class="compare"><a data-tippy="Compare" href="#"
                                                            data-tippy-inertia="true" data-tippy-delay="50"
                                                            data-tippy-arrow="true" data-tippy-placement="left"><i
                                                                class="icon-refresh icons"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <figcaption class="product_content text-center">
                                            <div class="product_ratting">
                                                <ul class="d-flex justify-content-center">
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                    <li><span>(8)</span></li>
                                                </ul>
                                            </div>
                                            <h4 class="product_name"><a
                                                    href="/product_details/{{ $hot_product->id }}">{{ $hot_product->name }}</a></h4>
                                            <div class="price_box">
                                                <span class="text-black">{{ $hot_product->price }}</span>
                                            </div>
                                            <div class="add_to_cart">
                                                <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                                    data-tippy-inertia="true" data-tippy-delay="50"
                                                    data-tippy-arrow="true" data-tippy-placement="top">Thêm vào giỏ hàng</a>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </article>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->
@endsection

@extends('user.layouts.layout');
@section('main-content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area breadcrumbs_product mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--product details start-->
    <section class="product_details mb-135 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product_zoom_gallery">
                        <div class="zoom_gallery_inner d-flex">
                            <div class="zoom_tab_img">
                                <a class="zoom_tabimg_list" href="javascript:void(0)">
                                    <img src="{{ asset('storage/images/' . $product->img) }}" alt="tab-thumb">
                                </a>
                                <a class="zoom_tabimg_list" href="javascript:void(0)">
                                    <img src="{{ asset('storage/images/' . $product->img) }}" alt="tab-thumb">
                                </a>
                                <a class="zoom_tabimg_list" href="javascript:void(0)">
                                    <img src="{{ asset('storage/images/' . $product->img) }}" alt="tab-thumb">
                                </a>
                                <a class="zoom_tabimg_list" href="javascript:void(0)">
                                    <img src="{{ asset('storage/images/' . $product->img) }}" alt="tab-thumb">
                                </a>
                                <a class="zoom_tabimg_list" href="javascript:void(0)">
                                    <img src="{{ asset('storage/images/' . $product->img) }}" alt="tab-thumb">
                                </a>
                                <a class="zoom_tabimg_list" href="javascript:void(0)">
                                    <img src="{{ asset('storage/images/' . $product->img) }}" alt="tab-thumb">
                                </a>
                                <a class="zoom_tabimg_list" href="javascript:void(0)">
                                    <img src="{{ asset('storage/images/' . $product->img) }}" alt="tab-thumb">
                                </a>
                                <a class="zoom_tabimg_list" href="javascript:void(0)">
                                    <img src="{{ asset('storage/images/' . $product->img) }}" alt="tab-thumb">
                                </a>
                                <a class="zoom_tabimg_list" href="javascript:void(0)">
                                    <img src="{{ asset('storage/images/' . $product->img) }}" alt="tab-thumb">
                                </a>
                            </div>
                            <div class="product_zoom_main_img">
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('storage/images/' . $product->img) }}"
                                        src="{{ asset('storage/images/' . $product->img) }}" alt="">
                                </div>
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('storage/images/' . $product->img) }}"
                                        src="{{ asset('storage/images/' . $product->img) }}" alt="">
                                </div>
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('storage/images/' . $product->img) }}"
                                        src="{{ asset('storage/images/' . $product->img) }}" alt="">
                                </div>
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('storage/images/' . $product->img) }}"
                                        src="{{ asset('storage/images/' . $product->img) }}" alt="">
                                </div>
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('storage/images/' . $product->img) }}"
                                        src="{{ asset('storage/images/' . $product->img) }}" alt="">
                                </div>
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('storage/images/' . $product->img) }}"
                                        src="{{ asset('storage/images/' . $product->img) }}" alt="">
                                </div>
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('storage/images/' . $product->img) }}"
                                        src="{{ asset('storage/images/' . $product->img) }}" alt="">
                                </div>
                                <div class="product_zoom_thumb">
                                    <img data-image="{{ asset('storage/images/' . $product->img) }}"
                                        src="{{ asset('storage/images/' . $product->img) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#">
                            <h1>{{ $product->name }} </h1>
                            <div class="product_ratting_review d-flex align-items-center">
                                <div class=" product_ratting">
                                    <ul class="d-flex">
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                        <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_review">
                                    <ul class="d-flex">
                                        <li>{{ $product->view }} views</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price_box">
                                <span class="current_price">{{ $product->price }} VND</span>
                            </div>
                            <div class="product_desc">

                            </div>
                            <div class="product_variant">
                                <div class="filter__list widget_color d-flex align-items-center">
                                    <h3>Màu sắc</h3>
                                    <div class="px-2">
                                        <input type="radio" class="btn-check" id="color" autocomplete="off"
                                            name="color">
                                        <label class="btn btn-outline-secondary" for="color">Đen</label><br>
                                    </div>
                                    <div class="px-2">
                                        <input type="radio" class="btn-check" id="color2" autocomplete="off"
                                            name="color">
                                        <label class="btn btn-outline-secondary" for="color2">Trắng</label><br>
                                    </div>
                                    <div class="px-2">
                                        <input type="radio" class="btn-check" id="color3" autocomplete="off"
                                            name="color">
                                        <label class="btn btn-outline-secondary" for="color3">Xanh</label><br>
                                    </div>
                                </div>
                                <div class="filter__list widget_size d-flex align-items-center">
                                    <h3>Size</h3>
                                    <div class="px-2">
                                        <input type="radio" class="btn-check" id="size" autocomplete="off"
                                            name="size">
                                        <label class="btn btn-outline-secondary" for="size">S</label><br>
                                    </div>
                                    <div class="px-2">
                                        <input type="radio" class="btn-check" id="size2" autocomplete="off"
                                            name="size">
                                        <label class="btn btn-outline-secondary" for="size2">M</label><br>
                                    </div>
                                    <div class="px-2">
                                        <input type="radio" class="btn-check" id="size3" autocomplete="off"
                                            name="size">
                                        <label class="btn btn-outline-secondary" for="size3">L</label><br>
                                    </div>
                                    <div class="px-2">
                                        <input type="radio" class="btn-check" id="size4" autocomplete="off"
                                            name="size">
                                        <label class="btn btn-outline-secondary" for="size4">XL</label><br>
                                    </div>
                                </div>

                                <div class="variant_quantity_btn d-flex">
                                    <div class="pro-qty border">
                                        <input min="1" max="100" type="tex" value="1">
                                    </div>
                                    <button class="button btn btn-primary" type="submit"><i class="ion-android-add"></i>
                                        Thêm vào giỏ hàng</button>
                                    <a class="wishlist" href="#"><i class="ion-ios-heart"></i></a>
                                </div>
                            </div>
                            <div class="product_sku">
                                <p><span>SKU: </span> #ABC123456</p>
                            </div>
                            <div class="product_tags d-flex">
                                <span>tags: </span>
                                <ul class="d-flex">
                                    <li><a href="#">fashion,</a></li>
                                    <li><a href="#">clothings,</a></li>
                                    <li><a href="#">accessorires</a></li>
                                </ul>
                            </div>
                            <div class="priduct_social d-flex">
                                <span>SHARE: </span>
                                <ul>
                                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
                                    <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info mb-118">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_d_inner">
                        <div class="product_info_button border-bottom">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#info" role="tab"
                                        aria-controls="info" aria-selected="false">Mô tả sản phẩm</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews"
                                        aria-selected="false">Reviews </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <div class="product_info_content">
                                    <p>{{ $product->desc }}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                <div class="reviews_wrapper">
                                    <h2>1 review for Donec eu furniture</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul class="d-flex">
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2018</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published. Required fields are marked </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                        <h3>Your rating</h3>
                                        <ul class="d-flex">
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment"></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author" type="text">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email" type="text">
                                                </div>
                                            </div>
                                            <button type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

    <!--product area start-->
    <section class="product_area related_products mb-118">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title mb-50">
                        <h2>SẢN PHẨM TƯƠNG TỰ</h2>
                    </div>
                </div>
            </div>
            <div class="product_container row">
                <div class=" product_slick slick_slider_activation"
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
                    @foreach ($similar_product as $similar)
                        <div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a href="/product_details/{{ $similar->id }}">
                                            <img class="primary_img" src="{{ asset('storage/images/' . $similar->img) }}"
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
                                                {{-- <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li>
                                                <li><a href="#"><i class="ion-android-star"></i></a></li> --}}
                                                <li><span>(View: {{ $similar->view }} )</span></li>
                                            </ul>
                                        </div>
                                        <h4 class="product_name"><a href="product-details.html">{{ $similar->name }}</a>
                                        </h4>
                                        <div class="price_box">
                                            <span class="current_price">{{ $similar->price }} VND</span>
                                        </div>
                                        <div class="add_to_cart">
                                            <a class="btn btn-primary" href="#" data-tippy="Add To Cart"
                                                data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true"
                                                data-tippy-placement="top">Thêm vào giỏ</a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--product area end-->
@endsection

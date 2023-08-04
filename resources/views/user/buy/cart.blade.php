@extends('user.layouts.layout');
@section('main-content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area breadcrumbs_other">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content text-center">
                        <h3>Giỏ hàng</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area">
        <div class="container">
            <form action="#">
                <div class="cart_page_inner mb-60">
                    <div class="row">
                        <div class="col-12">
                            <div class="cart_page_tabel">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm </th>
                                            <th>Thông tin</th>
                                            <th>Giá</th>
                                            <th>Số lượng</th>
                                            <th>Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (Session::has('list_cart') && !empty(Session::get('list_cart')))
                                            @foreach (Session::get('list_cart') as $list_cart)
                                                <tr class="border-top">
                                                    <td>
                                                        <div class="cart_product_thumb">
                                                            <img src="{{ asset('storage/images/' . $list_cart['img']) }}"
                                                                alt="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="cart_product_text">
                                                            <h4>{{ $list_cart['name'] }}</h4>
                                                            <ul>
                                                                <li><i class="ion-ios-arrow-right"></i> Color :
                                                                    <span>{{ $list_cart['color'] }}</span>
                                                                </li>
                                                                <li><i class="ion-ios-arrow-right"></i> Size :
                                                                    <span>{{ $list_cart['size'] }}</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="cart_product_price">
                                                            <span>{{ number_format($list_cart['price']) }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="product_quantity">
                                                        <div class="cart_product_quantity">
                                                            <input min="1" max="100"
                                                                value="{{ $list_cart['quantity'] }}" type="number">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="cart_product_price">
                                                            <span
                                                                class="total_money">{{ number_format($list_cart['quantity'] * $list_cart['price']) }}</span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="cart_product_remove text-right">
                                                            <a href="/delete_one_cart/{{ $list_cart['id'] }}"><i
                                                                    class="ion-android-close"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_page_button border-top d-flex justify-content-between">
                                <div class="shopping_cart_btn">
                                    <a href="/delete_all_cart" class="btn btn-primary border">Xóa tất cả sản phẩm</a>
                                </div>
                                <div class="shopping_continue_btn">

                                    <button class="btn btn-primary" type="submit">Tiếp tục mua sắm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="cart_page_bottom">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shopping_coupon_calculate top">
                                <h3 class="border-bottom">Vận chuyển </h3>
                                <select class="select_option border">
                                    <option value="1">United Kingdom (UK) </option>
                                    <option value="2">Åland Islands </option>
                                    <option value="3">Afghanistan </option>
                                    <option value="4">Belgium </option>
                                    <option value="5">Albania </option>
                                </select>
                                <input class="border" placeholder="State / Country" type="text">
                                <input class="border" placeholder="Postcode / Zip" type="text">
                                <button class="btn btn-primary" type="submit">Nhận báo giá</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="shopping_coupon_calculate">
                                <h3 class="border-bottom">Mã giảm giá </h3>
                                <p>Enter your coupon code if you have one.</p>
                                <input class="border" placeholder="Enter your code" type="text">
                                <button class="btn btn-primary" type="submit">Áp dụng</button>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="grand_totall_area">
                                <div class="grand_totall_inner border-bottom">
                                    <div class="cart_subtotal d-flex justify-content-between">
                                        <p>Tổng phụ </p>
                                        <span></span>
                                    </div>
                                    <div class="cart_grandtotal d-flex justify-content-between">
                                        <p>Tổng cộng</p>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="proceed_checkout_btn">
                                    <a class="btn btn-primary" href="/check_out">Mua hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form>
        </div>
    </div>
    <!--shopping cart area end -->


@endsection

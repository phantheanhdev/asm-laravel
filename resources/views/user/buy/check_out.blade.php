@extends('user.layouts.layout');
@section('main-content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area breadcrumbs_other">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content text-center">
                        <h3>Thanh toán</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="checkout_section" id="accordion">
        <div class="container">
            <div class="returning_coupon_area">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="user-actions">
                            <h3>
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                Phản hồi khách hàng?
                                <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_login"
                                    aria-expanded="true">Nhấn vào đây để đăng nhập</a>

                            </h3>
                            <div id="checkout_login" class="collapse" data-parent="#accordion">
                                <div class="checkout_info">
                                    <p>If you have shopped with us before, please enter your details in the boxes below. If
                                        you are a new customer please proceed to the Billing & Shipping section.</p>
                                    <form action="#">
                                        <div class="form_group">
                                            <label>Username or email <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group">
                                            <label>Password <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="form_group group_3 ">
                                            <button class="btn btn-primary" type="submit">Login</button>
                                            <label for="remember_box">
                                                <input id="remember_box" type="checkbox">
                                                <span> Remember me </span>
                                            </label>
                                        </div>
                                        <a href="#">Lost your password?</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="user-actions">
                            <h3>
                                <i class="fa fa-comment-o" aria-hidden="true"></i>
                                Có phiếu giảm giá ?
                                <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_coupon2"
                                    aria-expanded="true">Nhấn vào đây để nhập mã của bạn</a>

                            </h3>
                            <div id="checkout_coupon2" class="collapse" data-parent="#accordion">
                                <div class="checkout_info coupon_info">
                                    <form action="#">
                                        <input placeholder="Coupon code" type="text">
                                        <button class="btn btn-primary" type="submit">Apply coupon</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <form action="/save_bill" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h3>Chi tiết thanh toán</h3>
                            {{-- <div class="checkout_form_input">
                                <label for="country">country <span>*</span></label>
                                <select class="select_option" name="cuntry" id="country">
                                    <option value="2">United Kingdom (UK) </option>
                                    <option value="3">Algeria</option>
                                    <option value="4">Afghanistan</option>
                                    <option value="5">Ghana</option>
                                    <option value="6">Albania</option>
                                    <option value="7">Bahrain</option>
                                    <option value="8">Colombia</option>
                                    <option value="9">Dominican Republic</option>
                                </select>
                            </div> --}}
                            <div class="checkout_form_input">
                                <label>Họ và tên <span>*</span></label>
                                <input type="text" name="full_name" required>
                            </div>
                            <div class="checkout_form_input">
                                <label>Địa chỉ <span>*</span></label>
                                <input type="text" name="address" required>
                            </div>
                            <div class="checkout_form_input">
                                <label> Email <span>*</span></label>
                                <input type="email" name="email" required>
                            </div>
                            <div class="checkout_form_input">
                                <label> Số điện thoại <span>*</span></label>
                                <input type="text" name="phone" required>
                            </div>
                            {{-- <p class="different_address"><i class="ion-android-checkbox-outline"></i> Ship to a different
                                address?</p>
                            <div class="checkout_form_input">
                                <label for="country2">country <span>*</span></label>
                                <select class="select_option" name="cuntry" id="country2">
                                    <option value="2">United Kingdom (UK) </option>
                                    <option value="3">Algeria</option>
                                    <option value="4">Afghanistan</option>
                                    <option value="5">Ghana</option>
                                    <option value="6">Albania</option>
                                    <option value="7">Bahrain</option>
                                    <option value="8">Colombia</option>
                                    <option value="9">Dominican Republic</option>
                                </select>
                            </div>
                            <div class="checkout_form_input">
                                <label>First Name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Last Name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Company Name</label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Town / City <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="checkout_form_input">
                                <label>Order Notes</label>
                                <textarea></textarea>
                            </div> --}}

                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="order_table_right">

                            <h3>đơn đặt hàng của bạn</h3>
                            <div class="order_table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Sản phẩm</th>
                                            <th class="text-right">Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (Session::has('list_cart') && !empty(Session::get('list_cart')))
                                            @foreach (Session::get('list_cart') as $list_cart)
                                                <tr>
                                                    <td> {{ $list_cart['name'] }} </td>
                                                    <td class="text-right ckout_total_one">
                                                        {{ number_format($list_cart['quantity'] * $list_cart['price']) }}
                                                    </td>
                                                </tr>
                                                <input type="hidden" name="list_cart[]"
                                                    value="{{ json_encode($list_cart) }}">
                                            @endforeach
                                        @endif
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>Tổng phụ </td>
                                            <td class="text-right" id="ckout_subtotal">$225.60</td>
                                        </tr>
                                        <tr class="order_total">
                                            <th>Tổng cộng</th>
                                            <td class="text-right" id="ckout_total">$225.60</td>
                                            <input type="hidden" id="input_total" name="total" value="">
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="panel-default">
                                    <div class="panel_radio">
                                        <input id="payment3" name="pttt" value="0" type="radio" checked
                                            data-target="createp_account" />
                                        <span class="checkmark"></span>
                                    </div>
                                    <label for="payment3" data-toggle="collapse" data-target="#method3">Thanh toán khi
                                        nhận hàng</label>
                                    <div id="method3" class="collapse three" data-parent="#accordion">
                                        <div class="card-body1">
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="place_order_btn">
                                <button type="submit" class="btn btn-primary">Đặt hàng</button>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Checkout page section end-->
@endsection

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        return view('user.buy.cart');
    }

    public function add_cart(Request $request)
    {
        // Kiểm tra xem session 'list_cart' đã tồn tại chưa, nếu chưa thì khởi tạo là một mảng trống
        if (!$request->session()->has('list_cart')) {
            $request->session()->put('list_cart', []);
        }

        // Lấy danh sách sản phẩm từ session 'list_cart'
        $listCart = $request->session()->get('list_cart');

        // Lấy thông tin sản phẩm từ request
        $product = $request->all();

        // Thêm sản phẩm vào danh sách
        $listCart[] = $product;

        // Lưu danh sách sản phẩm đã thêm vào session
        $request->session()->put('list_cart', $listCart);

        // Debug để xem danh sách sản phẩm trong session
        dd($request->session()->get('list_cart'));
    }
}

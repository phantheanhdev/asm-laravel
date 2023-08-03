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
        if (!$request->session()->has('list_cart')) {
            $request->session()->put('list_cart', []);
        }

        $productId = $request->input('id');
        $name = $request->input('name');
        $desc = $request->input('desc');
        $img = $request->input('img');
        $price = $request->input('price');
        $color = $request->input('color');
        $size = $request->input('size');
        $quantity = $request->input('quantity');

        $productData = [
            'id' => $productId,
            'name' => $name,
            'quantity' => $quantity,
            'img' => $img,
            'price' => $price,
            'color' => $color,
            'size' => $size,
            'desc' => $desc,
        ];

        // Thêm sản phẩm vào session
        $cart = session()->get('list_cart', []);

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        $productKey = $productId;
        if (array_key_exists($productKey, $cart)) {
            // Nếu sản phẩm đã tồn tại, chỉ cập nhật số lượng
            $cart[$productKey]['quantity'] += $quantity;
        } else {
            // Nếu sản phẩm chưa tồn tại, thêm sản phẩm vào giỏ hàng
            $cart[$productKey] = $productData;
        }

        // Lưu giỏ hàng vào session
        session()->put('list_cart', $cart);

        // dd(session('list_cart'));

        return redirect('cart');
    }

    public function delete_all_cart()
    {
        Session::flush();
        return redirect('cart');
    }
}

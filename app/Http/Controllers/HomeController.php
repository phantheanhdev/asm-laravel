<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // lấy 8 sản phẩm mới nhất săp xếp theo id
        $newest_product_8 = Product::orderByDesc('id')->take(8)->get();

        // lấy 8 sản phẩm hot nhất (nhiều view)
        $top8_hot_product = Product::orderByDesc('view')->take(8)->get();

        return view('user.home', [
            'newest_product_8' => $newest_product_8,
            'top8_hot_product' => $top8_hot_product
        ]);
    }
}

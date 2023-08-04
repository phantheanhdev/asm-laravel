<?php

namespace App\Http\Controllers;

use App\Models\Bill;
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

        $cart = session()->get('list_cart', []);

        $productKey = $productId;
        if (array_key_exists($productKey, $cart)) {
            $cart[$productKey]['quantity'] += $quantity;
        } else {
            $cart[$productKey] = $productData;
        }

        session()->put('list_cart', $cart);

        return redirect('cart');
    }

    public function delete_all_cart()
    {
        Session::forget('list_cart');
        return redirect('cart');
    }

    public function delete_one_cart(Request $request)
    {
        $id = $request->id;
        $arrayInSession = session('list_cart', []);


        if (array_key_exists($id, $arrayInSession)) {
            Session::forget('list_cart.' . $id);
        }
        return redirect('cart');
    }

    public function check_out()
    {
        return view('user.buy.check_out');
    }

    public function save_bill(Request $request)
    {
        $data = $request->all();

        $listCartJson = json_encode($data['list_cart']);

        $bill = Bill::create([
            'full_name' => $data['full_name'],
            'address' => $data['address'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'list_cart' => $listCartJson,
            'total' => $data['total'],
            'pttt' => $data['pttt'],
        ]);

        if ($bill) {
            Session::forget('list_cart');
            return redirect('/bill');
        }
    }

    public function bill()
    {
        return view('user.buy.bill');
    }
}

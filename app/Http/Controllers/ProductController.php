<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Doctrine\DBAL\Query;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        $categories = Category::get();

        return view('admin.product.index', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();

        return view('admin.product.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $desc = $request->input('desc');
        $category_id = $request->input('category_id');

        $img = $request->file('img')->getClientOriginalName();
        $request->file('img')->storeAs('public/images', $img);

        $data = [
            'name' => $name,
            'price' => $price,
            'desc' => $desc,
            'view' => 0,
            'category_id' => $category_id,
            'img' => $img
        ];
        Product::create($data);
        return redirect()->route('product.index')->with('success', 'Thêm thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::get();

        return view('admin.product.edit', compact('product'), ['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $desc = $request->input('desc');
        $category_id = $request->input('category_id');

        $img = $request->file('img')->getClientOriginalName();
        $request->file('img')->storeAs('public/images', $img);

        $product->fill([
            'name' => $name,
            'price' => $price,
            'desc' => $desc,
            'view' => 0,
            'category_id' => $category_id,
            'img' => $img
        ])->save();

        return redirect()->route('product.index')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Xóa thành công');
    }

    // ================================ user ===============================

    public function product_details($id)
    {
        $product = Product::find($id);
        $similar_product = Product::where('category_id', '=', $product->category_id)->get();

        $up_view = $product->view + 1;

        $product->fill([
            'view' => $up_view
        ])->save();

        return view('user.product.product_details', [
            'product' => $product,
            'similar_product' => $similar_product
        ]);
    }

    public function single_product($id)
    {
        $products = Product::where('category_id', $id)->get();
        $categories = Category::all();

        return view('user.product.single_product', [
            'products' => $products,
            'categories' => $categories
        ]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function addProduct() {
        return view('admin.add-product');
    }

    function store(Request $request) {

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->save();

        return back();
    }

    function products() {
        $all_products = Product::all();

        return view('admin.all_products', compact('all_products'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;
use \App\Models\User;

class ProductsController extends Controller
{
    public function index() {
        return view('all-products.index', [
            'products' => Product::where('is_lended_out', false)->get()
        ]);
    }

    public function show($id) {
        return view('all-products.show', [
            'product' => Product::find($id), 
            'product_owner' => User::find(Product::find($id)->owner_id)
        ]);
    }

    public function my_products() {
        return view('my-products.index', [
            'products' => Product::where('owner_id', auth()->user()->id)->get(),
            'amount_of_products' => Product::where('owner_id', auth()->user()->id)->count()
        ]);
    }
}

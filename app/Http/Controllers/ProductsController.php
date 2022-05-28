<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;
use \App\Models\User;

class ProductsController extends Controller
{
    public function index() {
        return view('all-products.index', [
            'products' => Product::all()
        ]);
    }

    public function show($id) {
        return view('all-products.show', [
            'product' => Product::find($id), 
            'product_owner' => User::find(Product::find($id)->owner_id)
        ]);
    }
}

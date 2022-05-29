<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\MaxLendPeriod;


class ProductsController extends Controller
{
    public function index() {

        $products = Product::where('is_lended_out', false)->get();

        // get product owner name from product
        foreach($products as $product) {
            $product->owner_name = User::find($product->owner_id)->name;
        }

        return view('all-products.index', [
            'products' => $products
        ]);
    }

    public function show($id) {

        $product = Product::find($id);

        return view('all-products.show', [
            'product' => $product, 
            'product_owner' => $product->productOwner,
        ]);
    }

    public function my_products() {

        $products = User::find(auth()->user()->id)->allProducts;

        return view('my-products.index', [
            'products' => $products->all(),
            'amount_of_products' => $products->count(),
        ]);
    }

    public function create() {
        return view('my-products.create', [
            'categories' => Category::all(),
            'periods' => MaxLendPeriod::all()
        ]);
    }

    public function store(Request $request, Product $product) {
        $product->name = $request->input('name');
        $product->owner_id = auth()->user()->id;
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->image = 'products1.jpg';
        $product->max_lend_time = $request->input('max_lend_time');
        $product->save();

        try {
            $product->save();
            return redirect('/');
        } catch(Exception $e) {
            return redirect('my-products/create');
        }

        return redirect('/my-products/create');
    }
}

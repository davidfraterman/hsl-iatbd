<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\MaxLendPeriod;
use \App\Models\CurrentLend;
use \App\Models\LendRequest;


class ProductsController extends Controller
{
    public function index() {

        $products = Product::where('is_lended_out', false)->get();
        $categories = Category::all();

        // get product owner name from product
        foreach($products as $product) {
            $product->owner_name = User::find($product->owner_id)->name;
        }

        return view('all-products.index', [
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function show($id) {

        $product = Product::find($id);

        $is_already_lent_out = CurrentLend::where('product_id', $id)->exists();
        $has_user_already_requested = LendRequest::where('requester_id', auth()->user()->id)->where('product_id', $id)->exists();

        return view('all-products.show', [
            'product' => $product, 
            'product_owner' => $product->productOwner,
            'has_user_already_requested' => $has_user_already_requested,
            'is_already_lent_out' => $is_already_lent_out
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
        $product->image = 'product1.jpg';
        $product->max_lend_time = $request->input('max_lend_time');
        $product->save();

        try {
            $product->save();
            return redirect('/my-products');
        } catch(Exception $e) {
            return redirect('/my-products/create');
        }

        return redirect('/my-products/create');
    }

    public function delete($id) {
        $product = Product::find($id);
        $product->delete();

        if(CurrentLend::where('product_id', $id)->first()) {
            $current_lend = CurrentLend::where('product_id', $id)->first();
            $current_lend->delete();
        }

        if(LendRequest::where('product_id', $id)->first()) {
            $lend_request = LendRequest::where('product_id', $id)->first();
            $lend_request->delete();
        }
        
        try {
            $product->delete();
            return redirect('/');
        } catch(Exception $e) {
            return redirect('/products/' . $id);
        }

        return redirect('/my-products');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\CurrentLend;
use App\Models\LendRequest;

class CurrentLendsController extends Controller
{
    public function index() {

        $lends = User::find(auth()->user()->id)->currentLends;

        foreach($lends as $lend) {
            $lend->borrower_name = User::find($lend->borrower_id)->name;
            $lend->product_name = Product::find($lend->product_id)->name;
        }

        $borrows = User::find(auth()->user()->id)->currentBorrows;

        foreach($borrows as $borrow) {
            $borrow->lender_name = User::find($borrow->product_owner_id)->name;
            $borrow->product_name = Product::find($borrow->product_id)->name;
        }

        return view('my-current-lends.index', [
            'borrows' => $borrows->all(),
            'amount_of_borrows' => $borrows->count(),
            'lends' => $lends->all(),
            'amount_of_lends' => $lends->count(),
        ]);
    }

    public function store(Request $request, CurrentLend $current_lend) {

        $current_lend->borrower_id = $request->input('requester_id');
        $current_lend->product_id = $request->input('product_id');
        $current_lend->product_owner_id = auth()->user()->id;

        $lend_request = LendRequest::where('requester_id', $request->input('requester_id'))
                                    ->where('product_id', $request->input('product_id'))
                                    ->first();
        

        $product = Product::find($request->input('product_id'));
        $product->is_lended_out = true;
        
        try {
            $current_lend->save();
            $product->save();
            $lend_request->delete();
            return redirect('/');
        } catch(Exception $e) {
            return redirect('/my-current-lends/create');
        }

        return redirect('/my-current-lends/create');
    }

    public function delete(Request $request, CurrentLend $current_lend) {

        $current_lend = CurrentLend::where('borrower_id', $request->input('borrower_id'))
            ->where('product_id', $request->input('product_id'))
            ->first();

        $product = Product::find($request->input('product_id'));
        $product->is_lended_out = false;

        $product_owner_id = User::find($product->owner_id)->id;

         try {
            $current_lend->delete();
            $product->save();
            return redirect('/users/' . $product_owner_id . '/review/create');
        } catch(Exception $e) {
            return redirect('/my-current-lends');
        }
    }

}

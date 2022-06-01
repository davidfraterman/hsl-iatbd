<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use \App\Models\LendRequest;

class LendRequestsController extends Controller
{
    public function index() {

        $lend_requests = User::find(auth()->user()->id)->currentLendRequests;

        foreach($lend_requests as $lend_request) {
            $lend_request->borrower_name = User::find($lend_request->requester_id)->name;
            $lend_request->product_name = Product::find($lend_request->product_id)->name;
        }

        return view('my-lend-requests.index', [
            'lend_requests' => $lend_requests->all(),
            'amount_of_lend_requests' => $lend_requests->count(),
        ]);
    }

    public function store(Request $request, LendRequest $lend_request) {

        $lend_request->requester_id = auth()->user()->id;
        $lend_request->product_id = $request->input('product_id');
        $lend_request->product_owner_id = Product::find($request->input('product_id'))->owner_id;
        
        try {
            $lend_request->save();
            return redirect('/');
        } catch(Exception $e) {
            return redirect('/my-lend-requests');
        }

        return redirect('/my-lend-requests');
    }

    public function delete(Request $request, LendRequest $lend_request) {

        $lend_request = LendRequest::where('requester_id', $request->input('requester_id'))
                                    ->where('product_id', $request->input('product_id'))
                                    ->first();

        $lend_request->delete();

        return redirect('/my-lend-requests');
    }
}

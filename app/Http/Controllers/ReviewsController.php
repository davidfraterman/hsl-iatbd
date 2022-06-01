<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewsController extends Controller
{
    public function create($id)
    {
        return view('review.create', [
            'lender_id' => $id,
        ]);
    }

    public function store(Request $request, Review $review) {
        $review->rating = $request->input('rating');
        $review->user_id = auth()->user()->id;
        $review->lender_id = $request->input('lender_id');
        $review->comment = $request->input('comment');

        try {
            $review->save();
            return redirect('/my-current-lends');
        } catch(Exception $e) {
            return redirect('/users/' . $request->input('lender_id') . '/review/create');
        }
    }
}

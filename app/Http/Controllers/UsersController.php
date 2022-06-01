<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Product;
use \App\Models\Review;

class UsersController extends Controller
{
    public function show($id) {

        $user = User::find($id);
        $products = User::find($id)->allProducts;
        $ratings = User::find($id)->allReviews;
        $amount_of_ratings = $ratings->count();
        $average_rating = $ratings->avg('rating');

        foreach($ratings as $rating) {
            $rating->reviewer_name = User::find($rating->user_id)->name;
        }
        
        return view('user.show', [
            'user' => $user,
            'products' => $products->all(),
            'amount_of_ratings' => $amount_of_ratings,
            'ratings' => $ratings->all(),
            'average_rating' => $average_rating,
        ]);
    }

    public function block($id) {
        $user = User::find($id);
        $user->role = 'blocked';
        $user->save();

        return redirect('/users/' . $id);
    }

    public function unblock($id) {
        $user = User::find($id);
        $user->role = 'user';
        $user->save();

        return redirect('/users/' . $id);
    }
}

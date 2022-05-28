<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use \App\Models\Product;

class UsersController extends Controller
{
    public function show($id) {
        return view('user.show', [
            'user' => User::find($id),
            'products' => Product::where('owner_id', $id)->get()
        ]);
    }
}

<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\ReviewsController;
use \App\Http\Controllers\UsersController;
use \App\Http\Controllers\ProductsController;
use \App\Http\Controllers\LendRequestsController;
use \App\Http\Controllers\CurrentLendsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function() {
    Route::get('/', [ProductsController::class, 'index']);
    Route::get('/products/{id}', [ProductsController::class, 'show']);

    Route::get('/users/{id}', [UsersController::class, 'show']);

    Route::get('/my-products', [ProductsController::class, 'my_products']);
    Route::post('/my-products/create', [ProductsController::class, 'store']);
        
    Route::get('/my-products/create', [ProductsController::class, 'create']);

    Route::get('/my-lend-requests', [LendRequestsController::class, 'index']);
    Route::get('/my-current-lends', [CurrentLendsController::class, 'index']);

    Route::post('/my-lend-requests/create', [LendRequestsController::class, 'store']);
    Route::post('/my-lend-requests/delete', [LendRequestsController::class, 'delete']);
    Route::post('/my-current-lends/create', [CurrentLendsController::class, 'store']);
    Route::post('/my-current-lends/delete', [CurrentLendsController::class, 'delete']);

    Route::get('/users/{id}/review/create', [ReviewsController::class, 'create']);
    Route::post('/users/{id}/review/create', [ReviewsController::class, 'store']);
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

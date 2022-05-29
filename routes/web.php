<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('/', [\App\Http\Controllers\ProductsController::class, 'index']);
    Route::get('/products/{id}', [\App\Http\Controllers\ProductsController::class, 'show']);

    Route::get('/users/{name}', [\App\Http\Controllers\UsersController::class, 'show']);

    Route::get('/my-products', [\App\Http\Controllers\ProductsController::class, 'my_products']);
    Route::post('/my-products', [\App\Http\Controllers\ProductsController::class, 'store']);
        
    Route::get('/my-products/create', [\App\Http\Controllers\ProductsController::class, 'create']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

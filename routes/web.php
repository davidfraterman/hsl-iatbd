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
    Route::get('/', [\App\Http\Controllers\ProductsController::class, 'index'])->middleware(['auth']);
    Route::get('/products/{id}', [\App\Http\Controllers\ProductsController::class, 'show'])->middleware(['auth']);

    Route::get('/users/{id}', [\App\Http\Controllers\UsersController::class, 'show'])->middleware(['auth']);

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

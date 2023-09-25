<?php

use App\Models\Product;
use App\Livewire\Products;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('admin/products', ProductController::class)->name('admin.product');
// Route::get('admin/products', Products::class);
Route::get('/shop', ShopController::class)->name('shop');

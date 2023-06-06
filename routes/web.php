<?php

use App\Http\Controllers\Products;
use App\Http\Controllers\Categories;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[Products\IndexController::class,'start'])->name('main');
Route::get('/product/{id}',[Products\IndexController::class,'details'])->name('product.detail');

Route::get('/shop_cart',[Products\IndexController::class,'shopCart'])->name('main.shop_cart');
Route::get('/shop_checkout',[Products\IndexController::class,'shopCheckout'])->name('main.shop_checkout');
Route::post('/shop_order_completed',[Products\IndexController::class,'shopOrderCompleted'])->name('main.shop_order_completed');

Route::post('/add',[Products\AjaxController::class,'startAjaxAdd'])->name('main.post.add');
Route::post('/add_many',[Products\AjaxController::class,'startAjaxAddMany'])->name('main.post.add_many');
Route::post('/dell',[Products\AjaxController::class,'startAjaxDell'])->name('main.post.dell');
Route::post('/count',[Products\AjaxController::class,'startAjaxEditCount'])->name('main.post.count');

Route::get('/category/{id}',[Categories\IndexController::class,'categorySelecting'])->name('list.category');
Route::get('/category/{id}/products',[Categories\IndexController::class,'getProductsByCategory'])->name('list.products');



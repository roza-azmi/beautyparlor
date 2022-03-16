<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ReclogController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ShiftController;


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

Route::get('/master', function () {
    return view('master');
});

Route::get('/beautician', function () {
    return view('pages.product.beautician');
});

Route::get('/receptionist', function () {
    return view('pages.product.receptionist');
});

Route::get('/productlist', function () {
    return view('pages.product.productlist');
});


Route::get('/shifttime', function () {
    return view('pages.product.shifttime');
});

Route::get('/pages/product/category/create',[CategoryController::class,'categoryForm'])->name('pages.product.category.create');
Route::get('/category/form',[CategoryController::class,'categoryForm'])->name('category.form');
// Route::post('/category/post',[CategoryController::class,'categoryPost'])->name('category.post');
Route::post('/category/store',[CategoryController::class,'categorystore'])->name('category.store');

Route::get('pages/product/productlist',[ProductController::class,'list'])->name('pages.product.productlist');
// Route::get('pages/product/shifttime',[ShiftController::class,'shiftlist'])->name('pages.product.shifttime');
Route::get('/product/shifttime',[ShiftController::class,'shift'])->name('pages.product.shifttime');


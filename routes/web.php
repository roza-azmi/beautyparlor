<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ShiftController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\ReclogController;
use App\Http\Controllers\Backend\BookingController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ServicelistController;
use App\Http\Controllers\Backend\ShiftcreateController;
use App\Http\Controllers\Backend\ServicecreateController;
use App\Http\Controllers\Frontend\CustomAuthController;







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

// beautycian
Route::get('/beautician', function () {
    return view('pages.product.beautician');
});
// receptionist
Route::get('/receptionist', function () {
    return view('pages.product.receptionist');
});

// customer log in
Route::get('/customer/Login',[CustomAuthController::class,'Login'])->name('customer.Login');



// customer registration
Route::get('/customer/registration',[CustomAuthController::class,'registration'])->name('customer.registration');
Route::post('/customer/do/registration',[CustomerAuthController::class,'doregistration'])->name('customer.doregistration');

// customer view
Route::get('/customer/view',[CustomAuthController::class,'customer'])->name('customer.view');




// service show
Route::get('/customer/serviceshow',[CustomAuthController::class,'serviceshow'])->name('service.show');











// home route
Route::get('/home',[HomeController::class,'home'])->name('home');
Route::get('/main', function () {
    return view('frontend.main');
})->name('main');








Route::get('/admin/login',[UserController::class,'login'])->name('admin.login');
Route::post('/admin/do-login',[UserController::class,'doLogin'])->name('admin.do.login');



Route::group(['prefix'=>'admin','middleware'=>'auth'] , function(){
    Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');
     Route::get('/', function(){
         return view('dashboard.view');
     })->name('dashboard.view');




// admin 
Route::get('/master', function () {
    return view('master');
})->name('master');

//create category (editt$delete)
Route::get('/category/view',[CategoryController::class, 'view'])->name('category.view');
Route::get('/category/form',[CategoryController::class, 'showform'])->name('category.form');
Route::post('/category/create',[CategoryController::class, 'create'])->name('category.create');
Route::get('/category/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/update/{id}',[CategoryController::class, 'update'])->name('category.update');
Route::get('/category/delete/{id}',[CategoryController::class, 'delete'])->name('category.delete');



// create booking  (editt$delete)
Route::get('/booking/bookingcreate',[BookingController::class,'bookinglist'])->name('booking.list');
Route::get('/booking/view',[BookingController::class, 'view'])->name('booking.view');
Route::get('/booking/form',[BookingController::class, 'showform'])->name('booking.form');
Route::post('/booking/create',[BookingController::class, 'create'])->name('booking.create');
Route::get('/booking/delete/{id}',[BookingController::class, 'delete'])->name('booking.delete');
Route::get('/booking/edit/{id}',[BookingController::class, 'edit'])->name('booking.edit');
Route::put('/booking/update/{id}',[BookingController::class, 'update'])->name('booking.update');



// create product  (editt$delete)
Route::get('pages/product/productlist',[ProductController::class,'list'])->name('pages.product.productlist');
Route::get('/product/view',[ProductController::class, 'view'])->name('product.view');
Route::get('/product/form',[ProductController::class, 'showform'])->name('product.form');
Route::post('/product/create',[ProductController::class, 'create'])->name('product.create');
Route::get('/product/edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/update/{id}',[ProductController::class, 'update'])->name('product.update');
Route::get('/product/delete/{id}',[ProductController::class, 'delete'])->name('product.delete');



//create shift  (editt$delete)
Route::get('/pages/shift',[ShiftController::class,'shiftlist'])->name('shift.list');
Route::get('/pages/shiftcreate',[ShiftcreateController::class,'shiftcreate'])->name('shift.create');

Route::get('/shift/view',[ShiftController::class, 'view'])->name('shift.view');
Route::get('/shift/form',[ShiftController::class, 'showform'])->name('shift.form');
Route::post('/shift/create',[ShiftController::class, 'create'])->name('shift.create');
Route::get('/shift/edit/{id}',[ShiftController::class, 'edit'])->name('shift.edit');
Route::put('/shift/update/{id}',[ShiftController::class, 'update'])->name('shift.update');
Route::get('/shift/delete/{id}',[ShiftController::class, 'delete'])->name('shift.delete');



// create service  (editt$delete)
Route::get('/service/view',[ServicecreateController::class, 'view'])->name('service.view');
Route::get('/service/form',[ServicecreateController::class, 'showform'])->name('service.form');
Route::post('/service/create',[ServicecreateController::class, 'create'])->name('service.create');
Route::get('/service/delete/{id}',[ServicecreateController::class, 'delete'])->name('service.delete');
Route::get('/service/edit/{id}',[ServicecreateController::class, 'edit'])->name('service.edit');
Route::put('/service/update/{id}',[ServicecreateController::class, 'update'])->name('service.update');


// payment  (editt$delete)
Route::get('/payment/paymentcreate',[PaymentController::class,'paymentlist'])->name('payment.list');
Route::get('/payment/view',[PaymentController::class, 'view'])->name('payment.view');
Route::get('/payment/form',[PaymentController::class, 'showform'])->name('payment.form');
Route::post('/payment/create',[PaymentController::class, 'create'])->name('payment.create');
Route::get('/payment/delete/{id}',[PaymentController::class, 'delete'])->name('payment.delete');
Route::get('/payment/edit/{id}',[PaymentController::class, 'edit'])->name('payment.edit');
Route::put('/payment/update/{id}',[PaymentController::class, 'update'])->name('payment.update');


// dashboard

Route::get('/dashboard/view',[DashboardController::class,'dashboard'])->name('dashboard.view');

});
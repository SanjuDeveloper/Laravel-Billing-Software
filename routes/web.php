<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\customer\CustomerController;
use App\Http\Controllers\Locale\LangController;
//use App\Http\Controllers;


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

Route::get('/', function () {
    if(session()->has('user'))
    {
        return redirect('/dashboard');
    }
    return view('account/login');
});

Route::post('/loginRequest', [UserController::class, 'adminLogin'])->name('loginRequest.post');
Route::post('/signupRequest', [UserController::class, 'adminSignup'])->name('signupRequest.post');
Route::view('/signup', 'account/signup');

Route::group(['middleware' => ['checklogin']], function () {
    Route::view('/dashboard', 'dashboard');
    Route::view('/bill', 'billGenerat/index');
    Route::view('/main', 'main');
    Route::view('/customerAdd', 'customer/add');
    Route::view('/addcategory', 'category/addCategory');
    Route::get('/change',   [LangController::class, 'change'])->name('changeLang');  
    Route::get('/viewProduct', [ProductController::class, 'index'])->name('viewProduct.get');
    Route::get('/addProduct', [ProductController::class, 'get'])->name('addproduct.get');
    Route::post('/addproduct', [ProductController::class, 'store'])->name('addproduct.post');
    Route::get('/editProduct/{id}', [ProductController::class, 'edit']);
    Route::post('/updateProduct', [ProductController::class, 'update'])->name('updateProduct.post');
    Route::get('/viewCategory', [CategoryController::class, 'get'])->name('viewCategory.get');
    Route::post('/addcategory', [CategoryController::class, 'store'])->name('addpcategory.post');
    Route::post('/addcustomer', [CustomerController::class, 'store'])->name('addcustomer.post');
    Route::get('/viewcustomer', [CustomerController::class, 'get'])->name('addcustomer.get');

});

Route::get('/logout', function () {
    session()->forget('user');
   return redirect('/');

});


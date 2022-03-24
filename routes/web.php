<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Category\CategoryController;
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
    //Route::view('/viewCategory', 'category/index');
    Route::view('/addcategory', 'category/addCategory');
    Route::get('/viewCategory', [CategoryController::class, 'get'])->name('viewCategory.get');
    Route::get('/addProduct', [ProductController::class, 'get'])->name('addproduct.get');
    Route::post('/addproduct', [ProductController::class, 'store'])->name('addproduct.post');
    Route::post('/addcategory', [CategoryController::class, 'store'])->name('addpcategory.post');
    //Route::get('/user/{id}', [UserController::class, 'show']);

});

Route::get('/logout', function () {
    session()->forget('user');
   return redirect('/');

});


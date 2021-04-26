<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Session;

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
    return view('login');
});
Route::get('logout', function () {
	Session::forget('user');
    return view('login');
});

// Route For Login Page
Route::get('/login',function(){
	return view('login');
});

//Route for User Controller
Route::post('/login',[UserController::class,'login']);


//Route for Product Controller
Route::get('/product',[ProductController::class,'index']);

//Route for Product Detail Controller
Route::get('detail/{id}',[ProductController::class,'detail']);

//Route for Product Detail Controller
Route::get('search',[ProductController::class,'search']);

//Route for Add To Cart Controller
Route::post('add_to_cart',[ProductController::class,'addToCart']);

//Route for Cart List Controller
Route::get('cartlist',[ProductController::class,'cartList']);

//Route for Remove Cart List Controller
Route::get('removecart/{id}',[ProductController::class,'removeCartItem']);




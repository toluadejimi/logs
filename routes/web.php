<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;


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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',  [HomeController::class,'index']);
Route::get('item',  [ItemController::class,'item']);



//auth


Route::post('login',  [HomeController::class,'login']);
Route::post('register',  [HomeController::class,'register']);
Route::get('log-out',  [HomeController::class,'logout']);

Route::get('fund-wallet',  [HomeController::class,'fund_wallet']);
Route::get('fund-account',  [HomeController::class,'fund_wallet']);

Route::get('profile',  [HomeController::class,'profile']);

Route::post('fund-now',  [HomeController::class,'fund_now']);

Route::get('verify',  [HomeController::class,'verify_payment']);


Route::post('session-resolve',  [HomeController::class,'session_resolve']);

Route::get('change-password',  [HomeController::class,'change_password']);


Route::post('update-password-now',  [HomeController::class,'update_password_now']);






//admin
Route::get('admin',  [AdminController::class,'index']);

Route::get('admin-dashboard',  [AdminController::class,'admin_dashboard']);

Route::get('caterogies',  [AdminController::class,'categories']);

Route::post('add-new-cat',  [AdminController::class,'add_new_cat']);
Route::get('delete-cat',  [AdminController::class,'delete_cat']);

Route::get('products',  [AdminController::class,'index_product']);
Route::post('delete-product',  [AdminController::class,'delete_product']);

Route::post('add-new-pr',  [AdminController::class,'add_new_pr']);
Route::post('delete-pr',  [AdminController::class,'delete_pr']);










Route::post('admin-login',  [AdminController::class,'admin_login']);

















//product

Route::post('buy-now',  [ProductController::class,'buy_now']);
Route::post('item-view',  [ProductController::class,'item_view']);

Route::get('item-view',  [ProductController::class,'i_view']);

Route::get('allcatproduct',  [ProductController::class,'view_all_product']);

Route::post('add-new-product',  [ProductController::class,'add_new_product']);

Route::post('add-front-product',  [ProductController::class,'add_front_product']);

Route::get('detete-front-product',  [ProductController::class,'delete_front_product']);


Route::post('edit-new-product',  [ProductController::class,'edit_front_product']);


//Route::get('view-all',  [ProductController::class,'view_all_product']);


Route::post('/telegram', 'TelegramBotController@handle');

































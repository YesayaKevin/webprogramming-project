<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HistoryController;

Route::fallback([ProductController::class,'index_home']);

// GET's Authentication
Route::get('/login',[UserController::class,'index_login'])->name('index_login');
Route::get('/register',[UserController::class,'index_register'])->name('index_register');

// POST's Authentication
Route::post('/login',[UserController::class,'login'])->name('login');
Route::post('/register',[UserController::class,'register'])->name('register');
Route::post('/logout',[UserController::class,'logout'])->name('logout');

//Index
Route::get('/home', [ProductController::class,'index_home'])->name('home');
Route::get('/about-us', [ProductController::class,'index_about'])->name('aboutus');
Route::get('/our-product', [ProductController::class,'index'])->name('ourproduct');
Route::get('/contact-us', [ProductController::class,'index_contact'])->name('contactus');

//update profile
Route::get('/edit-profile', [UserController::class,'update_page'])->name('editprofile');
Route::post('/edit-profile', [UserController::class,'update'])->name('editprofileLogic');

// PRoduct Detail
Route::get('/product-detail/{id}', [ProductController::class, 'product_detail'])->name('productdetail');



Route::get('/history',[HistoryController::class,'viewTransaction'])->name('history');

// Product CRUD
Route::get('/add-product', [ProductController::class,'create_page'])->name('addproduct');
Route::post('/add-product', [ProductController::class,'create'])->name('addproductLogic');

Route::get('/edit-product/{id}', [ProductController::class,'edit'])->name('editproduct');
Route::post('/edit-product/{id}', [ProductController::class,'update'])->name('editproductLogic');

Route::delete('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
 

// cart function
Route::post('/add-item/{id}', [ItemController::class, 'addItemToCart'])->name('addItemToCart');
Route::delete('/cart/{id}',[ItemController::class,'removeItem'])->name('removeitem');
Route::get('/cart', [CartController::class, 'cart_page'])->name('cart');

// belum
Route::get('/checkout/{id}/{total}',[HistoryController::class,'checkout'])->name('checkout');

Route::get('/transaction-history',[HistoryController::class,'viewTransaction'])->name('transaction');

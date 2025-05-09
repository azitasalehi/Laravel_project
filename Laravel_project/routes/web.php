<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MagController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index2'])->name('home');

Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact-us');

Route::post('/insert-comment/{slug}', [CommentController::class, 'insert_comment'])->name('insert_comment');

Route::get('/category-blog', [MagController::class, 'category_blog'])->name('category_blog');

Route::get('/single-blog/{slug}', [MagController::class, 'single_blog'])->name('single_blog');

Route::get('/single-blog/category/{slug}/{id}', [MagController::class, 'showMagazine'])->name('cat');


Route::get('/list-category', [ProductController::class, 'list_category'])->name('list_category');

Route::get('/single-product/{slug}', [ProductController::class, 'single_product'])->name('single_product');

Route::get('/list-category/single-product/{slug}', [ProductController::class, 'single_product'])->name('list_category-single-product');

Route::any('/search-product', [ProductController::class, 'search_product'])->name('search_product');

Route::get('/search-product/most-visited', [ProductController::class, 'most_visit'])->name('most_visited');

Route::get('/search-product/newest', [ProductController::class, 'newest'])->name('newest');

Route::get('/search-product/price', [ProductController::class, 'price'])->name('price');

Route::get('/{slug}', [CartController::class, 'add_to_cart'])->name('add_to_cart');

Route::get('/cart/سبد-خرید', [CartController::class, 'cartPage'])->name('cart-page');

Route::get('/cart/show', [CartController::class, 'showCart'])->name('show-cart');
Route::get('/cart/delete/{slug}', [CartController::class, 'deleteCart'])->name('delete-cart');


///////// Login Routes ///////////
///
///


//Route::get('/home', [HomeController::class, 'index2'])->name('home');
//
//Route::get('/login', [LoginController::class, 'showLoginForm'])->name('show_login');
//Route::post('/login', [LoginController::class, 'login'])->name('login');
//
////Route::get('/logout', [LoginController::class, 'logout'])->name('logout2');
//Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.send');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.send');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

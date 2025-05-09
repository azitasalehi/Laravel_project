<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth:admin')->group(function () {

    Route::get('/', [AdminController::class, 'profile'])->name('main');

    //Category Routes
    Route::get('/add-category', [AdminController::class, 'category'])->name('category');

    Route::post('/add-category', [AdminController::class, 'add_category'])->name('add-category');

    Route::get('/active-category/{name}', [AdminController::class, 'active_category'])->name('active-category');

    Route::get('/not-active-category/{name}', [AdminController::class, 'not_active_category'])->name('not-active-category');


    //Products Routes
    Route::get('/products', [AdminController::class, 'products'])->name('products');

    Route::get('/add-product', [ProductController::class, 'add_product'])->name('add-product');

    Route::post('/add-product', [ProductController::class, 'form_product'])->name('add-product-form');

    Route::get('/edit-product/{slug}', [ProductController::class, 'edit_product'])->name('edit-product');

    Route::post('/edit-product/{slug}', [ProductController::class, 'edit_product_form'])->name('edit-product-form');

    Route::get('/delete-product/{slug}', [ProductController::class, 'delete_product'])->name('delete-product');

    Route::delete('/delete-product/{slug}', [ProductController::class, 'delete_product_form'])->name('delete-product-form');


    //Admin Routes
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('profile-admin');

    Route::get('/admin/profile/update', [AdminController::class, 'profile_update'])->name('profile-update');

    Route::post('/admin/profile/update', [AdminController::class, 'profile_update_form'])->name('profile-update-form');

    Route::get('/users', [AdminController::class, 'users'])->name('users');

    Route::delete('/users/{name}', [AdminController::class, 'delete_user'])->name('delete-user');

    Route::get('/user/edit/{name}', [AdminController::class, 'edit_user'])->name('edit-user');

    Route::post('/user/edit/{name}', [AdminController::class, 'edit_user_form'])->name('edit-user-form');



    //Comments Routes
    Route::get('/comments', [AdminController::class, 'comments'])->name('comments');

    Route::post('/comments/approve/{name}', [AdminController::class, 'comments_approve'])->name('comments-approve');

    Route::get('/comments/delete/{name}', [AdminController::class, 'comments_delete'])->name('comments-delete');


});

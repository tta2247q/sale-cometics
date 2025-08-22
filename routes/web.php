<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('front-end.pages.home');
})->name('home');

Route::get('/Admin', function () {
   return view('Admin.dashboard.index');
})->name('dashboard');

Route::get('/Admin/product', [ProductController::class, 'index'])->name('Admin.products.index');
Route::get('/Admin/user', [UserController::class, 'index'])->name('Admin.users.index');

Route::get('/Admin/user/create', [UserController::class, 'create'])->name('Admin.users.create');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('Admin.users.edit');
Route::get('/users/{user}/show', [UserController::class, 'show'])->name('Admin.users.show');
Route::post('/users', [UserController::class, 'store'])->name('Admin.users.store');
Route::put('/users/{user}', [UserController::class, 'update'])->name('Admin.users.update');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('Admin.users.destroy');

Route::get('/Admin/product/create', [ProductController::class, 'create'])->name('Admin.products.create');
Route::post('/products', [ProductController::class, 'store'])->name('Admin.products.store');
Route::get('/products/{product}/show', [ProductController::class, 'show'])->name('Admin.products.show');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('Admin.products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('Admin.products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('Admin.products.destroy');


// language switch route
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('front-end.pages.home');
})->name('home');

Route::get('/Admin', function () {
    return view('Admin.dashboard.index');
})->name('dashboard');



Route::get('/news', function () {
    return view('front-end.pages.news');
})->name('news');

Route::get('/contact', function () {
    return view('front-end.pages.contact');
})->name('contact');

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

Route::prefix('Admin')->name('Admin.')->group(function () {
    Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
    Route::get('/categories/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');
});

// language switch route
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

// login routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('Admin.dashboard.index');
    })->name('admin.dashboard');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', function () {
        return view('front-end.pages.home');
    })->name('user.dashboard');
});

use App\Http\Controllers\CartItemsController;

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartItemsController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartItemsController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{cartItem}', [CartItemsController::class, 'remove'])->name('cart.remove');
});
// web.php
Route::get('/cart', [CartItemsController::class, 'index'])->name('cart.index');
Route::delete('/cart/{cartItem}', [CartItemsController::class, 'remove'])->name('cart.remove');
Route::get('/products', [ProductController::class, 'showProducts'])->name('products.list');
Route::middleware('auth')->group(function () {
    Route::get('/', [CartItemsController::class, 'getCartItems'])->name('home');
});

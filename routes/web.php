<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartItemsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Users\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

// ----------- Static Pages -----------
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/payment', [HomeController::class, 'payment'])->name('payment');

// ----------- Auth Routes -----------
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// ----------- Language Switch -----------
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

// ----------- Admin Routes -----------
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('Admin.dashboard.index');
    })->name('admin.dashboard');

    Route::get('/Admin/contacts', [ContactController::class, 'index'])->name('Admin.contacts.index');
    Route::get('/Admin/contacts/{id}', [ContactController::class, 'show'])->name('Admin.contacts.show');

    // Product CRUD
    Route::get('/Admin/product', [ProductController::class, 'index'])->name('Admin.products.index');
    Route::get('/Admin/product/create', [ProductController::class, 'create'])->name('Admin.products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('Admin.products.store');
    Route::get('/products/{product}/show', [ProductController::class, 'show'])->name('Admin.products.show');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('Admin.products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('Admin.products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('Admin.products.destroy');

    // User CRUD
    Route::get('/Admin/user', [UserController::class, 'index'])->name('Admin.users.index');
    Route::get('/Admin/user/create', [UserController::class, 'create'])->name('Admin.users.create');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('Admin.users.edit');
    Route::get('/users/{user}/show', [UserController::class, 'show'])->name('Admin.users.show');
    Route::post('/users', [UserController::class, 'store'])->name('Admin.users.store');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('Admin.users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('Admin.users.destroy');

    // Category CRUD
    Route::prefix('Admin')->name('Admin.')->group(function () {
        Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
        Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });

    // Blog CRUD
    Route::get('/Admin/blogs',[BlogController::class,'index'])->name('blog.index');
    Route::get('/Admin/blogs/create',[BlogController::class,'create'])->name('blog.create');
    Route::post('/blogs',[BlogController::class,'store'])->name('blog.store');
    Route::get('/blogs/{blog}/edit',[BlogController::class,'edit'])->name('blog.edit');
    Route::put('/blogs/{blog}',[BlogController::class,'update'])->name('blog.update');
    Route::delete('/blogs/{blog}',[BlogController::class,'destroy'])->name('blog.destroy');
    Route::get('/blogs/{blog}',[BlogController::class,'show'])->name('blog.show');
});

// ----------- Cart Routes -----------
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartItemsController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartItemsController::class, 'add'])->name('cart.add');
    Route::post('/cart/update/{cartItem}', [CartItemsController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{cartItem}', [CartItemsController::class, 'remove'])->name('cart.remove');
    Route::delete('/cart/clear', [CartItemsController::class, 'clear'])->name('cart.clear');
});

// ----------- Public Product List -----------
Route::get('/products', [ProductController::class, 'showProducts'])->name('products.list');
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('profile/edit/{id}', [ProfileController::class, 'edit'])->name('users.edit');
Route::put('profile/update/{id}', [ProfileController::class, 'update'])->name('users.update');

// ----------- Contact Routes -----------
    Route::post('/contacts', [ContactController::class, 'store'])->name('contact.store');
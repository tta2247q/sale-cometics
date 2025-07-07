<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('front-end.pages.home');
})->name('home');


Route::get('/Admin/product', [ProductController::class, 'index'])->name('Admin.products.index');

// Hiển thị form thêm sản phẩm
Route::get('/Admin/product/create', [ProductController::class, 'create'])->name('Admin.products.create');

// Lưu sản phẩm mới
Route::post('/products', [ProductController::class, 'store'])->name('Admin.products.store');

// Hiển thị 1 sản phẩm cụ thể (ít dùng với CRUD table)
Route::get('/products/{product}', [ProductController::class, 'show'])->name('Admin.products.show');

// Hiển thị form sửa sản phẩm
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('Admin.products.edit');

// Cập nhật sản phẩm
Route::put('/products/{product}', [ProductController::class, 'update'])->name('Admin.products.update');

// Xoá sản phẩm
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('Admin.products.destroy');

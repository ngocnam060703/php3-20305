<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abc', function () {
    return "Trang web ABC";
});

Route::get('/users/{name}', function ($name) {
    return "Xin chào, $name!";
});

// trường tham số có tồn tại hoặc không
Route::get('/comments/{user?}', function ($user = 'Test') {
    return "Comment của $user";
});

// Nhóm các đường dẫn có chung tiền tố
Route::prefix('admin')->group(function () {
    Route::get('/products', function () {
        return "Trang sản phẩm";
    })->name('products');// đặt tên cho đường dẫn  
Route::get('/users', function () {
        return "Trang người dùng";
    });
});

Route::get('/demo', function () {
    return view('demo.index');
});

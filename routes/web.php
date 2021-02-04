<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PriceCatController;
use App\Http\Controllers\ProductController;

//frontend
Route::get('/',[HomeController::class,'home'])->name('home');

//price range
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::get('/add_price_range',[PriceCatController::class,'add_price_range'])->name('add_price_range');
Route::post('/add_price_range/submit',[PriceCatController::class,'submit_price_range'])->name('submit_price_range');
Route::get('/all_price_range',[PriceCatController::class,'all_price_range'])->name('all_price_range');

//products
Route::get('/add_product', [ProductController::class, 'add_product'])->name('add_product');
Route::post('/add_product/submit', [ProductController::class, 'submit_product'])->name('submit_product');
Route::get('/all_product', [ProductController::class, 'all_product'])->name('all_product');
Route::get('/product_edit/{id}', [ProductController::class, 'edit_product'])->name('edit_product');
Route::post('/product_edit/save', [ProductController::class, 'edit_product_save'])->name('edit_product_save');
Route::get('/delete_product/{product_delete_id}',[ProductController::class, 'delete_product'])-> name('delete_product');

//filtered products
Route::get('/filtered_product/{filter_id}',[ProductController::class,'filtered_product'])-> name('filtered_product');




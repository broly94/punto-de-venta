<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('home');
});


Route::resource('categories', CategoryController::class)->names('categories');

Route::resource('clients', ClientController::class)->names('clients');

Route::resource('products', ProductController::class)->names('products');

Route::resource('providers', ProviderController::class)->names('providers');

Route::resource('purchases', PurchaseController::class)->names('purchases');

Route::resource('sales', SaleController::class)->names('sales');


<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::controller(CustomerController::class)->group(function () {
    Route::get('/customers', 'index');
    Route::get('/customers/create', 'create');
    Route::post('/customers', 'store');
    Route::get('/customers/{customer}/edit', 'edit');
    Route::put('/customers/{customer}', 'update');
});

Route::controller(SupplierController::class)->group(function () {
    Route::get('/suppliers', 'index');
    Route::get('/suppliers/create', 'create');
    Route::post('/suppliers', 'store');
    Route::get('/suppliers/{supplier}/edit', 'edit');
    Route::put('/suppliers/{supplier}', 'update');
});

Route::controller(PurchaseOrderController::class)->group(function () {
    Route::get('/purchase_orders', 'index');
    Route::get('/purchase_orders/create', 'create');
    Route::post('/purchase_orders', 'store');
    Route::get('/purchase_orders/{supplier}/edit', 'edit');
    Route::put('/purchase_orders/{supplier}', 'update');
    Route::get('/purchase_orders/{id}/invoice', [PurchaseOrderController::class, 'generateInvoice'])->name('purchase_orders.invoice');
});

Route::resource('customers', CustomerController::class);
Route::resource('purchase_orders', PurchaseOrderController::class);

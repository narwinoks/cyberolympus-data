<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PopularProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PopularProductController::class,'index'])->name('product.index');

// Route::prefix('popular')->group(function(){
//     Route::get('/product', [PopularProductController::class,'index']);
// });
Route::get('/product',[PopularProductController::class,'index'])->name('product.index');
Route::get('/Customers',[CustomerController::class,'index'])->name('customer.index');
Route::get('/agents',[AgentController::class,'index'])->name('agent.index');
Route::get('/invoice',[InvoiceController::class,'index'])->name('invoice.index');
Route::get('/show/{id}',[InvoiceController::class,'show'])->name('invoice.show');
Route::controller(DataController::class)-> prefix('popular')->group(function(){
   Route::get('/product', 'PopularProduct')->name('product');
   Route::get('/customer', 'PopularCustomer')->name('customer');
   Route::get('/agent', 'PopularAgent')->name('agent');
   Route::get('/invoice', 'Invoices')->name('invoice');
});

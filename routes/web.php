<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BranchController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\PurchaseController;
use App\Http\Controllers\Backend\Dashboard;
use App\Http\Controllers\Backend\SaleController;



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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard',function(){
//   return view('backend.dashboard');
// })->name('dashboard');
Route::GET('/admin',[Dashboard::class,'dashboard'])->name('dashboard');


Route::get('/blankpage',function(){
  return view('backend.masterTemplate.blank');
})->name('blank');

Route::group(['prefix'=>'/branch'],function(){
    Route::get('/add',[BranchController::class,'index'])->name('branchadd');
    Route::POST('/store',[BranchController::class,'store'])->name('branchstore');
    Route::get('/show',[BranchController::class,'show'])->name('branchshow');
    Route::get('/edit/{id}',[BranchController::class,'edit'])->name('branchedit');
    Route::POST('/update/{id}',[BranchController::class,'update'])->name('branchupdate');
    Route::get('/destroy/{id}',[BranchController::class,'destroy'])->name('branchdestroy');
    Route::get('/status/{id}',[BranchController::class,'status'])->name('status');
});
Route::group(['prefix'=>'/product'],function(){
  Route::get('/add',[ProductController::class,'add'])->name('productadd');
  Route::POST('/store',[ProductController::class,'store']);
  Route::get('/show',[ProductController::class,'show']);
  Route::GET('/edit/{id}',[ProductController::class,'edit']);
  Route::POST('/update/{id}',[ProductController::class,'update']);
  Route::GET('/deleteid/{id}',[ProductController::class,'deleteproduct']);
}); 
Route::group(['prefix'=>'/purchase'],function(){
  Route::get('/add',[PurchaseController::class,'add'])->name('purchaseadd');
  Route::POST('/store',[PurchaseController::class,'store']);
  Route::get('/show',[PurchaseController::class,'show']);
  Route::GET('/edit/{id}',[PurchaseController::class,'edit']);
  Route::GET('/find/{id}',[PurchaseController::class,'find']);
  Route::POST('/update/{id}',[PurchaseController::class,'update']);
  Route::GET('/deleteid/{id}',[PurchaseController::class,'deleteproduct']);
  Route::GET('/stock',[PurchaseController::class,'stock'])->name('stock');
}); 
Route::group(['prefix'=>'/sale'],function(){
  Route::get('/add',[SaleController::class,'add'])->name('saleadd');
  Route::POST('/store',[SaleController::class,'store']);
  Route::get('/show',[SaleController::class,'show']);
  Route::GET('/edit/{id}',[SaleController::class,'edit']);
  Route::GET('/find/{id}',[SaleController::class,'find']);
  Route::POST('/update/{id}',[SaleController::class,'update']);
  Route::GET('/destroy/{id}',[SaleController::class,'destroy'])->name("destroy");
  Route::GET('/salesshow',[SaleController::class,'salesshow']);
  Route::GET('/print/{id}',[SaleController::class,'print'])->name("print");
}); 
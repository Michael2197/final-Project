<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\Products2Controller;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MmController;
use App\Models\products2;




use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',function(){
    return view('FOOD project.food');
})->name('home');

Route::get('home',function(){
    return view('FOOD project.food');
})->name('home');

Route::get('booking',function(){
    notify()->error('you need to login first');
    return view('FOOD project.booking');})->name('booking');
    route::post('bookaction', [BookingController::class,'bookaction'])->name('book.action');


Route::get('contact',function(){
    return view('FOOD project.contact');})->name('contact');
// Route::get('menu',function(){
//     return view('FOOD project.menu');})->name('menu');
Route::get('admin',function(){
        return view('FOOD project.Admin');})->name('admin');




     route::get('menu', [ProductsController::class,'viewmenu'])->name('menu');


        route::middleware(['admin'])->group(function(){

        route::get('add products', [ProductsController::class,'addproductview'])->name('addproductview');
        route::post('submit products', [ProductsController::class,'addproduct'])->name('addproduct');
        route::get('view products', [ProductsController::class,'viewprod'])->name('viewproduct');
        route::post('del/{id}',[ProductsController::class,'del'])->name('del');
        route::post('update/{id}',[ProductsController::class,'updatvew'])->name('Update');
        route::post('updated/{id}',[ProductsController::class,'submituodat'])->name('Updated');

        });





// Route::controller(Products2Controller::class)->group(function(){
//         Route::get('product/add','add')->name('add');
//         Route::post('product/insert','insert')->name('insert');
//         Route::get('product/show','show')->name('show');
//         Route::get('product/update/{id}','updated')->name('update');
//         Route::post('product/updated/{id}','updatedData')->name('updated');
//         Route::get('product/delete/{id}','delete')->name('delete');
//         Route::get('product/deleteall','deleteAll')->name('deleted');

// });








// Route::controller(MmController::class)->group(function(){
//     Route::get('products','viewprod');
//     Route::get('products/edit','editprod');
//     Route::get('products/1','singleprod');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(auth()->user()->role == 'admin'){
            return view('FOOD project.Admin');
        }else{
            return view('dashboard');
        }
    })->name('dashboard');


});

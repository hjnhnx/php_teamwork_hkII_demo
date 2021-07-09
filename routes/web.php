<?php

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


//routers của cường


Route::prefix('admin')->group(function (){
    Route::get('/hello',[\App\Http\Controllers\cuong_demo_controller::class,'viewindex'])->name('hello');
    Route::get('/aboutus',[\App\Http\Controllers\cuong_demo_controller::class,'viewaboutus'])->name('aboutus');
    Route::get('/contact',[\App\Http\Controllers\cuong_demo_controller::class,'viewcontact'])->name('contact');
    Route::post('/hello',[\App\Http\Controllers\cuong_demo_controller::class,'viewpost'])->name('hellopost');

    Route::get('/updateproduct/{id}',[\App\Http\Controllers\cuong_demo_controller::class,'update_product'])->name('update_product');

    Route::post('/addproduct',[\App\Http\Controllers\cuong_demo_controller::class,'add_product'])->name('add_product');
});

Route::prefix('baitapcuacuong')->group(function (){
    Route::get('/login',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'vew_login'])->name('view_login');

    Route::post('/register',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'register'])->name('register');

    Route::post('/articlepost',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'articlepost'])->name('article_post');
    Route::get('/articleget',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'articleget'])->name('article_get');

});
//routers của cường

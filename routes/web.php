<?php

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

Auth::routes(['verify' => true]);

Route::resource('/sellerlogin', 'SellerRegisterController');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'admin'],function (){

    Route::get('/admin', function (){

        return view('admin.index');

    });

/*    Route::resource('/admin','AdminController',['as'=>'admin']);*/

    Route::resource('/admin/category','AdminCategoryController',['as'=>'admin']);

    Route::resource('/admin/product','AdminProductController',['as'=>'admin']);


});

Route::group(['middleware'=>'seller'],function (){

    Route::get('/seller', function (){
        return view('seller.index');
    });

    Route::resource('/seller/product','SellerProductController',['as'=>'seller']);

});

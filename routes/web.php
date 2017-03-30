<?php

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'dashboard'], function(){
    Route::resource('products', 'ProductController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

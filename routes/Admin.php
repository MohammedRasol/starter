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



Route::group(["prefix"=>"admin"],function() {

    Route::get("/", "AdminController@show_");
//        return "<h1 align='center'>Hello Admin</h1>";


});

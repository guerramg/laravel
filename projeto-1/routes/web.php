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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route:: namespace('App')->group(function(){
    Route::get('/', 'Http\Controllers\HomeController');
    Route::get('produtos','Http\Controllers\CategoryController@index');
    Route::get('produtos/{slug}','Http\Controllers\CategoryController@show');
    Route::get('blog','Http\Controllers\BlogController');
    Route::view('sobre','site.about.index');
    Route::get('contato','Http\Controllers\ContactController@index');
    Route::post('contato','Http\Controllers\ContactController@form');
});

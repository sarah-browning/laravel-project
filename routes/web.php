<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

// Resource Controller Routes
Route::resource('public', 'App\Http\Controllers\PublicController');
Route::resource('categories', 'App\Http\Controllers\CategoryController');
Route::resource('items', 'App\Http\Controllers\ItemController');

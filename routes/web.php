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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', 'App\Http\Controllers\HomeController::class@index')->name('home');

// // Category CRUD Routes
// Route::get('/categories', 'App\Http\Controllers\CategoryController@index');
// Route::post('/categories', 'App\Http\Controllers\CategoryController@store');
// Route::get('/categories/{id}', 'App\Http\Controllers\CategoryController@show');
// Route::get('/categories/{id}/edit', 'App\Http\Controllers\CategoryController@edit');
// Route::patch('/categories/{id}', 'App\Http\Controllers\CategoryController@update');
// Route::delete('/categories/{id}', 'App\Http\Controllers\CategoryController@destroy');

// // Item CRUD Routes
// Route::get('/items', 'App\Http\Controllers\ItemController@index');
// Route::post('/items', 'App\Http\Controllers\ItemController@store');
// Route::get('/items/{id}', 'App\Http\Controllers\ItemController@show');
// Route::get('/items/{id}/edit', 'App\Http\Controllers\ItemController@edit');
// Route::patch('/items/{id}', 'App\Http\Controllers\ItemController@update');
// Route::delete('/items/{id}', 'App\Http\Controllers\ItemController@destroy');

// Resource Controller Routes
Route::resource('public', 'App\Http\Controllers\PublicController');
Route::resource('categories', 'App\Http\Controllers\CategoryController');
Route::resource('items', 'App\Http\Controllers\ItemController');

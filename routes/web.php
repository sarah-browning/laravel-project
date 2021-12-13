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

// // Company CRUD Routes
// Route::get('/companies', 'App\Http\Controllers\CompanyController@index');
// Route::post('/companies', 'App\Http\Controllers\CompanyController@store');
// Route::get('/companies/{id}', 'App\Http\Controllers\CompanyController@show');
// Route::get('/companies/{id}/edit', 'App\Http\Controllers\CompanyController@edit');
// Route::patch('/companies/{id}', 'App\Http\Controllers\CompanyController@update');
// Route::delete('/companies/{id}', 'App\Http\Controllers\CompanyController@destroy');

// // Series CRUD Routes
// Route::get('/series', 'App\Http\Controllers\SeriesController@index');
// Route::post('/series', 'App\Http\Controllers\SeriesController@store');
// Route::get('/series/{id}', 'App\Http\Controllers\SeriesController@show');
// Route::get('/series/{id}/edit', 'App\Http\Controllers\SeriesController@edit');
// Route::patch('/series/{id}', 'App\Http\Controllers\SeriesController@update');
// Route::delete('/series/{id}', 'App\Http\Controllers\SeriesController@destroy');

// Resource Controller Routes
Route::resource('public', 'App\Http\Controllers\PublicController');
Route::resource('companies', 'App\Http\Controllers\CompanyController');
Route::resource('series', 'App\Http\Controllers\SeriesController');

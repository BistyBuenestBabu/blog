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


Route::get('/about', function () {
    return view('about');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/', 'App\Http\Controllers\BlogController@index');
Route::get('/post', 'App\Http\Controllers\BlogController@create')->middleware('auth');
Route::get('/find/{id}', 'App\Http\Controllers\BlogController@show');
Route::get('/delete/{id}', 'App\Http\Controllers\BlogController@destroy')->middleware('auth');
Route::post('save', 'App\Http\Controllers\BlogController@store');
Route::get('/edit/{id}', 'App\Http\Controllers\BlogController@edit')->middleware('auth');
Route::put('/update/{id}', 'App\Http\Controllers\BlogController@update');
   
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

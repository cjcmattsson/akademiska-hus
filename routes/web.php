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

Route::get('/', function() {
  return view('index');
});

Route::get('/login', 'AuthController@loginPage')->name('login')->middleware('guest');
Route::get('logout', 'AuthController@logout');
Route::post('login', 'AuthController@login');

// User must be logged in to reach Admin Dashboard
Route::get('/admin', 'AdminController@getContent')->middleware('auth');;

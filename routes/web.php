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

// route to the error-report section
Route::get('felanmallan', 'CreateReportController@index')->name('report');
Route::post('felanmallan', 'CreateReportController@sendReport')->name('send.report');


// User must be logged in to reach Admin Dashboard
Route::get('/login', 'AuthController@loginPage')->name('login')->middleware('guest');
Route::get('logout', 'AuthController@logout');
Route::post('login', 'AuthController@login');

Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard')->middleware('auth');;
Route::get('profile', 'AdminController@profile')->name('admin.profile')->middleware('auth');;

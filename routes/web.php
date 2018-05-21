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


Route::get('/', 'CampusSelectionController@campusSelection')->name('select.campus');
Route::post('/', 'CampusSelectionController@setCampusCookie')->name('store.campus');

// route to the error-report section
Route::get('felanmallan', 'CreateReportController@index')->name('report')->middleware('campus');
Route::post('felanmallan', 'CreateReportController@sendReport')->name('send.report');

// Route to NEWSFEEDS
Route::get('feed', 'FeedController@news')->name('feed')->middleware('campus');
// Route::get('feed/campus', 'FeedController@news')->name('campus')->middleware('campus');
// Route::get('feed/aha', 'FeedController@news')->name('aha')->middleware('campus');
// Route::get('feed/questions', 'FeedController@news')->name('questions')->middleware('campus');

// Route to chosen CAMPUS
Route::get('campusinfo', 'CampusInfoController@index')->middleware('campus');

// User must be logged in to reach Admin Dashboard
Route::get('/login', 'AuthController@loginPage')->name('login')->middleware('guest')->middleware('campus');
Route::get('logout', 'AuthController@logout');
Route::post('login', 'AuthController@login');

Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard')->middleware('auth');
Route::get('profile', 'AdminController@profile')->name('admin.profile')->middleware('auth');

<?php

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
Route::get('/', 'StartPageController@index');

Route::get('/setCampus', 'CampusSelectionController@campusSelection')->name('select.campus');
Route::post('/setCampus', 'CampusSelectionController@setCampusCookie')->name('store.campus');
Route::get('unsetcampus', 'CampusSelectionController@unsetCampus')->name('unset.campus');

// route to the error-report section
Route::get('felanmallan', 'CreateReportController@index')->name('report')->middleware('campus');
Route::post('felanmallan', 'CreateReportController@sendReport')->name('send.report');

// Route to NEWSFEEDS
Route::get('feed', 'FeedController@news')->name('feed')->middleware('campus');

// Route to chosen CAMPUS
Route::get('campusinfo', 'CampusInfoController@index')->middleware('campus');

// User must be logged in to reach Admin Dashboard
Route::get('/login', 'AuthController@loginPage')->name('login')->middleware('guest')->middleware('campus');
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout')->name('logout');

// Admin pages
Route::get('driftstorningar', 'AdminController@disturbances')->name('admin.disturbances')->middleware('auth');
Route::get('editcampus', 'AdminController@editCampus')->name('admin.campus')->middleware('auth');
Route::get('editfaq', 'AdminController@editFaq')->name('admin.faq')->middleware('auth');
Route::get('profile', 'AdminController@profile')->name('admin.profile')->middleware('auth');

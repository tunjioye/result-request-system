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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::namespace('Admin')->group(function () {
    // Controllers Within The "App\Http\Controllers\Admin" Namespace
    Route::prefix('admin')->group(function () {
        // Matches The "/admin/:url" URL
        Route::name('admin.')->group(function () {
            // Matches The "admin.{view}" URL
            Route::get('/home', 'HomeController@index')->name('home');
            Route::get('/profile', 'HomeController@profile')->name('profile');
            Route::post('/profile', 'HomeController@update_profile')->name('profile.update');
            Route::post('/password', 'HomeController@change_password')->name('change.password');
        });
    });
});

Route::get('/request-result', 'PublicController@requestResult')->name('request-result');
Route::get('/check-request-status', 'PublicController@checkRequestStatus')->name('check-request-status');
Route::get('/check-result', 'PublicController@checkResult')->name('check-result');

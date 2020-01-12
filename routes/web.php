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
            Route::post('/profile', 'HomeController@updateProfile')->name('profile.update');
            Route::post('/password', 'HomeController@changePassword')->name('change.password');

            // Manage Requests
            Route::resource('/requests', 'RequestController');

            // Manage Requesters
            Route::resource('/requesters', 'RequesterController');

            // Manage Results
            Route::resource('/results', 'ResultController');

            // Manage Students
            Route::resource('/students', 'StudentController');

            // Manage Schools
            Route::resource('/schools', 'SchoolController');
        });
    });
});

Route::get('/request-result', 'PublicController@requestResult')->name('request-result');
Route::get('/check-request-status', 'PublicController@checkRequestStatus')->name('check-request-status');
Route::get('/check-result', 'PublicController@checkResult')->name('check-result');

Route::post('/request-result', 'PublicController@requestResultProcess');
Route::post('/check-request-status', 'PublicController@checkRequestStatusProcess');
Route::post('/check-result', 'PublicController@checkResultProcess');

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

Route::group(['middleware' => 'cors'], function () {
    Route::get('/', function () {
        return redirect('api/calendar');
    });
    Route::get('/calendar', 'CloudCalendarController@index');
    Route::get('/home', function() {
        return view('home');
    });
});

Auth::routes();
Route::resource('api/calendar', 'CloudCalendarController');
Route::get('oauth', 'CloudCalendarController@oauth');




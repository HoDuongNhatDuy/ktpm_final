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

Route::get('/send-message', 'SocketController@sendMessage');

Route::get('/subjects', 'HomeController@getSubjects');
Route::post('/register-subject', 'HomeController@registerSubject');

Route::post('/subscribe-subject', 'HomeController@subscribeSubject');
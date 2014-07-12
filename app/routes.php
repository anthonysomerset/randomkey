<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'KeyController@all');

Route::get('/decent', 'KeyController@decent');

Route::get('/strong', 'KeyController@strong');

Route::get('/ftknox', 'KeyController@ftknox');

Route::get('/ci', 'KeyController@ci');

Route::get('/wpa160', 'KeyController@wpa160');

Route::get('/wpa504', 'KeyController@wpa504');

Route::get('/wep64', 'KeyController@wep64');

Route::get('/wep128', 'KeyController@wep128');

Route::get('/wep152', 'KeyController@wep152');

Route::get('/wep256', 'KeyController@wep256');

Route::get('/ip_address', 'KeyController@ip_address');
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

/*Route::group(['middleware' => ['auth']], function () {
	Route::get('/', ['as' => 'house.index', 'uses' => 'HomeController@index']);
	Route::get('/house/{assess_id}', ['as' => 'house.info', 'uses' => 'HouseController@info']);
	Route::get('/house_view/{assess_id}', ['as' => 'house.view', 'uses' => 'HouseController@view']);
	Route::get('/house_verify/{assess_id}', ['as' => 'house.verity', 'uses' => 'HouseController@verity']);
	Route::post('/save/{assess_id}', ['as' => 'house.verity', 'uses' => 'HouseController@save']);
});*/

Route::get('/', function () {
    return view('example.index');
});

Route::get('/index', function () {
    return view('example.index');
});

Route::get('/charts', function () {
    return view('example.charts');
});

Route::get('/tables', function () {
    return view('example.tables');
});

Route::get('/blank', function () {
    return view('example.blank');
});

Route::get('/cards', function () {
    return view('example.cards');
});

Route::get('/login', function () {
    return view('example.login');
});

Route::get('/register', function () {
    return view('example.register');
});

Route::get('/forgot-password', function () {
    return view('example.forgot-password');
});
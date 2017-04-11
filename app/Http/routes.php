<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () { return view('pages.home'); });
Route::get('/research', function () { return view('pages.research'); });
Route::get('/members', function () { return view('pages.members'); });
Route::get('/publications', function () { return view('pages.publications'); });
Route::get('/courses', function () { return view('pages.courses'); });
Route::get('/download', function () { return view('pages.download'); });
Route::get('/about', function () { return view('pages.about'); });

Route::get('/news/manage', 'NewsController@manage');

Route::resource('news', 'NewsController');
Route::resource('page', 'PageController');
Route::resource('member', 'MemberController');

// Authentication Routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

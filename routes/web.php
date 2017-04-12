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

Auth::routes();

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

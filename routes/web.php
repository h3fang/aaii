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

Route::get('/', 'PageController@home');
Route::get('/members', 'PageController@members');
Route::get('/download', 'PageController@download');

Route::get('/news/manage', 'NewsController@manage');
Route::get('/page/manage', 'PageController@manage');
Route::post('/page/order', 'PageController@order');

Route::resource('news', 'NewsController');
Route::resource('page', 'PageController', ['except' => [ 'index' ]]);
Route::resource('member', 'MemberController');

Route::get('/{id}', 'PageController@show');
